@extends('layouts.app')


@section('index')
    <div class="container my-4">
        <div class="container d-flex space-between justify-content-between my-4 px-0">
            <h2 class="fs-4 text-secondary my-0">
                {{ __('Eps') }}
            </h2>
            <a class="btn btn-outline-primary" href={{ route('eps.create') }} role="button">Aggiungi</a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($eps as $ep)
                <div class="col">
                    <div class="card h-100">
                        @if ($ep['image'])
                            <img src="{{ asset('storage/' . $ep['image']) }}" class="card-img-top" alt="...">
                        @endif

                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $ep['name'] }}</h5>
                            <p class="card-text">{{ $ep['published_year'] }}</p>
                            {{-- <p class="card-text">Tipo di progetto: {{ $ep->type->name }}</p> --}}
                        </div>
                        <div class="card-footer">
                            @php
                                $created_at = $ep['created_at'];
                                $updated_at = $ep['updated_at'];
                                // dd($date_time);
                                $italy_created_at = $created_at->addHours(2);
                                $italy_updated_at = $updated_at->addHours(2);
                                // dd($updated_at);
                            @endphp
                            <p class="card-text "><small>Creato:<em> {{ $italy_created_at }}</em></small> </p>
                            <p class="card-text "><small>Modificato:<em> {{ $italy_updated_at }}</em></small> </p>

                            <div class="my-2 text-center">
                                <a class="btn btn-outline-primary" href={{ route('eps.show', $ep) }} role="button">Vedi</a>
                                <a class="btn btn-outline-info" href={{ route('eps.edit', $ep) }}
                                    role="button">Modifica</a>
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach





        </div>
    </div>
@endsection
