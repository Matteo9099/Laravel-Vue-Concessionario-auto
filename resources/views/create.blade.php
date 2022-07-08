@extends('layouts.base')


@section('content')

    <div class="container">

        <form action="{{ route('cars.store') }}" method="POST">
            @csrf

            <div>
                <label class="form-label" for="marca">Marca</label>
                <input class="form-control" type="text" name="marca" id="marca">
            </div>

            <div>
                <label class="form-label" for="modello">Modello</label>
                <input class="form-control" type="text" name="modello" id="modello">
            </div>

            <div>
                <label class="form-label" for="targa">Targa</label>
                <input class="form-control" type="text" name="targa" id="targa">
            </div>

            <div>

                <label class="form-label" for="nome_proprietario">Nome Proprietario</label>
                <input class="form-control" type="text" name="nome_proprietario" id="nome_proprietario">
            </div>

            <div>
                <label class="form-label" for="cognome_proprietario">Cognome Proprietario</label>
                <input class="form-control" type="text" name="cognome_proprietario" id="cognome_proprietario">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Invia</button>
            
        </form>

    </div>

@endsection


