@extends('app')

@section('title', 'лекарство')

@section('content')

    <div class="card">
        <h5 class="card-header">Описание лекарства</h5>
        <div class="card-body">
            <h5 class="card-title">Название: {{$agent->productName}}</h5>
            <p class="card-text">id = {{$agent->id}}</p>
            <p class="card-text">Активное вещество: {{$agent->active_substance->productName}}</p>
            <p class="card-text">Производитель: {{$agent->manufacturer->companyName}}</p>
            <p class="card-text">Цена = {{$agent->price}}</p>
        </div>
    </div>

@endsection
