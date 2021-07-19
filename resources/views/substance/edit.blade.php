@extends('app')

@section('title', 'главная')

@section('content')

    <form method="post" action="{{route('update-substance', $substance)}}">
        <h3>Изменение действующего вещества</h3>
        <div class="mb-3">
            <label for="product" class="form-label">Название действующего вещества</label>
            <input type="text" class="form-control" id="product" name="productName" value="{{$substance->productName}}">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
        <input type="hidden" name="_method" value="PUT">
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>

@endsection
