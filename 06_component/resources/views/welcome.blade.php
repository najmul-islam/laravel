<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .myclass {
            color: red;
        }

        .dclass {
            color: blue;
        }
    </style>
</head>

<body>
    <x-include.header />
    <h1>Welcome to home page </h1>
    <hr>

    {{-- @php
        $desc = 'Card Description';
    @endphp --}}

    {{-- <x-card title="Card title 1" sub-title="Card subtitle 1" :description=$desc class="myclass" /> --}}
    {{-- <x-card title="Card title 2" sub-title="Card subtitle 2" :description=$desc /> --}}

    {{-- slot --}}
    <x-alert>
        <x-slot name="title">Alert Title</x-slot>
        <span>Hello i am alert</span>
        <span>Alert</span>
    </x-alert>
</body>

</html>
