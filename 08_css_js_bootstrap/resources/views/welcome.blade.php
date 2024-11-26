<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    {{-- use asset() --}}
    {{-- <link rel="stylesheet" href={{ asset('css/style.css') }}> --}}
    {{-- <link rel="stylesheet" href="{{ url('css/style.css') }}"> --}}
    @vite('resources/css/app.css')
    @vite('resources/css/style.css')
    <title>Document</title>
</head>

<body>
    <h1 class="text-4xl">Home page</h1>

    <img src="img/image-2.jpg" alt="">
    <img src="{{ asset('img/image-1.jpg') }}" alt="">

    {{-- <script src="js/script.js"></script> --}}
    {{-- <script src={{ asset('js/script.js') }}></script> --}}
    @vite('resources/js/script.js')
</body>

</html>
