@extends('layouts.app')
@section('content')
<div class="grid-container">
    <h3>UPLOAD PHOTOS</h3>
    {!!Form::open(['action' => 'PhotosController@store', 'method' => 'post', 'enctype' => 'multipart/form-data'])!!}
    {{Form::text('title','',['placeholder' => 'Album title'])}}
    {{Form::textarea('description','',['placeholder' => 'Album Description'])}}
    {{Form::hidden('album_id', $album_id)}}
    {{Form::file('photo')}}
    {{Form::submit('submit')}}
    {!!Form::close()!!}
</div>
@endsection