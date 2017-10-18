@extends('layout.app')

@section('body')
	<br>
	<div class="col-lg-offset-4">
		<h1>{{$item->title}}</h1>
		<span>{{$item->body}}</span>
		<br> <br>
		<a href="/todo" class="btn btn-info">Regresar</a>
	</div>
@endsection