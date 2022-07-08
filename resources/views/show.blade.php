@extends('layouts.base')

@section('content')

    <div class="container">
        
       

        <p><strong>ID auto</strong> - {{ $car->id}}</p>
        <p><strong>Marca</strong>  - {{ $car->marca}}</p>
        <p><strong>Modello</strong>  - {{ $car->modello}}</p>
        <p><strong>Targa</strong>  - {{ $car->targa}}</p>
        <p><strong>Nome Proprietario</strong> - {{ $car->nome_proprietario}}</p>
        <p><strong>Cognome Proprietario</strong> - {{ $car->cognome_proprietario}}</p>
        <hr>
        
   

    </div>

@endsection