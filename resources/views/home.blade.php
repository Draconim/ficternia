@extends('layouts.main')

@section('content')

<div class="container-fluid mb-5 px-5">
    <div class="text-center h1 my-3 col">Történetek</div>
    <div class="row row-cols-2 gx-4">
        @foreach($books as $book)
        <div class="col my-2">
            <div class="card">
                <div class="card-body ">
                    <a href="{{route('getBookChapters',$book->id)}}" class="text-reset text-decoration-none d-flex flex-row ">
                        <div class="d-flex flex-row ">
                            <div class="d-flex flex-column">
                                <img src="images\covers\{{$book->cover}}" alt="{{$book->title}}" height="300px" class="mt-0 mx-auto">
                                
                                <div class="h5 text-center">
                                    
                                </div>
                            </div>
                            <div class="d-flex flex-column ms-3">
                                <div class="d-flex flex-row ">
                                    <div class="h3 mx-1 mt-2">{{$book->title}} - {{$book->author->username}}</div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="h5 mx-1">{{$book->genre->name}} -</div>
                                    <div class="h5 mx-1">{{$book->subGenre->name}}</div>
                                </div>
                                <div class="m-2">
                                    {{substr($book->description,0,350)."..."}}
                                </div>
                                <div class="d-flex flex-row mt-auto justify-content-center">
                                    <div class="mx-1">Létrehozva: {{date('Y-m-d',strtotime($book->created_at))}} </div>
                                    <div class="mx-1">Frissítve: {{date('Y-m-d',strtotime($book->last_updated))}}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
