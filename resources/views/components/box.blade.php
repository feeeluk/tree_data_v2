@props([
    'title' => null,
    'name' => null,
    'date' => null,
])


<div class="box">
    <p>
        Title: {{ $title }}
    </p>

    <p>
        Name: {{ $name }}
    </p>

    <p>
        Date:{{ $date}}
    </p>

</div>