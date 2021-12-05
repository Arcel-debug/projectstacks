<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="icon" type="image/jpg" href="{{ asset('/ikigai_logo.jpg') }}"> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    @yield('content')
</body>
</html>