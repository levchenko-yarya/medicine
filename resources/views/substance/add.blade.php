@extends('app')

@section('title', 'добавить вещество')

@section('content')

    <form method="post" action="{{route('post-substance')}}">
        <h3>Добавление действующего вещества</h3>
        <div class="mb-3">
            <label for="product" class="form-label">Название действующего вещества</label>
            <input type="text" class="form-control" id="product" name="productName" placeholder="вещество">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

@endsection
