<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin_User extends Model
{
    //1.模型默认的关联表
    public $table = 'admin_user';

    //2.模型默认的主键
    public $primaryKey = 'id';

    //3.是否自动维护created_at updated_at这两个字段
    public $timestamps = true;

//    //4.允许批量修改字段
    public $fillable = ['username','password','auth','status'];

//    不允许批量修改的字段
//    public $guarded = [];


}
