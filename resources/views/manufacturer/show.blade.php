@extends('app')

@section('title', 'производитель')

@section('content')

    <div class="card">
        <h5 class="card-header">Описание компании</h5>
        <div class="card-body">
            <h5 class="card-title">Название: {{$manufacturer->companyName}}</h5>
            <p class="card-text">id = {{$manufacturer->id}}</p>
            <a href="{{$manufacturer->url}}" class="card-link">url = {{$manufacturer->url}}</a>
        </div>
    </div>

@endsection
