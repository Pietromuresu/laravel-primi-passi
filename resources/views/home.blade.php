<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Laravel Primi Passi</title>
</head>
<body>
    @include('partials.header')


    <h1 style="text-align: center;">Hello {{ $name }} {{ $surname }}</h1>
</body>
</html>
