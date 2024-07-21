<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration form</title>

    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Registration page</h1>
    <hr>

    <form action="" method="post">
        @csrf
        Name: <input type="text" name="name" id="name"><br>
        @error('name')
            <span class="error">
                {{ $message }}
            </span><br>
        @enderror

        Email: <input type="email" name="email" id="email"><br>
        @error('email')
            <span class="error">
                {{ $message }}
            </span><br>
        @enderror

        Password: <input type="password" name="password" id="password"><br>
        @error('password')
            <span class="error">
                {{ $message }}
            </span><br>
        @enderror
        <input type="submit" value="Submit">
    </form>

    {{-- @if (isset($data))
        @foreach ($data as $item)
            <p>{{ $item }}</p>
        @endforeach
    @endif --}}


</body>

</html>
