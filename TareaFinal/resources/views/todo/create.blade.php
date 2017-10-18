@extends('layout.app')

@section('body')
	<br>
	<a href="/todo" class="btn btn-info">Regresar</a>
	<div class="col-lg-4 col-lg-offset-4">
		<center><h1>{{substr(Route::currentRouteName(),5)}} Item</h1></center>
		<form class="form-horizontal" action="/todo/@yield('editId')" method="post">
		{{csrf_field()}}
    @section('editMethod')
        @show
  <fieldset> 
     <div class="form-group">
      <div class="col-lg-10">
        <input type="text" name="title" class="form-control" value="@yield('editTitle')" placeholder="title">
        <br>
      </div>
      <div class="col-lg-10">
        <textarea class="form-control" name="body" rows="5" id="textArea" placeholder="body">@yield('editBody')</textarea>  
        <br>
        <button type="submit" class="btn btn-success">Listo!</button>      
      
    </div>
  </fieldset>
</form>
@include('todo.parciales.errores')
	</div>
	

@endsection 
