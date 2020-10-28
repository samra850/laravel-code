@extends('layouts.app')

@section('content')
    

<div class="pull-right my-4">
    <a href="/posts" class="btn btn-warning">Back</a>
</div>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="" method="">
            @csrf
            <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                    @error('title')
                      <p class="text-danger">{{$message}}</p>  
                    @enderror
            </div>

            <div class="form-group">
                <label for="">Body</label>
                <textarea type="text" name="body" class="form-control" rows="5">{{$post->body}}</textarea>
                @error('body')
                  <p class="text-danger">{{$message}}</p>  
                @enderror
        </div>

        <div class="text-center">
                <input type="submit" value="Update Post" class="btn btn-primary">
        </div>

        </form>
    </div>
<div class="col-md-4"></div>
</div>
@endsection