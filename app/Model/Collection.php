<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //关联表
    public $table='collection';
//    关联主键
    public $primaryKey='id';

    //是否自动维护created_at和updated_at这两个字段
//    public $timestamps=false;

//    允许批量修改的字段
//    public $fillable=[''];


//      不允许批量修改的字段
//       public $guarded=[''];
}

