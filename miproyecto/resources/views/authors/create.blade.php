@extends('layout.landing')

@section('title','Author - Create')

@section('content')
<a href="{{ route('authors.index') }}"><button>Atrás</button></a>
<form action="{{ route('authors.store') }}" method="POST"
    style="display: flex;flex-direction:column;text-align:center;margin:10px 400px;">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name">
    @error('name')
    <p style="color: red">{{ $message }}</p>
    @enderror
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    @error('email')
    <p style="color: red">{{ $message }}</p>
    @enderror
    <input type="submit" value="Enviar">
</form>
@endsection