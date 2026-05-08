@extends('layouts.base')

@push('layout-css')
<link rel="stylesheet" href="/css/user.css">
@endpush

@section('title', 'User')

@section('layout-content')

    <x-nav />

    <main>
        @yield('page-content')
    </main>

    <x-footer />

@endsection
