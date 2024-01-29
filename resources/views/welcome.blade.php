@extends('layouts.app')

{{-- @dd($movies); --}}
@section('main')
    <main>
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie['title'] . ' ' . $movie['date'] . ' ' . $movie['vote'] }}</li>
            @endforeach
        </ul>
    </main>
@endsection
