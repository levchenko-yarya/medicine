<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Substance</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="wrapper">
<a href="/">на главную</a>
<h1>Действующее вещество</h1>
<a href="{{route('create-substance')}}">добавить новое действующее вещество</a>

<table border="1">
    <tr>
        <th>id</th>
        <th>productName</th>
        <th colspan="2">действия</th>
    </tr>
    @foreach($substances as $substance)
        <tr>
            <th>{{$substance->id}}</th>
            <th><a href="{{$substance->link()}}">{{$substance->productName}}</a></th>
            <th><a href="{{$substance->edit()}}">изменить</a></th>
            <th>
                <form method="post" action="{{ route('delete-substance', $substance) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                    <input type="submit" value="Удалить">
                </form>
            </th>
        </tr>
    @endforeach
</table>

</body>
</html>
