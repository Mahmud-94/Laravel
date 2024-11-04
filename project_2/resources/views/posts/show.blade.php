@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3>Post details</h3>

        <h5>ID: {{$post->id}}</h5>
        <h2>Name: {{$post->name}}</h2>
        <p>Details: {{$post->detail}}</p>
        <img src="/images/{{ $post->image }}" width="300px">
    </div>
</div>

@endsection