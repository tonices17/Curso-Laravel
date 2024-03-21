@extends('layout.landing')

@section('title','Notes - Edit')

@section('content')
<a href="{{ route('notes.index') }}"><button>Atrás</button></a>
<form action="{{ route('notes.update', $note->id) }}" method="POST"
    style="display: flex;flex-direction:column;text-align:center;margin:10px 400px;">
    @method('PUT')
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $note->title }}">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{ $note->description }}">
    <label for="author">Author</label>
    <input type="text" name="author" id="author" value="{{ $note->author }}">
    <label for="deadline">Deadline</label>
    <input type="date" name="deadline" id="deadline" value="{{ $note->deadline }}">
    <label for="done">Done</label>
    <input type="radio" name="done" id="done_true" value="1" {{ $note->done == 1 ? 'checked' : '' }}>True
    <input type="radio" name="done" id="done_false" value="0" {{ $note->done == 0 ? 'checked' : '' }}>False
    <input type="submit" value="Enviar">
</form>
@endsection