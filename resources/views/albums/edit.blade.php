@extends('layouts.app')

@section('edit')
    <div class="container text-center">
        <h4 class="mt-3">Modifica un Album</h4>
        <form class="my-3" action="{{ route('albums.update', $album) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method('PUT')

            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="title" class="form-label me-2 mt-2 fw-bold">Nome</label>
                <input type="text" class="form-control form-input-space" name="name" value="{{ $album['name'] }}"
                    id="title" aria-describedby="title" required>

            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="inputYear" class="form-label me-2 mt-2 fw-bold">Anno</label>
                <input type="number" class="form-control" id="inputYear" name="published_year"
                    value="{{ $album['published_year'] }}" min="1901" max="2155" required>
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="inputYear" class="form-label me-2 mt-2 fw-bold">Canzoni</label>
                <input type="number" class="form-control" id="inputYear" name="n_songs" value="{{ $album['n_songs'] }}"
                    min="3" max="30" required>
            </div>
            <select name="genre_id" class="form-select " aria-label="Default select example">
                <option value="">Scegli un genere</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre['id'] }}" {{ $album['genre_id'] == $genre['id'] ? 'selected' : '' }}>
                        {{ $genre['name'] }}</option>
                @endforeach
            </select>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="formFile" class="form-label me-2 mt-2 fw-bold">Aggiungi copertina</label>
                <input class="form-control" type="file" accept="image/*" id="formFile" name="image">
                @if ($album['image'])
                    <img class="img-thumbnail img-custom" src="{{ asset('storage/' . $album['image']) }}"
                        class="card-img-top" alt="...">
                @endif
            </div>
            {{-- @foreach ($technologies as $technology)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $technology['id'] }}" id="checkDefault"
                        name="technologies[]" {{ $album->technologies->contains($technology['id']) ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkDefault">{{ $technology['name'] }}</label>
                </div>
            @endforeach --}}
            <div class="my-2">
                <a class="btn btn-outline-primary" href={{ route('albums.index') }} role="button">Albums</a>
                <button type="submit" class="btn btn-outline-info">Modifica</button>
            </div>
        </form>
    </div>
@endsection
