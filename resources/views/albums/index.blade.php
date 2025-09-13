@extends('layouts.app')


@section('index')
    <div class="container my-4">
        <div class="container d-flex space-between justify-content-between my-4 px-0">
            <h2 class="fs-4 text-secondary my-0">
                {{ __('Albums') }}
            </h2>
            <a class="btn btn-outline-primary" href={{ route('albums.create') }} role="button">Aggiungi</a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($albums as $album)
                <div class="col">
                    <div class="card h-100">
                        @if ($album['image'])
                            <img src="{{ asset('storage/' . $album['image']) }}" class="card-img-top" alt="...">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $album['name'] }}</h5>
                            <p class="card-text">{{ $album['published_year'] }}</p>
                            {{-- <p class="card-text">Tipo di progetto: {{ $album->type->name }}</p> --}}
                        </div>
                        <div class="card-footer">
                            @php
                                $created_at = $album['created_at'];
                                $updated_at = $album['updated_at'];
                                // dd($date_time);
                                $italy_created_at = $created_at->addHours(2);
                                $italy_updated_at = $updated_at->addHours(2);
                                // dd($updated_at);
                            @endphp
                            <p class="card-text "><small>Creato:<em> {{ $italy_created_at }}</em></small> </p>
                            <p class="card-text "><small>Modificato:<em> {{ $italy_updated_at }}</em></small> </p>

                            <div class="my-2 text-center">
                                <a class="btn btn-outline-primary" href={{ route('albums.show', $album) }}
                                    role="button">Vedi</a>
                                <a class="btn btn-outline-info" href={{ route('albums.edit', $album) }}
                                    role="button">Modifica</a>
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach





        </div>
    </div>
@endsection
