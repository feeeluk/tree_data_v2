@extends('layouts.user')

@section('page-content')

    <h1>Example of what an admin user might see when they are logged in:</h1>

    <div class="box_container">

        <x-box>
            Example of a business
        </x-box>

        <x-box
            title="Test"
            name="Phil"
            date="Today"
        >
        </x-box>

    </div>

@endsection
