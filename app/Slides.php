<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    protected $table='slides';
    // public function setImgUrlAttribute($imgUrl)
    // {
    //     if (is_array($imgUrl)) {
    //         $this->attributes['imgUrl'] = json_encode($imgUrl);
    //     }
    // }
    
    // public function getImgUrlAttribute($imgUrl)
    // {
    //     return json_decode($imgUrl, true);
    // }
}
