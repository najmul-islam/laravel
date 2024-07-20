<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <h1>Home page</h1>
    <hr>
    <ul>
        <li><a href={{ route('home') }}>Home</a></li>
        <li><a href={{ route('about') }}>About</a></li>
        <li><a href={{ route('contact') }}>Contact</a></li>
        <li><a href={{ route('post', ['category' => 'mobile']) }}>Post</a></li>
    </ul>
</body>

</html>
