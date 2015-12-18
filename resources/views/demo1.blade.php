@extends('layouts.demo')

@section('title', 'Page Title')

@section('sidebar')
	@parent

	<p>This is appended to the master sidebar.</p>
@endsection


@section('header')
    @{{ This will not be processed by Blade }}

    {{-- 如果您不想数据被转义, 也可以使用如下语法：--}}
    {{--Hello, {!! $name !!}.--}}

    Hello, {{ $name or 'Default' }}.


    The current UNIX timestamp is {{ time() }}.

@stop

@section('content')
	<p>This is my body content.</p>
    {!! $htmlData !!}


    {{$htmlData}}
@stop
