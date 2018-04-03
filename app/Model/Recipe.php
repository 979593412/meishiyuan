<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //选择表
    protected $table = 'cook_book';

    //选择不批量插入的字段
    protected $guarded = [];

    //关联用户
    public function User()
    {
        return $this->belongsTo('App\Model\User', 'uid', 'id');
    }

    //关联食材
    public function Book_Food()
    {
        return $this->hasMany('App\Model\Book_Food','bid','id');
    }

    //关联步骤
    public function Book_Step()
    {
        return $this->hasMany('App\Model\Book_Step','bid','id');
    }

}
