@extends('layouts.base')

@push('layout-css')
<link rel="stylesheet" href="/css/homepage.css">
@endpush

@section('title', 'Homepage')

@section('layout-content')

    <x-nav-simple />

    <main>
        @yield('page-content')
    </main>

    <x-footer />

@endsection
