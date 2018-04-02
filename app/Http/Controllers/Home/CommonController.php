<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{

    public function getTree($cates=[],$pid=0){
         $sub=[];
            foreach ($cates as $v) {
                if ($v->pid==$pid) {
                    $v->sub = $this->getTree($cates,$v->id);
                    $sub[]=$v;
                }
            }
            return $sub;
        }
}
