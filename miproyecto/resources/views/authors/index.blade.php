@extends('layout.landing')

@section('title','Authors')

@section('content')
<h1>Authors</h1>
@if(session('message'))
<p style="color: green">{{ session('message') }}</p>
@endif
<a href="{{ route('authors.create') }}"><button>Añadir un nuevo autor</button></a>

@if (!$authors->isEmpty())
<table>
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->email }}</td>
            <td>
                <a href="{{ route('authors.edit', $author->id) }}"><button>Editar</button></a>
                <form action="{{ route('authors.delete', $author->id) }}" method="POST">
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
<p>No hay autores en la lista</p>
@endif

@endsection