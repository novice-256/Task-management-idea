<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbortController extends Controller
{
    public function abort($code,$message)
    {
   
        return view('abort/show',compact('code','message'));
    }
}
