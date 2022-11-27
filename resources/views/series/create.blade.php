<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input 
                    autofocus
                    type="text" 
                    class="form-control" 
                    id="nome" 
                    name="nome"
                    value="{{ old('nome') }}">
            </div>
            <div class="col-2">
                <label for="seasonsQty" class="form-label">Nº temporadas:</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="seasonsQty" 
                    name="seasonsQty"
                    value="{{ old('seasonsQty') }}">
            </div>
            <div class="col-2">
                <label for="episodesPerSeasons" class="form-label">Eps / Temporada:</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="episodesPerSeasons" 
                    name="episodesPerSeasons"
                    value="{{ old('episodesPerSeasons') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>