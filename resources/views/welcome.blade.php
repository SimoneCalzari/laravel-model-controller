@extends('layouts.app')
@section('title')
    {{ 'Laravel Movies' }}
@endsection
@section('main')
    <!-- MAIN -->
    <main>
        <div class="container py-5">
            <div class="row gy-4">
                @foreach ($movies as $movie)
                    <div class="col-4">
                        <!-- CARD -->
                        <div class="card">
                            <ul class="list-group">
                                <div class="img-box">
                                    <img src="{{ Vite::asset('resources/img/' . $imgs[$loop->index]) }}"
                                        alt="{{ $movie['title'] }}">
                                </div>

                                <li class="list-group-item text-bg-primary">
                                    <h5 class="mb-0">Title</h5>
                                    <p class="mb-1">{{ $movie['title'] }}</p>
                                </li>
                                <li class="list-group-item text-bg-primary">
                                    <h5 class="mb-0">Origina Title</h5>
                                    <p class="mb-1">{{ $movie['original_title'] }}</p>
                                </li>
                                <li class="list-group-item text-bg-primary">
                                    <h5 class="mb-0">Nationality</h5>
                                    <p class="mb-1">{{ $movie['nationality'] }}</p>
                                </li>
                                <li class="list-group-item text-bg-primary">
                                    <h5 class="mb-0">Date</h5>
                                    <p class="mb-1">{{ $movie['date'] }}</p>
                                </li>
                                <li class="list-group-item text-bg-primary">
                                    <h5 class="mb-0">Vote</h5>
                                    <p class="mb-1">{{ $movie['vote'] }}</p>
                                </li>
                            </ul>
                        </div>
                        <!-- /CARD -->
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <!-- /MAIN -->
@endsection
