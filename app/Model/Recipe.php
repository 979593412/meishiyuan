<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //选择表
    protected $table = 'cook_book';

    //选择不批量插入的字段
    protected $guarded = [];
}
