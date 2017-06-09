@extends('welcome')
@section('content')
    <form action="update" method="post">
        <table>
            <tr>
                <td>名字</td>
                <td><input type="text" name="name" value="{{$res[0]->name}}"/></td>
            </tr>
                <input type="text" name="id" value="{{$res[0]->id}}">
            <tr>

                <td>年龄</td>
                <td><input type="text" name="age" value="{{$res[0]->age}}"/></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </td>
                <td><input type="submit" value="提交"/></td>
            </tr>
        </table>
    </form>
@stop;