@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
    <h1>{{$album->name}}</h1>
  <a class="btn btn-dark" href="/albums">Zurück</a>
  <a class="btn btn-outline-dark" href="/photos/create/{{$album->id}}">Photo einfügen</a>
  <hr>
  @if(count($album->photos) > 0)
    <?php
      $colcount = count($album->photos);
  	  $i = 1;
    ?>
    <div id="photos">
      <div class="row text-center">
        @foreach($album->photos as $photo)
          @if($i == $colcount)
            <div class='medium-4 columns end'>
             <a href="/photos/{{$photo->id}}">
                <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
              </a>
             <br>
             <h4>{{$photo->title}}</h4>
          @else
            <div class='medium-4 columns'>
              <a href="/photos/{{$photo->id}}">
                 <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
               </a>
              <br>
              <h4>{{$photo->title}}</h4>
          @endif
        	@if($i % 3 == 0)
          </div></div><div class="row text-center">
        	@else
            </div>
          @endif
        	<?php $i++; ?>
        @endforeach
      </div>
    </div>
  @else
    <p>No Photos To Display</p>
  @endif
        <a>
            {!!Form::open(['action' => ['AlbumsController@destroy', $album->id], 'method' => 'POST'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit(' Album löschen', ['class' => 'btn btn-outline-danger'])}}
            {!!Form::close()!!}
        </a>
    </div>

@endsection
