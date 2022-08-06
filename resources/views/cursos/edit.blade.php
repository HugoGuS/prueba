@extends('layouts.plantilla')

@section('title', 'editar curso')

@section('content')
    <h1>Bienvenido a la pagina donde podras editar cursos</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:<br>
            <input type="text" name="name" id="" value="{{ old('name',$curso->name) }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripcion:<br>
            <textarea name="description" id="" rows="5">{{ old('description',$curso->description) }} </textarea>
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria:<br>
            <input type="text" name="category" id="" value="{{ old('category',$curso->category) }}">
        </label>
        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
