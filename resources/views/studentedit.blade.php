<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="text-align:center; padding-top:100px">
        <form method="post" action="{{ route('student.update', $student->id) }}">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$student->name}}"><br><br>

            <label for="email">Email</label>
            <input type="email" name="email" value="{{$student->email}}"><br><br>

            <label for="phone">Phone</label>
            <input type="number" name="phone" value="{{$student->phone}}"><br><br>

            <input type="submit">

        </form>
    </div>
</body>
</html>