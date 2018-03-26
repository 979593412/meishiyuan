<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class admin_user extends Model
{
    //1.模型默认的关联表
    public $table='admin_user';
    //2.模型默认的主键
    public $primaryKey='id';
    //3.是否自动维护 created_at 和 updated_at 这两个字段
//    public $timestamps=false;

//4.允许批量修改的字段
    public $fillable=['username','password'];
//    不允许批量修改的字段
//    public $guarded=;
}
