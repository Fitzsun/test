<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';
    
    public function childCategory()
    {
        return $this->hasMany('App\Category','parent_id','id');
    }

    public function allChildrenCategories()
    {
        return $this->childCategory()->with('allChildrenCategories');
    }
}
