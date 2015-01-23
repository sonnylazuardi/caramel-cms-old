@extends ('admin.layouts.master')

@section ('content')

    <a href="{{url('admin/posts/create')}}">Create Post</a>

    @foreach ($posts as $post)
    
        <h1>{{$post->title}}</h1>

        <p>{{$post->html}}</p>

        <div class="actions">
            <a href="{{url('admin/posts/update/'.$post->id)}}">Edit</a>
            <a href="{{url('admin/posts/delete/'.$post->id)}}">Delete</a>
        </div>

    @endforeach

@stop