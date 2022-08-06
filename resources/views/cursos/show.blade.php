@extends('layouts.plantilla')

@section('title','curso '. $curso->name)

@section('content')
<h1>Bienvenido al curso de {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">volver a cursos</a>
<a href="{{route('cursos.edit',$curso)}}">editar curso</a>
<p><strong>Categoria:</strong> {{$curso->category}}</p>
<p><strong>Descripcion:</strong> {{$curso->description}}</p>
@endsection
