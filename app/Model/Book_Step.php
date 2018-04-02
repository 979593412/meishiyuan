<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book_Step extends Model
{
    //关联表
    public $table='book_step';

//    关联id
    public $primaryKey='id';

    protected $guarded = [];

    //关联菜谱
    public function Cook_book()
    {
        return $this->belongsTo('App\Model\Cook_book', 'bid', 'id');
    }
}
