<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
//    1. 模型关联的数据表
    public $table = 'cook_category';

//    2. 主键
    public $primaryKey = 'id';

//    3. 是否维护created_at updated_at字段
    public $timestamps = false;

//    4. 是否允许批量操作字段
    public $guarded = [];

    public function cook_book()
    {
        return $this->hasMany('App\Model\Recipe','cid','id');
    }
}
