<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
class IndexController extends Controller
{

    public  function  index(){
        return view('index.index');
    }


}