@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="container my-4 px-0">
            <h2 class="fs-4 text-secondary my-0">
                {{ __('Dashboard :)') }}
            </h2>
            <br>
            <h2>Qui andra tutta la roba per monitorare dati, performance, utenti ecc </h2>
            {{-- <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div> --}}

        </div>
    </div>
@endsection
