@extends('app')

@section('title', 'изменить производителя')

@section('content')

    <form method="post" action="{{route('update-manufacturer', $manufacturer)}}">
        <h3>Изменение производителя</h3>
        <div class="mb-3">
            <label for="company" class="form-label">Название компании</label>
            <input type="text" class="form-control" name="companyName" id="company" value="{{$manufacturer->companyName}}">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Ссылка на сайт</label>
            <input type="text" class="form-control" name="url" id="url" value="{{$manufacturer->url}}">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
        <input type="hidden" name="_method" value="PUT">
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>

@endsection
