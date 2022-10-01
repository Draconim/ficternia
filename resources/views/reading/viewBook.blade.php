@extends('layouts.main')
@section('content')
<div class="container-fluid px-5 my-4">
    <div class="d-flex flex-row justify-content-center align-items-start">
        <div class="card d-flex flex-column col-4 justify-content-center me-4 ps-4 pt-4">
            <div class="d-flex flex-row">
                <div class="d-flex">
                    <img src="..\..\images\covers\{{$book[0]->cover}}" alt="{{$book[0]->title}}" height="400px" class="mt-0 mx-auto rounded-3">  
                </div>
                <div class="d-flex flex-column ps-5">
                    <div class="text-center h1 text-break">{{$book[0]->title}}</div>
                    <div class="d-flex mb-2 h5 text-center">{{$book[0]->genre->name}} - {{$book[0]->subGenre->name}}</div>
                    <div class="d-flex flex-row">
                        <div class="">
                            <div class="my-2">Korhatár:</div>
                            <div class="my-2">Létrehozás ideje:</div>
                            <div class="my-2">Frissítve:</div>
                        </div>
                        <div class="ms-3">
                            <div class="my-2"><span class="h6 fst-6">{{$book[0]->age_limit}}</span></div>
                            <div class="my-2">{{date('Y-m-d',strtotime($book[0]->created_at))}}</div>
                            <div class="my-2">{{date('Y-m-d',strtotime($book[0]->last_updated))}}</div>
                        </div>
                    </div>
                    <div class="my2"></div>
                </div>
            </div>
            <div class="d-flex my-2 flex-column">
                <div class="">
                    <div class="d-flex h3 mt-2">Leírás</div>
                </div>
                <div class="my-3">
                    <div class="ms-2 me-5">{{$book[0]->description}}</div>
                </div>
                
            </div>
            <div class="d-flex my-2"></div>
        </div>
        <div class="d-flex col-8">
            <div class="row w-100">
                @foreach($chapters as $chapter)
                <div class="d-flex mx-auto">
                    <div class="card w-100 rounded-0">
                        <a href="{{ url('/'.$chapter->book_id.'/'.$chapter->id)}}" class="text-reset text-decoration-none">
                            <div class="card-body d-flex">
                                <div class="d-flex flex-column w-100">
                                    <div class="d-flex justify-content-between mb-2 h5 align-items-baseline">
                                        <div>
                                            {{$chapter->title}}
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column ms-3">
                                        <div class="d-flex flex-row mt-2 justify-content-between">
                                            <div class="col d-flex flex-row">
                                                    <div class="me-2">Létrehozás ideje:</div>
                                                    <div>{{$chapter->created_at}}</div>
                                            </div>
                                            <div class="col d-flex flex-row">
                                                @if($chapter->published=='published')
                                                    <div class="me-2">Publikálás ideje:</div>
                                                    <div>{{$chapter->published_at}}</div>
                                                @endif
                                            </div>
                                            <div class="col d-flex flex-row">
                                                <div class="me-2">Olvasta:</div>
                                                <div>{{$chapter->views}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection