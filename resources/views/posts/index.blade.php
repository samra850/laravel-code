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
                    <td><a href="/posts/{{$post->id}}"> {{$post->title}} </a></td>
                    <td> {{$post->body}} </td>
                    <td>  <a href="posts/{{$post->id}}/edit" class="btn btn-warning"> Edits </a> </td>
                    <td>
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$post->id}}">
  delete
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Do you want to delete it? 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
          <form action="/posts/{{$post->id}}/delete" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" class="btn btn-danger" value="Delete">
          </form>
        </div>
      </div>
    </div>
  </div>
                    </td>
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