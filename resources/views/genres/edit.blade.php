@extends('layouts.app')

@section('edit')
    <div class="container text-center">
        <h4 class="mt-3">Modifica un Genre</h4>
        <form class="my-3" action="{{ route('genres.update', $genre) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method('PUT')

            <div class="mb-3 d-flex justify-content-center align-items-center">
                <label for="title" class="form-label me-2 mt-2 fw-bold">Nome</label>
                <input type="text" class="form-control form-input-space" name="name" value="{{ $genre['name'] }}"
                    id="title" aria-describedby="title">
            </div>

            {{-- @foreach ($technologies as $technology)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $technology['id'] }}" id="checkDefault"
                        name="technologies[]" {{ $genre->technologies->contains($technology['id']) ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkDefault">{{ $technology['name'] }}</label>
                </div>
            @endforeach --}}

            <div class="my-2">
                <a class="btn btn-outline-primary" href={{ route('genres.index') }} role="button">Genres</a>
                <button type="submit" class="btn btn-outline-info">Modifica</button>
            </div>
        </form>
    </div>
@endsection
