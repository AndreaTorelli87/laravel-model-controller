<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>

<body class="bg-success">
    <main>
        <div class="container text-center">  
            <h1 class="mt-5 display-2 fw-bold text-danger ">The Best Movies</h1>
            <div class="row mt-5 justify-content-center">
                @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card my-2">
                        <div class="card-body">
                            <h4 class="card-title text-decoration-underline fw-bold">{{$movie->title}}</h4>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{$movie->original_title}}</h6>
                            <p class="card-text">Movie ID: {{$movie->id}} - Vote: {{$movie->vote}}</p>
                            <p class="card-text">Nationality: {{$movie->nationality}} </p>
                            <p class="card-text">Release date: {{$movie->date}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
