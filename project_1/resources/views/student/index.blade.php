<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

@if (session('msg'))
<div class="alert">{{session('msg')}}</div>

@endif
    <h1>Student List</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
   

   
    @foreach ($mystudent as $student)

    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->phone}}</td>
        <td>
            <a class="btn btn-success" href="{{route('student.edit',$student->id)}}">Edit</a>
            <form action="{{route('student.destroy',$student->id)}}" method="POST"> 
            <!-- @method('DELETE')  -->
            @csrf

            <input class="btn btn-danger" type="submit" name="delete" id="" value="Delete">
            </form>
        </td>
    </tr>


    <!-- <li>Name: {{$student->name}}</li>
      
    Email: {{$student->email}}
    <br>

    Phone: {{$student->phone}}
    <br><br> -->
    
    @endforeach
   
    </table>
</body>
</html>