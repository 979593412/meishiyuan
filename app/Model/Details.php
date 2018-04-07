<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    //

    public $table = 'home_user_details';
    public $primaryKey = 'id';
    public $guarded = [];




    public function User()
    {
        return $this->belongsTo('App\Model\User', 'uid', 'id');
    }
}
