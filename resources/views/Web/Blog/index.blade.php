@extends('Web.layout')

@section('title', 'Home')


@section('container')

    <div style="text-align: center">
    <table frame="hsides"
           cellpadding="10"
           border="0"
           style="width: 30%;
           margin:auto">
            <td><a href="{{ url('/blog/work') }}">早九晚五</a></td>
            <td><a href="{{ url('/blog/tourism') }}">浪迹天涯</a></td>
            <td><a href="{{ url('/blog/food') }}">吃吃喝喝</a></td>
            <td><a href="{{ url('/blog/photo') }}">点点滴滴</a></td>
            <td><a href="{{ url('/blog/about') }}">模范夫妻</a></td>
        </tr>
    </table></div>
@endsection
