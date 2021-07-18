{{--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>вещество</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="wrapper">
<a href="/">назад</a>

<h3>описание компании</h3>

<p>id = {{$manufacturer->id}}</p>
<p>название: {{$manufacturer->companyName}}</p>
<p>url = {{$manufacturer->url}}</p>

</body>
</html>--}}


@extends('app')

@section('title', 'главная')

@section('content')

    <h3>описание компании</h3>
    <p>id = {{$manufacturer->id}}</p>
    <p>название: {{$manufacturer->companyName}}</p>
    <p>url = {{$manufacturer->url}}</p>

@endsection
