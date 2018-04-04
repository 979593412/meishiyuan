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

        public function Cook_book()
        {

            return $this->belongsTo('App\Model\Cook_book','bid','id');
        }

        public function book_food()
        {
            return $this->belongsTo('App\Model\Book_Food','bid','id');
        }

       // public function cook_book()
       // {
       //     return $this->hasOneodel\cook_book','bid','id');
       // }

    }
