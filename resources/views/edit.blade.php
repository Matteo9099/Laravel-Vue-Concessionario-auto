@extends('layouts.base')


@section('content')

    <div class="container">

        <form action="{{ route('cars.update', $car->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label class="form-label" for="marca">Marca</label>
                <input class="form-control" type="text" name="marca" id="marca" value="{{ $car->marca }}">
            </div>

            <div>
                <label class="form-label" for="modello">Modello</label>
                <input class="form-control" type="text" name="modello" id="modello" value="{{ $car->modello }}">
            </div>

            <div>
                <label class="form-label" for="targa">Targa</label>
                <input class="form-control" type="text" name="targa" id="targa" value="{{ $car->targa }}">
            </div>

            <div>

                <label class="form-label" for="nome_proprietario">Nome Proprietario</label>
                <input class="form-control" type="text" name="nome_proprietario" id="nome_proprietario" value="{{ $car->nome_proprietario }}">
            </div>

            <div>
                <label class="form-label" for="cognome_proprietario">Cognome Proprietario</label>
                <input class="form-control" type="text" name="cognome_proprietario" id="cognome_proprietario" value="{{ $car->cognome_proprietario }}">
            </div>

            <button type="submit" class="btn btn-success mt-3">Salva</button>
            
        </form>

    </div>

@endsection


