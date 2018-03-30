<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //选择表
    protected $table = 'home_user';

    //选择不批量插入的字段
    protected $guarded = ['geetest_challenge', 'geetest_validate', 'geetest_seccode'];

    public function phone()
    {
        return $this->hasOne('App\Phone');
    }
}
