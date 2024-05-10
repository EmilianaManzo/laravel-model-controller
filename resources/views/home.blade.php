@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">

        @foreach ($movies as $movie )


        <div class="col">
            <div class="card my-3 " style="width: 18rem;">
                    <div class="card-body">
                    <h3 class="card-title">{{$movie->title}}</h3>
                    <h5 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h5>
                    <p class="card-text">Plot: Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur culpa aperiam voluptates maxime corrupti qui ullam in, reiciendis quam velit laborum quia earum rem aliquid, minima inventore cum. Aut, aperiam?</p>
                    <p class="card-text"><strong>Nazionalità:</strong> {{$movie->nationality}}<p>
                    <p class="card-text"><strong>Data di uscita:</strong>  {{$movie->date}}<p>
                    <p class="card-text"><strong>Vote:</strong> {{$movie->vote}}<p>
                    <a href="#" class="card-link"></a>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
