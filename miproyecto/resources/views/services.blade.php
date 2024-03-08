@extends('layout.landing')

@section('title', 'Services')

@section('content')
<h1>Services</h1>
<section>
    @component('_components.card')
    @slot('title', 'Service 1')
    @slot('content', 'Lorem')
    @endcomponent
    @component('_components.card')
    @slot('title', 'Service 2')
    @slot('content', 'Lorem')
    @endcomponent
    @component('_components.card')
    @slot('title', 'Service 3')
    @slot('content', 'Lorem')
    @endcomponent
    @component('_components.card')
    @slot('title', 'Service 4')
    @slot('content', 'Lorem')
    @endcomponent
</section>
@endsection