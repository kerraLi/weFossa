@extends('Web.layout')

@section('title', 'Home')


@section('container')
    <a href="{{ url('/login') }}">登陆</a>
    <a href="{{ url('/register') }}">注册</a>
    <a href="{{ url('/blog') }}">Blog</a>
@endsection
