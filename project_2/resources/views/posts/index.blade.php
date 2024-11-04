@extends ('layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Post list</h1>


        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif

        
      <a href="{{route('posts.create')}}" class="btn btn-success float-right">New Post</a>


    <table class="table table-stripped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Detail</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)

        <tr>
            <td>{{$i++}}</td>
            <td>{{$post->name}}</td>
            <td><img src="/Images/{{$post->image}}" alt="" width="100"></td>
            <td>{{$post->detail}}</td>
            <td>
            <a href="{{route('posts.show', $post->id)}}" class="btn btn-secondary">show</a>
            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>

            <form action="{{route('posts.destroy', $post->id)}}" method="post">

            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            
            </form>
                

        </td>
        </tr>
        @endforeach
    </table>

      
    </div>
</div>


@endsection