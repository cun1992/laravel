@extends('app')
@section('content')
    <form action="add_pro" method="post">
        <table>
            <tr>
                <td>商品名称</td>
                <td>
                    <input type="text" name="goods"/>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="添加商品"/></td>
            </tr>
        </table>
    </form>
@stop
