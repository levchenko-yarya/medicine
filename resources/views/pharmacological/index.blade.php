{{--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>agent</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="wrapper">
<a href="/">на главную</a>
<h1>Лекарства</h1>
<a href="{{route('create-agent')}}">добавить новое действующее вещество</a>

<table border="1">
    <tr>
        <th>id</th>
        <th>productName</th>
        <th>active_substance_id</th>
        <th>manufacturer_id</th>
        <th>price</th>
        <th colspan="2">действия</th>
    </tr>
    @foreach($agents as $agent)
        <tr>
            <th>{{$agent->id}}</th>
            <th><a href="{{$agent->link()}}">{{$agent->productName}}</a></th>
            <th>{{$agent->active_substance_id}}</th>
            <th>{{$agent->manufacturer_id}}</th>
            <th>{{$agent->price}}</th>
            <th><a href="{{$agent->edit()}}">изменить</a></th>
            <th>
                <form method="post" action="{{ route('delete-agent', $agent) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                    <input type="submit" value="Удалить">
                </form>
            </th>
        </tr>
    @endforeach
</table>

</body>
</html>--}}



@extends('app')

@section('title', 'главная')

@section('content')

    <h1>Лекарства</h1>
    <a href="{{route('create-agent')}}">добавить новое действующее вещество</a>

    <table border="1">
        <tr>
            <th>id</th>
            <th>productName</th>
            <th>active_substance_id</th>
            <th>manufacturer_id</th>
            <th>price</th>
            <th colspan="2">действия</th>
        </tr>
        @foreach($agents as $agent)
            <tr>
                <th>{{$agent->id}}</th>
                <th><a href="{{$agent->link()}}">{{$agent->productName}}</a></th>
                <th>{{$agent->active_substance_id}}</th>
                <th>{{$agent->manufacturer_id}}</th>
                <th>{{$agent->price}}</th>
                <th><a href="{{$agent->edit()}}">изменить</a></th>
                <th>
                    <form method="post" action="{{ route('delete-agent', $agent) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                        <input type="submit" value="Удалить">
                    </form>
                </th>
            </tr>
        @endforeach
    </table>

@endsection
