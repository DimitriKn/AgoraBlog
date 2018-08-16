<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Agora</title>

    <!-- Bootstrap-CSS -->
      <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="/css/blog.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.css">
      <style>
          .blog-masthead {
              margin-bottom: 3rem;
              background-color: #343a40;
              -webkit-box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
              box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
          }
          .blog-post-title {
              margin-bottom: .25rem;
              font-size: 1.5rem;
          }
          .blog-title {
              font-size: 2.5rem;
          }
      </style>
  </head>

  <body>
   
   @include ('layouts.nav')
   
   <div class="blog-header">
      <div class="container">
        <h2 class="blog-title"> <img src="/images/greek.jpg" height="80" width="80">&nbsp;Agora</h2>
      </div>

   </div>
   
   	@if ($flash = session('message'))
		<div class="alert alert-success"  role="alert"> {{$flash}}</div>
   	@endif
    
   <div class="container">

      <div class="row">
   
   @yield('content')
   
   @include('layouts.sidebar')
   
    </div>
  </div>
   
   @include ('layouts.footer')

	<script src="{{ mix('/js/app.js') }}"></script>
    


    
  </body>
</html>
