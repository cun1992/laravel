@extends('app')
@section('content')
    @foreach($list as $k=>$v)
        <ul>{{ $v->goods }}</ul>
    @endforeach
    <a href="/laravel-v5.1.11/server.php/add">添加</a>
@stop
{{--@section('js')--}}
    {{--<script>--}}
        {{--alert('a');--}}
    {{--</script>--}}
{{--@stop--}}