@extends('app')

@section('title', 'главная')

@section('content')

    <h1>Лекарства</h1>
    <a class="btn btn-warning" href="{{route('create-agent')}}">добавить новое действующее вещество</a>

    <table class="table">
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
                <th><a class="btn btn-info" href="{{$agent->link()}}">{{$agent->productName}}</a></th>
                <th>{{$agent->active_substance_id}}</th>
                <th>{{$agent->manufacturer_id}}</th>
                <th>{{$agent->price}}</th>
                <th><a class="btn btn-success" href="{{$agent->edit()}}">изменить</a></th>
                <th>
                    <form method="post" action="{{ route('delete-agent', $agent) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                        <input type="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </th>
            </tr>
        @endforeach
    </table>

@endsection
