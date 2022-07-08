@extends('layouts.base')

@section('content')
    
    <div class="container pt-4 d-flex">

        @foreach ($cars as $car)

        <div class="card mx-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $car->marca }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $car->modello }}</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ route('cars.show', $car->id) }}" class="nav-link">Info</a>
                <a href="{{ route('cars.edit', $car->id) }}" class="nav-link">Modifica</a>
                <form method="POST" action="{{ route('cars.destroy', $car->id) }}" id="deleteArticle">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="nav-link text-danger">Elimina</button>
                </form>
            </div>
        </div>
        <hr>
            
        @endforeach

        

    </div>


    <script>
        const deleteArt = document.getElementById('deleteArticle');
        if(deleteArt){
            deleteArt.addEventListener('click',
                (e)=>{
                    if(!confirm('Vuoi davvero eliminare questo articolo?')){
                        e.preventDefault();
                    }
                }
            )
        }
    </script>

@endsection

