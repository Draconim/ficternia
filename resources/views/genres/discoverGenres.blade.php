@extends('layouts.main')
@section('content')

<div class="container-fluid mb-5 px-5">
    <div class="text-center h1 my-3 col">{{__('Zsánerek')}}</div>
    <div class="d-flex flex-column">
        @foreach($genres as $genre)
        <div class="w-100 my-2 d-flex justify-content-center">
            <div class="card col-8">
                <div class="card-body ">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-center">
                            <div class="h3 mx-1 mt-2">{{$genre->name}}</div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="mx-4 position-relative">
                                {{substr($genre->description,0,500).'...'}}
                                <a href="{{route('getSubGenres',$genre->name)}}" class="stretched-link">{{'...'.__('több')}}</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <hr class="bg-dark w-75 border-2 border-top border-dark">
                        </div>
                        <div class="m-2 d-flex flex-column">
                            <div>{{__('A zsánerhez tartozó alzsánerek:')}}</div>
                            <div class="d-flex flex-row">
                                @foreach($subGenres as $subGenre)
                                @if($subGenre->genre_id == $genre->id)
                                    <div class="d-flex col justify-content-evenly">
                                        <a href="{{route('getSubGenres',$genre->name,$genre->id)}}" class="text-reset text-center text-decoration-none w-100">{{$subGenre->name}}</a>
                                    </div>
                                @endif
                            @endforeach
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection