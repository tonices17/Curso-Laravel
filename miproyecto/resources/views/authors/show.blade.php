@extends('layout.landing')

@section('title','Author')

@section('content')
<h1>Autor {{ $author->id }}
</h1>

<table>
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->email }}</td>
        </tr>
    </tbody>
</table>

@endsection