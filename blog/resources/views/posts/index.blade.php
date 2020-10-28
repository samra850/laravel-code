@extends('layouts.app')

@section('content')

<div class="pull-right my-4">
    <a href="/posts/create" class="btn btn-warning">Add Post</a>
</div>

    <div class="jumbotron text-center">
        <h1>
            Posts Page
        </h1>
    </div>

    <table class="table">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>body</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        @if ( count($posts) > 0 )

            @foreach ($posts as $post)
                
                <tr>
                    <td> {{$post->id}} </td>
                    <td> {{$post->title}} </td>
                    <td> {{$post->body}} </td>
                    <td>  <a href="posts/{{$post->id}}/edit" class="btn btn-warning"> Edit </a> </td>
                    <td>  <a href="#" class="btn btn-danger"> Delete</a> </td>
                </tr>

            @endforeach   
                
        @else

            <tr>
                <td>-</td>
                <td>No data found</td>
                <td>- </td>
                <td>- </td>
                <td>- </td>
            </tr>
            
        @endif

    </table>


@endsection