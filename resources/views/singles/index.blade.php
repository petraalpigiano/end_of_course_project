@extends('layouts.app')


@section('index')
    <div class="container my-4">
        <div class="container d-flex space-between justify-content-between my-4 px-0">
            <h2 class="fs-4 text-secondary my-0">
                {{ __('Singles') }}
            </h2>
            <a class="btn btn-outline-primary" href={{ route('singles.create') }} role="button">Aggiungi</a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($singles as $single)
                <div class="col">
                    <div class="card h-100">
                        @if ($single['image'])
                            <img src="{{ asset('storage/' . $single['image']) }}" class="card-img-top" alt="...">
                        @endif

                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $single['name'] }}</h5>
                            <p class="card-text">{{ $single['published_year'] }}</p>
                            {{-- <p class="card-text">Tipo di progetto: {{ $single->type->name }}</p> --}}
                        </div>
                        <div class="card-footer">
                            @php
                                $created_at = $single['created_at'];
                                $updated_at = $single['updated_at'];
                                // dd($date_time);
                                $italy_created_at = $created_at->addHours(2);
                                $italy_updated_at = $updated_at->addHours(2);
                                // dd($updated_at);
                            @endphp
                            <p class="card-text "><small>Creato:<em> {{ $italy_created_at }}</em></small> </p>
                            <p class="card-text "><small>Modificato:<em> {{ $italy_updated_at }}</em></small> </p>

                            <div class="my-2 text-center">
                                <a class="btn btn-outline-primary" href={{ route('singles.show', $single) }}
                                    role="button">Vedi</a>
                                <a class="btn btn-outline-info" href={{ route('singles.edit', $single) }}
                                    role="button">Modifica</a>
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach





        </div>
    </div>
@endsection
