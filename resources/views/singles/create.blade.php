@extends('layouts.app')

@section('create')
    <div class="container text-center">
        <h4 class="mt-3">Aggiungi un Single</h4>
        <form class="my-3" action="{{ route('singles.store') }}" method="POST" enctype="multipart/form-data">
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
            <select name="genre_id" class="form-select " aria-label="Default select example">
                <option value="">Scegli un genere</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre['id'] }}">{{ $genre['name'] }}</option>
                @endforeach
            </select>
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
                <a class="btn btn-outline-primary" href={{ route('singles.index') }} role="button">Singles</a>
                <button type="submit" class="btn btn-outline-success">Inserisci</button>
            </div>

        </form>
    </div>
@endsection
