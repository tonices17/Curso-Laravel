@extends('layout.landing')

@section('title','Notes')

@section('content')
<h1>Notes</h1>
@if(session('message'))
<p style="color: green">{{ session('message') }}</p>
@endif
<a href="{{ route('notes.create') }}"><button>Crear una nueva nota</button></a>

@if (!$notes->isEmpty())
<table>
    <thead>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Autor</th>
        <th>Fecha Limite</th>
        <th>Terminado</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($notes as $note)
        <tr>
            <td>{{ $note->id }}</td>
            <td>{{ $note->title }}</td>
            <td>{{ $note->description }}</td>
            <td>{{ $note->author }}</td>
            <td>{{ $note->deadline }}</td>
            <td>{{ $note->done }}</td>
            <td>
                <a href="{{ route('notes.edit', $note->id) }}"><button>Editar</button></a>
                <form action="{{ route('notes.delete', $note->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No hay notas en la lista</p>
@endif

@endsection