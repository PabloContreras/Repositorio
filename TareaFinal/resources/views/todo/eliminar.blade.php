@extends('todo.create')

@section('deleteId',$item->id)

@section('deleteTitle',$item->title)

@section('deleteBody',$item->body)

@section('deleteMethod')
  {{method_field('DELETE')}}
@endsection