<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    @yield('page-name')
    @yield('banner')
    @yield('main')

    @section('default-content')
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis harum, earum totam fuga at enim adipisci
            ratione repellendus est tempore!</p>
    @show


</body>

</html>
