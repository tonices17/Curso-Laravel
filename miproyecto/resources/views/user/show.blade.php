@extends('layout.landing')

@section('title','Users')

@section('content')
<h1>Usuario {{ $user->id }}
</h1>

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
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->zip_code }}</td>
        </tr>
    </tbody>
</table>

@endsection