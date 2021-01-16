@extends('layout.app')

@section('content')
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <tr style="border: 1px solid rgb(3, 3, 3);">
                <td style="border: 1px solid rgb(3, 3, 3);">{{$post->title}} :</td>
                <td style="border: 1px solid rgb(3, 3, 3);">{{$post->body}}</td>
            </tr>
        @endforeach
    @endif
@endsection

@section('title')
    Vlog Post
@endsection