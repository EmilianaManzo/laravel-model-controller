@extends('layout.main')

@section('title')
    {{Route::currentRouteName()}}
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>{{$title}}</h3>
        </div>
    </div>
    <div class="row row-cols-3 ">

        @foreach ($movies as $movie )


        <div class="col">
            <div class="card my-3 pb-5 ">
                    <div class="card-body">
                    <h3 class="card-title">{{$movie->title}}</h3>
                    <h5 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h5>
                    <p class="card-text">Plot: Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur culpa aperiam voluptates maxime corrupti qui ullam in, reiciendis quam velit laborum quia earum rem aliquid, minima inventore cum. Aut, aperiam?</p>
                    <p class="card-text"><strong>Nazionalità:</strong> {{$movie->nationality}}<p>
                    <p class="card-text"><strong>Data di uscita:</strong>  {{$movie->date}}<p>
                    <p class="card-text"><strong>Vote:</strong> {{$movie->vote}}<p>
                    <a href="#" class="card-link"></a>
                    </div>
                    <a href="{{route('dettaglio',['id' => $movie ->id])}}" class="btn btn-warning mx-5 " style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">More Info</a>
                </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
