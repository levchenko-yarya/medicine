<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="container" style="border: 1px solid blue">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/"><h1>medicine.com</h1></a>
        </li>
    </ul>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('index-substance')}}">действующее вещество</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('index-manufacturer')}}">производитель</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('index-agent')}}">лекарственное средство</a>
        </li>
    </ul>
</div>

<div class="container text-center" style="border: 1px solid red">
    @yield('content')
</div>

</body>
</html>
