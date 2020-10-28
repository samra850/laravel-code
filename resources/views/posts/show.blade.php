@extends('layouts.app')

@section('content')

<div class="pull-right my-4">
    <a href="/posts/create" class="btn btn-warning">Add Post</a>
</div>

    <div class="jumbotron text-center">
        <h1>
            Show Page
        </h1>
    </div>

    <table class="table">
        <tr>
         <th>Column Name</th>
         <th>Values</th>
        </tr>

        <tr>
         <th>Id</th>
         <th>{{$post->id}}</th>
        </tr>

        <tr>
            <th>Title</th>
            <th>{{$post->title}}</th>
        </tr>

        <tr>
            <th>Body</th>
            <th>{{$post->body}}</th>
        </tr>

        <tr>
            <th>Created At</th>
            <th>{{$post->created_at}}</th>
        </tr>

        <tr>
            <th>Updated At</th>
            <th>{{$post->updated_at}}</th>
        </tr>
    </table>

@endsection