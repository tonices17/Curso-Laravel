@extends('layout.landing')

@section('title','Products')

@section('content')
<h1>Products</h1>

@if (!$products->isEmpty())
<table style="text-align: center; border: 1px solid black">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion Corta</th>
        <th>Descripcion</th>
        <th>Precio</th>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->short_description }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }} $</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No hay productos en la lista</p>
@endif

@endsection