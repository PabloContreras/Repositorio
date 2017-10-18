@extends('layout.app')

@section('body')
	<br>
	@include('todo.parciales.message')
	
	<a href="todo/create" class="btn btn-info">Agregar</a>
	<div class="col-lg-8 col-lg-offset-2">
		<center><h1>Notas</h1></center>
		<ul class="list-group col-lg-8">
			@foreach ($todos as $todo)
				<li class="list-group-item">
    				<a href="{{'/todo/'.$todo->id}}">{{$todo->title}}</a>
    				<span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
    			</li>		
    		@endforeach  			
		</ul>
		<ul class="list-group col-lg-3">
			@foreach ($todos as $todo)
				<li class="list-group-item">
    			<a href="{{'/todo/'.$todo->id.'/edit'}}"><i class="fa fa-pencil-square-o" aria-hidden="true">Editar</i></a>
    			<form class="form-group pull-right" action="{{'/todo/'.$todo->id}}" method="post">
    				{{csrf_field()}}
    				{{method_field('DELETE')}}
    				<button type="submit" style="border:none"><i class="fa fa-trash-o" aria-hidden="true">Eliminar</i></button>
    			</form>	
    			</li>

    		@endforeach  
		</ul>
        
	</div>
@endsection  