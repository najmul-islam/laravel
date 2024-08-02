<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student data</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>Student page</h1>
    <br>
    @foreach ($students as $stu)
        {{ $stu->id }} <br>
        {{ $stu->name }} <br>
        {{ $stu->email }} <br>
        {{ $stu->city }} <br><br>
    @endforeach

    {{-- for single data --}}
    {{-- <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
        </tr>
        <tr>
            <td> {{ $student->id }} </td>
            <td> {{ $student->name }} </td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->city }}</td>
        </tr>
    </table> --}}
</body>

</html>
