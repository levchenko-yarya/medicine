@extends('app')

@section('title', 'изменить лекарство')

@section('content')

    <form method="post" action="{{route('update-agent', $agent)}}">
        <h3>Изменение лекарства</h3>
        <div class="mb-3">
            <label for="product" class="form-label">Название лекарства</label>
            <input type="text" class="form-control" id="product" aria-describedby="emailHelp"
                   value="{{$agent->productName}}">
        </div>
        <div class="mb-3">
            <label for="substance" class="form-label">Активные вещества</label>
            <select class="form-select" id="substance" name="active_substance_id">
                @foreach($substances as $substance)
                    <option value="{{$substance->id}}">{{$substance->productName}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">Производитель</label>
            <select class="form-select" id="manufacturer" name="manufacturer_id">
                @foreach($manufacturers as $manufacturer)
                    <option value="{{$manufacturer->id}}">{{$manufacturer->companyName}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Цена лекарства</label>
            <input type="number" class="form-control" id="price]" name="price" value="{{$agent->price}}">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
        <input type="hidden" name="_method" value="PUT">
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>

@endsection
