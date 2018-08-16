@extends('layouts.master')

@section('content')
 <div class="col-sm-8 blog-main">
  <h3>Erstelle Album</h3>
  {!!Form::open(['action' => 'AlbumsController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    {{Form::text('name','',['placeholder' => 'Album Name'])}}
    {{Form::textarea('description','',['placeholder' => 'Album Beschreibung'])}}
    {{Form::file('cover_image')}}
    {{Form::submit('Erstellen',['class' => 'btn btn-outline-secondary'])}}
  {!! Form::close() !!}
 </div>
@endsection
