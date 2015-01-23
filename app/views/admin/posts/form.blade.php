@extends ('admin.layouts.master')

@section ('content')

    {{Form::open(array('method'=>'post'))}}

        <div>
            <label>Title</label>
            {{Form::text('title', $post->title)}}
        </div>

        <div>
            <label>Slug</label>
            {{Form::text('slug', $post->slug)}}
        </div>

        <div>
            <label>Content</label>
            {{Form::textarea('html', $post->html)}}
        </div>

        <div>
            {{Form::submit('Save')}}
        </div>

    {{Form::close()}}

@stop
