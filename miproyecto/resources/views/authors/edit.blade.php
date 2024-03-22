@extends('layout.landing')

@section('title','Author - Edit')

@section('content')
<a href="{{ route('authors.index') }}"><button>Atrás</button></a>
<form action="{{ route('authors.update', $author->id) }}" method="POST"
    style="display: flex;flex-direction:column;text-align:center;margin:10px 400px;">
    @method('PUT')
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ $author->name }}">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{ $author->email }}">
    <input type="submit" value="Enviar">
</form>
@endsection