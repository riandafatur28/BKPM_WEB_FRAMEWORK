<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <div class="container">
        {{-- Dokumentasi terkait template inheritance https://laravel.com/docs/11.x/blade#layouts-using-template-inheritance --}}
        @yield('content')
    </div>
</body>

</html>
