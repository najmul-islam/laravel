<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Home page</h1>
    <hr>
    {{-- <x-include.header> </x-include.header>
    <x-card class="myclass" title="Card title 1" subTitle='Card subtitle 1' :description=$desc></x-card>
    <x-card title="Card title 2" subTitle='Card subtitle 2' :description=$desc></x-card> --}}

    <x-alert>
        <x-slot name="title">Alert Title</x-slot>
        <span>Hello i am alert</span>
    </x-alert>
</body>

</html>
