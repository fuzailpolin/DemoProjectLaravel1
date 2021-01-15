@extends(layout.app)

@section('content')
    <div>    
        @if(count($posts)>0)
            <table>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection

@section('title')
    View Posts Table
@endsection
