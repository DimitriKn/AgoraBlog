
@extends ('layouts.master')


@section('content')
<div class="col-sm-8">
<h1>Log In</h1>
<form action="/login" method="post">
 {{ csrf_field() }}

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="email" >
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" >
  </div>
  <div class="form-group">
   <button type="submit" class="btn btn-default">Login</button>
  </div>
 <div class="form-group">
 @include ('layouts.errors')
 </div>
</form>
</div>
@endsection