<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3 gy-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">ID: {{ $movie->id }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">TITOLO ORIGINALE: {{ $movie->original_title }}
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">NAZIONALITA': {{ $movie->nationality }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">DATA: {{ $movie->date }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">VOTO: {{ $movie->vote }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
