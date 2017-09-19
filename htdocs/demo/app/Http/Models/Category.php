<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public $timestamps = false;
    protected $guarded = [];

    public function getChildView () {
        $category = $this->orderBy('cate_order','asc')->get();
        return $this->setChildView($category);
    }

    public function setChildView($data){
        $arr = array();
        foreach ($data as $k => $v) {
            if ($v->pid == 0) {
                $data[$k]['_name'] = $data[$k]['name'];
                $arr[] = $data[$k];
                foreach ($data as $m => $n) {
                    if ($n->pid == $v->id) {
                        $data[$m]['_name'] = '—— '.$data[$m]['name'];
                        $arr[] = $data[$m];
                    }
                }
            }
        }
        return $arr;
    }
}
