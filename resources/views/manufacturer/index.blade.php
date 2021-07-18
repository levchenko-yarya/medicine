{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manufacturer</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="wrapper">
<a href="/">на главную</a>
<h1>Производитель</h1>
<a href="{{route('create-manufacturer')}}">добавить нового производителя</a>

<table border="1">
    <tr>
        <th>id</th>
        <th>companyName</th>
        <th>url</th>
        <th colspan="2">действия</th>
    </tr>
    @foreach($manufacturers as $manufacturer)
        <tr>
            <th>{{$manufacturer->id}}</th>
            <th><a href="{{$manufacturer->link()}}">{{$manufacturer->companyName}}</a></th>
            <th><a href="{{$manufacturer->url}}" target="_blank">{{$manufacturer->url}}</a></th>
            <th><a href="{{$manufacturer->edit()}}">изменить</a></th>
            <th>
                <form method="post" action="{{ route('delete-substance', $manufacturer) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                    <input type="submit" value="Удалить">
                </form>
            </th>
        </tr>
    @endforeach
</table>

</body>
</html>

--}}



@extends('app')

@section('title', 'главная')

@section('content')

    <h1>Производитель</h1>
    <a href="{{route('create-manufacturer')}}">добавить нового производителя</a>

    <table border="1">
        <tr>
            <th>id</th>
            <th>companyName</th>
            <th>url</th>
            <th colspan="2">действия</th>
        </tr>
        @foreach($manufacturers as $manufacturer)
            <tr>
                <th>{{$manufacturer->id}}</th>
                <th><a href="{{$manufacturer->link()}}">{{$manufacturer->companyName}}</a></th>
                <th><a href="{{$manufacturer->url}}" target="_blank">{{$manufacturer->url}}</a></th>
                <th><a href="{{$manufacturer->edit()}}">изменить</a></th>
                <th>
                    <form method="post" action="{{ route('delete-substance', $manufacturer) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                        <input type="submit" value="Удалить">
                    </form>
                </th>
            </tr>
        @endforeach
    </table>

@endsection
