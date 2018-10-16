@extends('Web.layout')


@section('container')
    <form action="{{ url('/register') }}" method="post">
        @csrf
        username: <input type="text" name="username"><br>
        password: <input type="password" name="password"><br>
        <input type="submit" value="提交">
    </form>
@endsection
