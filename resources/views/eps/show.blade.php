@extends('layouts.app')

@section('show')
    <div class="container text-center my-4">
        @if ($ep['image'])
            <img src="{{ asset('storage/' . $ep['image']) }}" class="card-img-top img-custom2" alt="...">
        @endif
        <h3>{{ $ep['name'] }}</h3>
        <p>{{ $ep['published_year'] }}</p>
        <p>Songs : {{ $ep['n_songs'] }}</p>
        @if (isset($ep->genre->name))
            <p>Genere: {{ $ep->genre->name }}</p>
        @endif

        {{-- @dd($ep->technologies()) --}}
        {{-- @dd($technologies) --}}
        {{-- @foreach ($ep->technologies as $technology)
            <span class="badge text-white"
                style="background-color: {{ $technology['color'] }}">{{ $technology['name'] }}</span>
        @endforeach --}}
        <div class="my-2">
            <a class="btn btn-outline-primary" href={{ route('eps.index') }} role="button">Eps</a>
            <a class="btn btn-outline-info" href={{ route('eps.edit', $ep) }} role="button">Modifica</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Cancella
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminazione dell'ep</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sei sicura di eliminare l'ep?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Chiudi</button>
                            <form class="d-inline" action="{{ route('eps.destroy', $ep) }}" method="POST">
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
