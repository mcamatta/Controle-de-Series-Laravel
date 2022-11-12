<x-layout title="Séries">

    <a href="{{ route('series.create') }}" class="btn btn-dark mb-3">Adicionar</a>
    
    @isset($mensagemSucesso)
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{$mensagemSucesso}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}
                <div class="d-flex gap-1">
                    <a class="btn btn-warning btn-sm" href="{{ route('series.edit', $serie->id) }}">E</a>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
