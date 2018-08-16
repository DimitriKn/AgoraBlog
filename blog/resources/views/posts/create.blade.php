@extends('layouts.master')


@section('content')
<div class="col-sm-8 blog-main">

  <h3> Poste irgentwas: </h3>
  <hr>
  <form method="POST" ACTION="/posts">
   {{ csrf_field() }}
  
  <div class="form-group">
    <label for="title">Titel:</label>
    <input type="text" class="form-control" id="title" name="title"  >
  </div>
  
  <div class="form-group">
    <label for="body">Nachricht:</label>
    <textarea  class="form-control" id="body" name="body" ></textarea>
  </div>
  
  <div class="form-group">
   <button type="submit" class="btn btn-outline-secondary">Senden</button>
  </div>
 @include ('layouts.errors')
</form>


</div>

@endsection
