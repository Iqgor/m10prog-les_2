<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensenController extends Controller
{
    public function index (){
        return view('mensen');
    }
}
