<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    // 指定表名
    protected $table = 'links';

    // 指定主键
    protected $primarykey = 'id' ;
}
