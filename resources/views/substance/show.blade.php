@extends('app')

@section('title', 'главная')

@section('content')

    <div class="card">
        <h5 class="card-header">Описание вещества</h5>
        <div class="card-body">
            <h5 class="card-title">Название: {{$substance->productName}}</h5>
            <p class="card-text">id = {{$substance->id}}</p>
        </div>
    </div>

@endsection
