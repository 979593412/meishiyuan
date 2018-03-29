<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //选择表
    public $table = 'home_user';

    public $primaryKey='id';

    //选择不批量插入的字段

    public $guarded = ['geetest_challenge', 'geetest_validate', 'geetest_seccode'];


//    关联菜谱表

    public function cook_book()
    {
        return $this->hasMany('App\Model\Cook_book','user_id','id');
    }


    public function Details()
    {
        return $this->hasOne('App\Model\Details', 'uid', 'id');
    }

}
