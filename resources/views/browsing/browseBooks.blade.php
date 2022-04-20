@extends('layouts.main')
@section('content')
<div class="container-fluid mb-5 d-flex flex-column">
    <div class="d-flex flex-column mb-2">
        <div class="text-center h1 mt-3 mb-1 col">Oraculum</div>
        <div class="text-center h3 mt-1 mb-3 col">{{__('Fedezd fel Fictiernia könyvtárát!')}}</div>
    </div>
    <div class="d-flex flex-row ">
        <div class="d-flex col-md-3 ms-3 mt-2 position-fixed start-0">
            <div class="card ">
                <div class="card-header">{{__('Szűrők')}}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('browse')}}" class="">
                        @csrf
                        <div class="d-flex flex-row align-items-baseline justify-content-center">
                            <input type="search" name="bookSearch" placeholder="Keresés" class="form-control w-75">
                            <button type="submit" class="btn btn-secondary ms-2 form-text">Keresés</button>
                        </div>
                        <div class="d-flex flex-column mt-2">
                            <div class="d-flex flex-column  my-2">
                                <div class="h6 ms-3">Keresés módja</div>
                                <div class="d-flex flex-row justify-content-evenly align-items-baseline">
                                    <div>
                                        <input type="radio" name="searchIn" id="title" value="title" class="me-2" checked="true"> <label for="title" class="me-2">Cím</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="searchIn" id="description" value="description" class="me-2"> <label for="description">Leírás</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="searchIn" id="author" value="author" class="me-2"> <label for="author">Író</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column  my-2">
                                <div class="h6 ms-3">Rendezés</div>
                                <div class="d-flex flex-column ">
                                    <div class="d-flex flex-row justify-content-evenly align-items-baseline">
                                        <div>
                                            <input type="radio" name="sortBy" id="createdAt" value="createdAt" class="me-2" checked="true"> <label for="createdAt" class="me-2">Létrehozás szerint</label>
                                        </div>
                                        <div>
                                            <input type="radio" name="sortBy" id="latestUpdate" value="latestUpdate" class="me-2" > <label for="latestUpdate" class="me-2">Legutolsó frissítés</label>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-evenly align-items-baseline">
                                        <div>
                                            <input type="radio" name="sortBy" id="popularity" value="popularity" class="me-2"> <label for="popularity">Olvasottság</label>
                                        </div>
                                        <div>
                                            <input type="radio" name="sortBy" id="title2" value="title" class="me-2"> <label for="title2">Cím</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column  my-2">
                                <div class="h6 ms-3">Sorrend</div>
                                <div class="d-flex flex-row justify-content-evenly align-items-baseline">
                                    <div>
                                        <input type="radio" name="orderBy" id="asc" value="asc" class="me-2" checked="true"> <label for="asc">Növekvő</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="orderBy" id="desc" value="desc" class="me-2"> <label for="desc" class="me-2">Csökkenő</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column  my-2">
                                <div class="d-flex flex-row"><div class="h6 ms-3">Korhatár</div></div>
                                <div class="d-flex flex-row justify-content-evenly align-items-baseline">
                                    <div>
                                        <input type="checkbox" name="age12" id="age12" class="me-2" checked="true"> <label for="age12" class="me-2">12</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="age14" id="age14" class="me-2" checked="true"> <label for="age14" class="me-2">14</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="age16" id="age16" class="me-2" checked="true"> <label for="age16" class="me-2">16</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="age18" id="age18" class="me-2" checked="true"> <label for="age18" class="me-2">18+</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="d-flex col-md-8 ">
            <div class="row row-cols-2 gx-4">
                @foreach($books as $book)
                <div class="col my-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row ">
                                <div class="d-flex flex-column">
                                    <img src="images\covers\{{$book->cover}}" alt="{{$book->title}}" height="300px" class="mt-0 mx-auto">
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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    
    
</div>


@endsection