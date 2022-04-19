@extends('layouts.main')

@section('content')

<div class="container ">
    <div class="d-flex justify-content-center flex-column">
        <div class="text-center h1 my-3">Történetek</div>
        @foreach($books as $book)
            <div class="card col-md-5" style="width: wrap;">
                <div class="card-body ">
                    <div class="d-flex flex-row ">
                        <div class="d-flex flex-column">
                            <img src="images\covers\{{$book->cover}}" alt="{{$book->title}}" height="250px" class="mt-0 mx-auto">
                            <div class="h3 mx-auto mt-2">
                                {{$book->title}}
                            </div>
                            <div class="h5 text-center">
                                {{$book->author->username}}
                            </div>
                        </div>
                        <div class="d-flex flex-column ms-3">
                            <div class="d-flex flex-row mt-3">
                                <div class="h5 mx-1">{{$book->genre->name}} -</div>
                                <div class="h5 mx-1">{{$book->subGenre->name}}</div>
                            </div>
                            <div class="m-2">
                                {{$book->description}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

@endsection
