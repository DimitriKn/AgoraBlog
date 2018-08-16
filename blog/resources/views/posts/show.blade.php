@extends ('layouts.master')


@section('content')


<div class="col-sm-8 blog-main">
    <h4>{{$post->title}}</h4> 
     
      {{$post->body}}
      <hr>
   <div class=" comments">
     <ul class="list-group">
     @foreach($post->comments  as $comment)
     <li class="list-group-item">
     <strong>
{{Auth::user()->name}} um {{$comment->created_at->format('H:i')}}:&nbsp;
     </strong>
     {{$comment->body}}
     </li>
      @endforeach
     </ul>
</div>

    <hr>
 <form action="/posts/{{$post->id}}/comments" method="post">
    {{csrf_field()}}
    <div class="form-group">
     <textarea name="body" rows="" cols="" placeholder="Dein Kommentar." class="form-control" ></textarea>
   </div>
   <div class="form-group">
   <button type="submit" class="btn btn-outline-secondary">Posten</button>
  </div>
 </form>
@include('layouts.errors')

</div>

@endsection    
