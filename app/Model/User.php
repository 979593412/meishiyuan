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

//    关联菜谱
    public function cook_book()
    {
        return $this->hasMany('App\Model\Cook_book','uid','id');
    }

    //关联用户详情
    public function Details()
    {
        return $this->hasOne('App\Model\Details', 'uid', 'id');
    }

}
