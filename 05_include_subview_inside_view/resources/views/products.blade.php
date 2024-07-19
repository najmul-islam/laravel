<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $website_name }} Product page</h1>
    <hr>

    {{-- @include('mobile', ['total_mobile' => 4]) --}}
    {{-- @includeIf('mobile') --}}

    {{-- @includeWhen($user_type, 'mobile', ['total_mobile' => 4]); --}}
    {{-- @includeUnless($user_type, 'mobile', ['total_mobile' => 4]) --}}

    {{-- @foreach ($students as $stu)
        @include('students')
    @endforeach --}}

    {{-- @each('students', $students, 'stu', 'nostudent') --}}
    {{-- @once
        <h4>This code run once</h4>
    @endonce --}}
</body>

</html>
