@extends('layout.app')

@section('content')
    <div>    
        <form method="POST">
            @csrf
            @foreach($posts as $post)
                Title: <input type="text" name="txtTitleEdit" value="{{$post->title}}"><br/>
                Body: <input type="text" name="txtBodyEdit" value="{{$post->body}}"><br/>
                <button class="btn btn-primary pull-center" name="btnButton" value="Submit">Submit</button> 
            @endforeach
        </form>
    </div>
@endsection

@section('title')
    Edit Vlog
@endsection