<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Home_User extends Model
{
    //
    //1.模型默认的关联表
    public $table = 'home_user';

    //2.模型默认的主键
    public $primaryKey = 'id';

   

//    不允许批量修改的字段
   public $guarded = [];
}
