<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller {
    //    get: admin/article   全部文章列表
    public function index () {
//        分页信息
        $data = Article::orderBy('id','desc')->paginate(10);
        return view('admin.article.index',compact('data'));
    }

    //    get: admin/article/create    添加文章
    public function create () {
        $category = new Category();
        $data = $category->getChildView();
        return view('admin.article.add',compact('data'));
    }

    //    post: admin/article    添加文章提交
    public function store () {
        $input = Input::except('_token');
        $input['time'] = date('Y-m-d H:i:s');
        if ($input) {
            $rules = [
                'title' => 'required',
                'content' => 'required',
                'cate_id' => 'required',
            ];
            //密码确认表单name值需为password_confirmation
            $message = [
                'title.required' => '文章标题不能为空！',
                'content.required' => '文章内容不能为空！',
                'cate_id.required' => '请选择分类内容！',
            ];
            $validator = Validator::make($input,$rules,$message);
            if ($validator->passes()) {
//                使用create方法时，需在相应的模型类中设置fillable或guarded属性
                if (Article::create($input)) {
                    return redirect('admin/article');
                }else {
                    return back()->with(['errors' => '数据填充失败，请稍后重试！']);
                }
            }else {
                return back()->withErrors($validator);
            }
        }

    }

//    put: admin/article/{article}    更新文章
    public function update (Request $request ,$id) {
        $input = Input::except('_token','_method');
        dd($request);
        if (Article::where('id',$id)->update($input)) {
            return redirect('admin/article');
        }else {
            return back()->with(['errors' => '文章更新失败，请稍后重试！']);
        }
    }

    //    get: admin/article/{article}/edit    编辑文章
    public function edit ($id) {
        $category = new Category();
        $data = $category->getChildView();
        $field = Article::find($id);
        return view('admin.article.edit',compact('data','field'));
    }

    //    delete: admin/article/{article}    删除单个文章
    public function destroy ($id) {
        if (Article::where('id',$id)->delete()) {
            $data = [
                'status' => 1,
                'msg' => '数据删除成功！'
            ];
        }else {
            $data = [
                'status' => 0,
                'msg' => '数据删除失败，请稍后重试！'
            ];
        }
        return $data;
    }

    //    get: admin/article/{article}    显示单个文章信息
    public function show () {

    }



//    public function changeOrder () {
//        $input = Input::all();
//        $cate = Category::find($input['cate_id']);
//        $cate->cate_order = $input['cate_order'];
//        if ($cate->update()) {
//            $data = [
//                'status' => 1,
//                'msg' => '排序更新成功！'
//            ];
//        }else {
//            $data = [
//                'status' => 0,
//                'msg' => '排序更新失败，请稍后重试！'
//            ];
//        }
//        return $data;
//    }
}