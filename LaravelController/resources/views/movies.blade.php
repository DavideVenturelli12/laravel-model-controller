<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>

<body>
    <div class="container">
        @forelse ($movies as $movie)
            <div>
                <p>{{ $movie->title }}</p>
                <p>{{ $movie->original_title }}</p>
                <p>{{ $movie->nationality }}</p>
                <p>{{ $movie->date }}</p>
                <p>{{ $movie->vote }}</p>
            </div>
        @empty
            Nessun risultato
        @endforelse
    </div>
</body>



</html>
