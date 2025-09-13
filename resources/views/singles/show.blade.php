@extends('layouts.app')

@section('show')
    <div class="container text-center my-4">
        @if ($single['image'])
            <img src="{{ asset('storage/' . $single['image']) }}" class="card-img-top img-custom2" alt="...">
        @endif
        <h3>{{ $single['name'] }}</h3>
        <p>{{ $single['published_year'] }}</p>
        @if (isset($single->genre->name))
            <p>Genere: {{ $single->genre->name }}</p>
        @endif

        {{-- @dd($single->technologies()) --}}
        {{-- @dd($technologies) --}}
        {{-- @foreach ($single->technologies as $technology)
            <span class="badge text-white"
                style="background-color: {{ $technology['color'] }}">{{ $technology['name'] }}</span>
        @endforeach --}}
        <div class="my-2">
            <a class="btn btn-outline-primary" href={{ route('singles.index') }} role="button">Singles</a>
            <a class="btn btn-outline-info" href={{ route('singles.edit', $single) }} role="button">Modifica</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Cancella
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminazione dell'single</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sei sicura di eliminare il single?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Chiudi</button>
                            <form class="d-inline" action="{{ route('singles.destroy', $single) }}" method="POST">
                                @csrf

                                @method('DELETE')
                                <input class="btn btn-outline-danger" type="submit" value="Cancella 😓">
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
