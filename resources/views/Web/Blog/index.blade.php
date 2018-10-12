@extends('Web.layout')

@section('title', 'Home')


@section('container')
    <h1>博客首页</h1>
    <h2><a href="{{ url('/blog/work') }}">早九晚五</a></h2>
    <h2><a href="{{ url('/blog/tourism') }}">浪迹天涯</a></h2>
    <h2><a href="{{ url('/blog/food') }}">吃吃喝喝</a></h2>
    <h2><a href="{{ url('/blog/photo') }}">点点滴滴</a></h2>
    <h2><a href="{{ url('/blog/about') }}">模范夫妻</a></h2>
@endsection
