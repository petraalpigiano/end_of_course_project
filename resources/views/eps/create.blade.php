@extends('layouts.app')

@section('create')
    <div class="container text-center">
        <h4 class="mt-3">Aggiungi un Ep</h4>
        <form class="my-3" action="{{ route('eps.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="title" class="form-label me-2 mt-2 fw-bold">Nome</label>
                <input type="text" class="form-control form-input-space" name="name" id="title"
                    aria-describedby="title">

            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="inputYear" class="form-label me-2 mt-2 fw-bold">Anno</label>
                <input type="text" class="form-control" id="inputYear" name="published_year">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="inputYear" class="form-label me-2 mt-2 fw-bold">Canzoni</label>
                <input type="text" class="form-control" id="inputYear" name="n_songs">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="formFile" class="form-label me-2 mt-2 fw-bold">Aggiungi copertina</label>
                <input class="form-control" type="file" id="formFile" name="image">
            </div>
            {{-- @foreach ($technologies as $technology)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $technology['id'] }}" id="checkDefault"
                        name="technologies[]">
                    <label class="form-check-label" for="checkDefault">{{ $technology['name'] }}</label>
                </div>
            @endforeach --}}



            <div class="my-2">
                <a class="btn btn-outline-primary" href={{ route('eps.index') }} role="button">Eps</a>
                <button type="submit" class="btn btn-outline-success">Inserisci</button>
            </div>

        </form>
    </div>
@endsection
