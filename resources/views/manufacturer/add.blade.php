@extends('app')

@section('title', 'добавить производителя')

@section('content')

    <form method="post" action="{{route('post-manufacturer')}}">
        <h3>Добавление производителя</h3>
        <div class="mb-3">
            <label for="company" class="form-label">Название компании</label>
            <input type="text" class="form-control" id="company" name="companyName" placeholder="компания">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Ссылка на сайт</label>
            <input type="text" class="form-control" id="url" name="url" placeholder="url">
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

@endsection
