@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Posts</h1>
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title ,['class' => 'form-control','placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body',$post->body,['class' => 'form-control','placeholder' => 'Body'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
            {{Form::hidden('_method','PUT')}}
        {!! Form::close() !!}
    </div>
@endsection