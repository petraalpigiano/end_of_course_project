@extends('layouts.app')

@section('edit')
    <div class="container text-center">
        <form class="my-3" action="{{ route('albums.update', $album) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="title" class="form-label me-2 mt-2 fw-bold">Nome</label>
                <input type="text" class="form-control form-input-space" name="name" value="{{ $album['name'] }}"
                    id="title" aria-describedby="title">

            </div>
            <div>
                <label for="inputYear" class="form-label">Anno</label>
                <input type="text" class="form-control" id="inputYear" value="{{ $album['published_year'] }}">
            </div>
            <div>
                <label for="inputYear" class="form-label">Canzoni</label>
                <input type="text" class="form-control" id="inputYear" value="{{ $album['n_songs'] }}">
            </div>
            <select name="genre_id" class="form-select " aria-label="Default select example">
                <option value="">Scegli un genere</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre['id'] }}" {{ $album['genre_id'] == $genre['id'] ? 'selected' : '' }}>
                        {{ $genre['name'] }}</option>
                @endforeach
            </select>
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
