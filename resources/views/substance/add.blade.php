<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Substance</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="wrapper">
<a href="/">назад</a>

<form method="post" action="{{route('post-substance')}}">
    <h3>Добавление действующего вещества</h3>
    <input type="text" name="productName" placeholder="вещество">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
    <input type="submit" value="добавить">
</form>

</body>
</html>
