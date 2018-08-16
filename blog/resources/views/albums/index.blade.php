@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <a class="btn btn-success" href="/albums/create/">Neues Album</a>

    @if(count($albums) > 0)
    <?php
      $colcount = count($albums);
  	  $i = 1;
    ?>

    <div id="albums">
        <br>
      <div class="row text-center">
        @foreach($albums as $album)
          @if($i == $colcount)
             <div class='medium-4 columns end'>
               <a href="/albums/{{$album->id}}">
                  <img class="thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                </a>
               <br>
               <h4>{{$album->name}}</h4>
          @else
            <div class='medium-4 columns'>
              <a href="/albums/{{$album->id}}">
                <img class="thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
              </a>
              <br>
              <h4>{{$album->name}}</h4>
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
        <br>
    <p>Kein Album vorhanden</p>
  @endif
    </div>
@endsection
