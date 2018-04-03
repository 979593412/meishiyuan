<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

    class collect extends Model
    {
        //    1. 模型关联的数据表
        public $table = 'collection';
    //    2. 主键
        public $primaryKey = 'id';
    //    4. 是否允许批量操作字段
        public $guarded = [];
    }
