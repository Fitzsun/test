<?php

namespace App\Http\Controllers;

use App\Links;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function links()
    {
        $result = Links::all();
        return response()->json($result,200);
    }
}
