{{--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>изменить</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="wrapper">
<a href="/">назад</a>

<form method="post" action="{{route('update-manufacturer', $manufacturer)}}">
    <h3>Изменение производителя</h3>
    <input type="text" name="companyName" value="{{$manufacturer->companyName}}">
    <input type="text" name="url" value="{{$manufacturer->url}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
    <input type="hidden" name="_method" value="PUT">
    <input type="submit" value="изменить">
</form>

</body>
</html>--}}


@extends('app')

@section('title', 'главная')

@section('content')

    <form method="post" action="{{route('update-manufacturer', $manufacturer)}}">
        <h3>Изменение производителя</h3>
        <input type="text" name="companyName" value="{{$manufacturer->companyName}}">
        <input type="text" name="url" value="{{$manufacturer->url}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" value="изменить">
    </form>

@endsection
