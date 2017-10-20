<?php

namespace App\Http\Controllers;
use DB;

use App\Slides;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function index ()
    {
        $slides1 = Slides::where('level','=',1)->orderBy('order','desc')->take(3)->get();
        return response()->json('fuck');
    }
}
