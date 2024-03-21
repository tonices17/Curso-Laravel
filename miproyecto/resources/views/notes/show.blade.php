@extends('layout.landing')

@section('title','Note')

@section('content')
<h1>Nota {{ $note->id }}
</h1>

<table>
    <thead>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Autor</th>
        <th>Fecha límite</th>
        <th>Terminada</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ $note->id }}</td>
            <td>{{ $note->title }}</td>
            <td>{{ $note->description }}</td>
            <td>{{ $note->author }}</td>
            <td>{{ $note->deadline }}</td>
            <td>{{ $note->done }}</td>
        </tr>
    </tbody>
</table>

@endsection