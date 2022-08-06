@extends('layouts.plantilla')

@section('title','crear curso')

@section('content')
<h1>Bienvenido a la pagina donde podras crear cursos</h1>
<form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <label >
        Nombre:<br>
        <input type="text" name="name" id="" value="{{old('name')}}">
    </label>

    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

<br>


    <label >
        Descripcion:<br>
        <textarea name="description" id="" rows="5">{{old('description')}}</textarea>
    </label>

    @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>

    <label >
        Categoria:<br>
        <input type="text" name="category" id=""   value="{{old('category')}}">
    </label>

    @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>

    <button type="submit">Enviar</button>
</form>
@endsection
