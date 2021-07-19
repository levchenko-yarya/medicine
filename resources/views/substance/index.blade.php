@extends('app')

@section('title', 'главная')

@section('content')

    <h1>Действующее вещество</h1>
    <a class="btn btn-warning" href="{{route('create-substance')}}">добавить новое действующее вещество</a>

    <table class="table">
        <tr>
            <th>id</th>
            <th>productName</th>
            <th colspan="2">действия</th>
        </tr>
        @foreach($substances as $substance)
            <tr>
                <th>{{$substance->id}}</th>
                <th><a class="btn btn-info" href="{{$substance->link()}}">{{$substance->productName}}</a></th>
                <th><a class="btn btn-success" href="{{$substance->edit()}}">изменить</a></th>
                <th>
                    <form method="post" action="{{ route('delete-substance', $substance) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                        <input type="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </th>
            </tr>
        @endforeach
    </table>

@endsection
