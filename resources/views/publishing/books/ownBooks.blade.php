@extends('layouts.main')
@section('content')

<!-- TODO: fix card width anomaly when there is no cover and long text + placement anomalies -->

<div class="container-fluid mb-5 px-5">
    <div class="text-center h1 my-3 col">Történetek</div>
    <div class="row row-cols-1 gx-4">
        @foreach($books as $book)
        <div class="d-flex mx-auto col-8 my-2">
            <div class="card w-100">
                <div class="card-body ">
                    <div class="d-flex flex-row ">
                        <div class="d-flex flex-column">
                            <a href="{{route('getChapters',$book->id)}}" class="text-reset text-decoration-none">
                                <img src="images\covers\{{$book->cover}}" alt="{{$book->title}}" height="200px" class="mt-0 mx-auto">
                            </a>
                        </div>
                        <div class="d-flex flex-column ms-3">
                            <div class="d-flex flex-row mt-2 justify-content-between">
                                <div class="h3 mx-1 ">{{$book->title}} - {{$book->author->username}}</div>
                                <div class="align-items-baseline">
                                    <a href="{{route('changeBook',$book->id)}}" class="btn btn-secondary">{{__('Módosítás')}}</a>
                                    <a href="{{route('getChapters',$book->id)}}" class="btn btn-secondary">{{__('Fejezetek')}}</a>
                                    @if($book->published=='published')
                                            <a href="{{url('/MyBooks/'.$book->id.'/unpublish')}}" class="btn btn-secondary mx-1">{{__('Publikálás visszavonása')}}</a>
                                        @else
                                            <a href="{{url('/MyBooks/'.$book->id.'/publish')}}" class="btn btn-secondary mx-1">{{__('Publikálás')}}</a>
                                        @endif
                                    <a href="{{url('/MyBooks/'.$book->id.'/delete')}}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                            </div>
                            <a href="{{route('getChapters',$book->id)}}" class="text-reset text-decoration-none d-flex flex-column">
                                <div class="d-flex flex-row">
                                    <div class="h5 mx-1">{{$book->genre->name}} -</div>
                                    <div class="h5 mx-1">{{$book->subGenre->name}}</div>
                                </div>
                                <div class="m-2">
                                    {{substr($book->description,0,350)."..."}}
                                </div>
                                <div class="d-flex flex-row mt-auto justify-content-center">
                                    <div class="mx-1">Létrehozva: {{date('Y-m-d',strtotime($book->created_at))}}</div>
                                    <div class="mx-1">Frissítve: {{date('Y-m-d',strtotime($book->last_updated))}}</div>
                                    <div class="mx-1">
                                        @if($book->published=='published')
                                            Publikálás ideje: {{$book->published_at}}
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection