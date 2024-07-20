<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    {{-- <link rel="stylesheet" href={{ asset('css/style.css') }}> --}}
    {{-- <link rel="stylesheet" href={{ url('css/style.css') }}> --}}
    <title>Document</title>

    {{-- <style>
        h1 {
            color: red;
        }
    </style> --}}
</head>

<body>
    <h1>Home page</h1>
    <hr>

    {{-- <img src="images/man.jpg" alt=""> --}}
    <img src={{ asset('images/man.jpg') }} alt="">
    <img src={{ url('images/man.jpg') }} alt="">
    {{-- <script>
        console.log("Hello world");
    </script> --}}

    <script src="js/script.js"></script>
    {{-- <script src={{ asset('js/script.js') }}></script> --}}
    {{-- <script src={{ url('js/script.js') }}></script> --}}
</body>

</html>
