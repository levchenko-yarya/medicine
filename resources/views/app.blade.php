<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="wrapper">

<div>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/active-substances">действующее вещество</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/manufacturers">производитель</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/pharmacological-agents">лекарственное средство</a>
        </li>
    </ul>
</div>

<div class="container" style="border: 1px solid red">
    @yield('content')
</div>

</body>
</html>
