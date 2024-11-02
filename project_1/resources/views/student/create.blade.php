<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student entry form</h3>

    <form action="{{route('student.store')}}" method="post">

        @csrf
        <input type="text" name="name" id=""><br>
        <input type="text" name="email" id=""><br>
        <input type="text" name="phone" id=""><br>
        <input type="submit" name="submit" value="Submit" id="">
    </form>
</body>
</html>