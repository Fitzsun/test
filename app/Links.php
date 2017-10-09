<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    // 指定表名
    protected $table = 'links';

    // 指定主键
    protected $primarykey = 'id' ;
}
