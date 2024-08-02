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
    </style>
</head>

<body>
    <x-include.header />
    <h1>Welcome to home page </h1>
    <hr>

    {{-- with class --}}
    @php
        $desc = 'Card description 1';
    @endphp

    <x-card :description=$desc subtitle="Card subtitle 1" title="Card title 1" class="myclass" id="card" />

    <x-card :description=$desc subtitle="Card subtitle 2" title="Card title 2" class="myclass" id="card" />

    {{-- without class --}}
    <x-button text="Click me" />
    <x-button text="Click" />

    <hr>
    {{-- slot and named slot --}}
    <x-alert description="This is alert desc">
        <x-slot name='title'>Alert title</x-slot>
        <span>Hello i am alert</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, inventore?</p>
    </x-alert>

    {{-- slot without class --}}
    <x-list>
        <x-slot name="title">
            <h2 style="color: red;">Mobile list</h2>
        </x-slot>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, alias?</p>
    </x-list>
</body>

</html>
