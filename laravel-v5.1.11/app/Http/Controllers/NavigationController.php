<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
class NavigationController extends Controller
{
    public function index(){
        $list = DB::select('select * from navigation');
        //print_r($list);die;

        return view('navigation.main',['list'=>$list]);
    }
    public function Add(){
        //print_r($list);die;
        return view('navigation.add');
    }
    public function Add_pro(){
        //print_r($list);die;
        $title = input::get('title');
        $url = input::get('url');
        for($i=0;$i<count($title);$i++){
            $data[$i]['title'] = $title[$i];
            $data[$i]['url'] = $url[$i];
        }
        DB::table('navigation')->insert($data);
//        for($i=0;$i<$title;$i++){
//            DB::insert("insert into navigation VALUES (NULL ,'".$title[$i]."','".$url[$i]."')");
//        }
    }
}
