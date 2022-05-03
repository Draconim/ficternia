@extends('layouts.main')
@section('content')

<div class="container-fluid mb-5 mt-2 px-3">
    <div class="d-flex flex-row mt-4">
        <div class="col-3">
            <div class="card mx-auto">
                <div class="d-flex justify-content-center">
                    <div class="h1 mx-1 ">{{$genre[0]->name}}</div>
                </div>            
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="mx-auto col-10">
                            {{$genre[0]->description}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="w-100 d-flex justify-content-center flex-column">
                @foreach($subGenres as $subGenre)
                    <div class="card mx-auto col-11 mb-2">
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-center h3">
                                    ~~~{{$subGenre->name}}~~~
                                </div>
                                <div class="m-2 d-flex flex-column">
                                    <div class="d-flex flex-row">
                                        <div class="d-flex col justify-content-evenly">
                                            {{$subGenre->description}} 
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