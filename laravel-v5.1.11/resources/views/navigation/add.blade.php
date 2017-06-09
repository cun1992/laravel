@extends('app')
@section('content')
    <form action="navigation_add_pro" method="post">
        <p><input type="text" placeholder="标签" name="title[]"/> 指定页面 <input type="text" name="url[]" placeholder="请填写URL"/></p>
        <p><input type="text" placeholder="标签" name="title[]"/> 指定页面 <input type="text" name="url[]" placeholder="请填写URL"/></p>
        <p><input type="text" placeholder="标签" name="title[]"/> 指定页面 <input type="text" name="url[]" placeholder="请填写URL"/></p>
        <p><input type="text" placeholder="标签" name="title[]"/> 指定页面 <input type="text" name="url[]" placeholder="请填写URL"/></p>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="submit" value="提交"/>
    </form>
@stop
