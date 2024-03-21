@extends('layout.landing')

@section('title','Notes - Create')

@section('content')
<a href="{{ route('notes.index') }}"><button>Atrás</button></a>
<form action="{{ route('notes.store') }}" method="POST"
    style="display: flex;flex-direction:column;text-align:center;margin:10px 400px;">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <label for="author">Author</label>
    <input type="text" name="author" id="author">
    <label for="deadline">Deadline</label>
    <input type="date" name="deadline" id="deadline">
    <label for="done">Done</label>
    <input type="radio" name="done" id="done_true" value="1">True
    <input type="radio" name="done" id="done_false" value="0">False
    <input type="submit" value="Enviar">
</form>
@endsection