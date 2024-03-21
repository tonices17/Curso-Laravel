@extends('layout.landing')

@section('title','Users')

@section('content')
<h1>Users</h1>

@if (!$users->isEmpty())
<table>
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Age</th>
        <th>Address</th>
        <th>Zip Code</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->zip_code }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No hay usuarios en la lista</p>
@endif

@endsection