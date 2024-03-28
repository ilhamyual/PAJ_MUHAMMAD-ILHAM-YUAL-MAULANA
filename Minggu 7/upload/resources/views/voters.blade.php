<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voter</title>
</head>
<body>
    <table border="1">
        @foreach ($voter as $vote)
        <tr>
            {{--@foreach ($voter as $vote)--}}
            <td>{{$vote->name}}</td><td>{{$vote->email}}</td><td>{{$vote->address}}</td>
            {{--@endforeach--}}
        </tr>
        @endforeach
    </table>
</body>