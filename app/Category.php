<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';
    
    public function childCategory()
    {
        // 这是字段之间的关系吧 (一对一关系:hasOne belongsTo) (一对多关系:hasMany belongsTo) (多对多关系:belongsToMany belongsToMany)
        return $this->hasMany('App\Category','parent_id','id');
    }

    public function allChildrenCategories()
    {
        return $this->childCategory()->with('allChildrenCategories');
    }
}
