<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    
    <header>
        {{-- <div class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('cars.create') }}">Inserisci auto</a></li>
                <li><a href="{{ route('cars.index') }}">Guarda Auto</a></li>
                <li>Ricerca auto</li>
            </ul>
        </div> --}}

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Concessionario</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('cars.index') }}">Lista auto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('cars.create') }}">Inserisci auto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="">Ricerca auto</a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </nav>
    </header>

</body>
</html>