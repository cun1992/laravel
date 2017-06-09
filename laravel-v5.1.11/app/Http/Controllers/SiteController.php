<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
//use yii\rest\Controller;

class SiteController extends Controller
{

    public  function  index()
    {
        return view('site.index');
    }

    public  function  site_add()
    {
//        echo 111;die;
        $data['name']=input::get('name');
        $data['sex']=input::get('sex');
        $data['hobby']=implode(input::get('hobby'),',');
        $data['age']=input::get('age');
//        $date = Request::only('name','age');
//        print_r($date);die;
        $res =  DB::table('acd')->insert($data);
        if($res)
        {
            return redirect('site_show');
        }
    }


    public  function  site_show()
    {
        $res =  DB::select("select * from acd");
//        print_r($res);
        return view('site.show',['res'=>$res]);
    }

    public  function  site_del()
    {
        $id=input::get('id');
        //print_r($id);die;
        $res =  DB::delete("delete from acd where id='$id'");
        if($res)
        {
            return redirect('site_show');
        }
    }

    public  function  site_up()
    {
//        echo 111;die;
        $id=input::get('id');
//        print_r($id);die;
        $res =  DB::select("select * from acd where id='$id'");
       // print_r($res);die;
        return view('site.update',['res'=>$res]);
    }


    public  function  site_update()
    {
        $id=input::get('id');
        $name=input::get('name');
        $age=input::get('age');
        $sex=input::get('sex');
        $res =  DB::update("update acd set  name='$name', sex='$sex',age='$age' where id='$id' ");
        if($res)
        {
            return redirect('site_show');
        }
    }
}