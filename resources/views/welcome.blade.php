@extends('layouts.app')

@section('content')
<section class=" pt-5 pb-5 ">
    <div class="container">
        <div class="row  row-cols-6 ">
            @foreach ($movies as $movie)
                <div>
                    <img class="my-img" src="{{ $movie->image }}" class="card-img-top" alt="...">
                    <div class="card-body">

                    </div>
                    <h5 class="card-title">{{ $movie->title }}</h5>



                </div>
            @endforeach
        </div>
            <div class="text-center">
                <button class="btn btn-primary">LOAD MORE</button>
            </div>
                


    </div>




</section>
@endsection