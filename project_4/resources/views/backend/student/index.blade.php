@extends('backend.app')

@section('content')

<h1>Post list</h1>

<a href="{{route('students.create')}}" class="btn btn-success float-right">New Post</a>

    <table class="table table-striped">       
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($sts as $st)
        
        
          
            <tr>
                <td>{{$st->id}}</td>
                <td>{{$st->name}}</td>
                <td>{{$st->email}}</td>
                <td>{{$st->phone}}</td>
                <td>{{$st->address}}</td>
                <td>Edit | Delete</td>
            </tr>
            @endforeach
        </tbody>

    </table>


@endsection