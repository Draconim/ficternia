@extends('layouts.main')
@section('content')

<div class="container ">
    <div class="d-flex justify-content-center flex-column">
        <div class="text-center h1 my-3">Történeteim</div>
        @foreach($books as $book)
            <div class="card border-0" style="width: 18rem;">
                <div class="card-body ">
                    <div class="d-flex flex-column justify-content-center">
                        <img src="images\covers\{{$book->cover}}" alt="{{$book->title}}" height="250px" class="mt-0 mx-auto">
                        <div class="h3 mx-auto mt-2">
                            {{$book->title}}
                        </div>
                        <div class="h5">
                            {{dd($book)}}
                            {{$book->username}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

@endsection