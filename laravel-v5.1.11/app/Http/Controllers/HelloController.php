<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
class HelloController extends Controller
{
    public function index(){
        $list = DB::select('select * from goods');
        //print_r($list);die;
        return view('user.profile',['list'=>$list]);
    }
    public function Add(){
        //print_r($list);die;
        return view('user.add');
    }
    public function Add_pro(){
        //print_r($list);die;
        $goods = input::get('goods');
    }
}