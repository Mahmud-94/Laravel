<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@foreach ($posts as $post)

    <h1>{{$post->id}}: {{$post->name}}</h1>

    <a href="{{route('show', $post->id)}}">Details</a>

@endforeach
    
</body>
</html>