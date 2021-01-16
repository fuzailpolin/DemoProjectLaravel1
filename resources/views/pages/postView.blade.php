@extends('layout.app')

@section('content')
    <div>    
        @if(count($posts)>0)
            <table style="border: 1px solid rgb(3, 3, 3);">
                @foreach($posts as $post)
                    <tr style="border: 1px solid rgb(3, 3, 3);">
                        <td style="border: 1px solid rgb(3, 3, 3);"> <a href="/post/{{$post->id}}">{{$post->title}} : </a></td>
                        <td style="border: 1px solid rgb(3, 3, 3);">{{$post->created_at}}</td>
                        <td style="border: 1px solid rgb(3, 3, 3);"><a href="{{ route('post.edit', $post->id) }}">Edit</a></td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection

@section('title')
    View Posts Table
@endsection
