<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
//    get: admin/category   全部分类列表
    public function index () {
        $category = new Category();
        $data = $category->getChildView();
        return view('admin.category.index')->with('data',$data);
    }

    //    get: admin/category/create    添加分类
    public function create () {
        $data = Category::where('pid',0)->get();
        return view('admin.category.add',compact('data'));
    }

    //    post: admin/category    添加分类提交
    public function store () {
        if ($input = Input::except('_token')) {
            $rules = [
                'name' => 'required',
                'pid' => 'required',
            ];
            //密码确认表单name值需为password_confirmation
            $message = [
                'name.required' => '分类名称不能为空！',
                'pid.required' => '分类分级不能为空！',
            ];
            $validator = Validator::make($input,$rules,$message);
            if ($validator->passes()) {
//                使用create方法时，需在相应的模型类中设置fillable或guarded属性
                if (Category::create($input)) {
                    return redirect('admin/category');
                }else {
                    return back()->with(['errors' => '数据填充失败，请稍后重试！']);
                }
            }else {
                return back()->withErrors($validator);
            }
        }
    }

//    put: admin/category/{category}    更新分类
    public function update ($id) {
        $input = Input::except('_token','_method');
        if (Category::where('id',$id)->update($input)) {
            return redirect('admin/category');
        }else {
            return back()->with(['errors' => '数据更新失败，请稍后重试！']);
        }
    }

    //    get: admin/category/{category}/edit    编辑分类
    public function edit ($id) {
        $field = Category::find($id);
        $data = Category::where('pid',0)->get();
        return view('admin/category/edit',compact('field','data'));
    }

    //    delete: admin/category/{category}    删除单个分类
    public function destroy ($id) {
        if (Category::where('id',$id)->delete()) {
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

    //    get: admin/category/{category}    显示单个分类信息
    public function show () {

    }



    public function changeOrder () {
        $input = Input::all();
        $cate = Category::find($input['cate_id']);
        $cate->cate_order = $input['cate_order'];
        if ($cate->update()) {
            $data = [
                'status' => 1,
                'msg' => '排序更新成功！'
            ];
        }else {
            $data = [
                'status' => 0,
                'msg' => '排序更新失败，请稍后重试！'
            ];
        }
        return $data;
    }
}
