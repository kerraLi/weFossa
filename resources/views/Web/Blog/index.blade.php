@extends('Web.layout')

@section('title', 'Home')


@section('container')

    <div style="text-align: center">
        <table frame="hsides"
               cellpadding="10"
               border="0"
               style="width: 30%;
           margin:auto">
            <tr>
                @foreach ($pages as $key=>$page)
                    <td><a href="{{ url('/blog/'.$key) }}">{{ $page['name'] }}</a></td>
                @endforeach
            </tr>
        </table>
    </div>
@endsection
