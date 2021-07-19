@extends('app')

@section('title', 'список производителей')

@section('content')

    <h1>Производитель</h1>
    <a class="btn btn-warning" href="{{route('create-manufacturer')}}">добавить нового производителя</a>

    <table class="table">
        <tr>
            <th>id</th>
            <th>companyName</th>
            <th>url</th>
            <th colspan="2">действия</th>
        </tr>
        @foreach($manufacturers as $manufacturer)
            <tr>
                <th>{{$manufacturer->id}}</th>
                <th><a class="btn btn-info" href="{{$manufacturer->link()}}">{{$manufacturer->companyName}}</a></th>
                <th><a class="btn btn-outline-primary" href="{{$manufacturer->url}}" target="_blank">{{$manufacturer->url}}</a></th>
                <th><a class="btn btn-success" href="{{$manufacturer->edit()}}">изменить</a></th>
                <th>
                    <form method="post" action="{{ route('delete-substance', $manufacturer) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                        <input type="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </th>
            </tr>
        @endforeach
    </table>

@endsection
