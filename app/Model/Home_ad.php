<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Home_ad extends Model
{
    //广告位模型
    public $table = 'home_ad';
    public $primaryKey = 'id';

    public $fillable = ['url','pic'];
//    public $guarded = [];

//    public $timestamps = false;
}
