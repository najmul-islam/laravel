<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration form</title>
</head>

<body>
    <h1>Registration page</h1>
    <hr>

    <form action="" method="post">
        @csrf
        Name: <input type="text" name="name" id="name"><br><br>
        Email: <input type="email" name="email" id="email"><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
