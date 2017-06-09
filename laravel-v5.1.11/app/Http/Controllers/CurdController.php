<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Input;
//use yii\rest\Controller;

class CurdController extends Controller
{

    public  function index(){
       return view("curd.add");
    }

    public  function  add(){
        $data['name']=input::get('name');
        $data['sex']=input::get('sex');
        $data['hobby']=implode(input::get('hobby'),',');
        $data['age']=input::get('age');
        $res= DB::table('acd')->insert($data);
        if($res){
            return  redirect('select');
        }
    }


    public  function  select(){
      $res =  DB::select('select * from acd');
      return  view("curd.find",['res'=>$res]);
    }

    public  function del(){
        $id= input::get('id');
        $res = DB::delete("delete  from acd where id='$id'");
//        print_r($id);
        return  redirect('select');
    }

    public  function  up(){
        $id= input::get('id');
        $res =  DB::select("select * from acd where id='$id'");
//         print_r($res);
        return  view("curd.update",['res'=>$res]);
    }

    public  function  update(){
        $name=input::get('name');
//        print_r($name);die;
        $age=input::get('age');
        $id=input::get('id');
//        print_r($data);
        $res =  DB::update("update acd  set name='$name' ,  age='$age' where id= '$id'");
        if($res){
            return  redirect('select');
        }


    }






}