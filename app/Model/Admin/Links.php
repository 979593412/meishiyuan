<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    //    1. 模型关联的数据表
    public $table = 'my_links';

//    2. 主键
    public $primaryKey = 'id';

//    3. 是否维护created_at updated_at字段
    public $timestamps = true;

//    4. 是否允许批量操作字段
    public $guarded = [];
}

