@extends('layouts.main')
@section('content')
<div class="container-fluid mb-5 d-flex flex-column">
    <div class="d-flex mb-2">
        <div class="text-center h1 mt-3 mb-4 col">{{$bookName}}</div>
    </div>
    <div class="d-flex flex-row ps-5 justify-content-center">
        <div class="d-flex col-md-5 ms-5">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-flex flex-column m-auto">
                        <div class="d-flex mx-auto py-3 fs-1">
                            {{$chapter[0]->title}}
                        </div>
                        <div class="d-flex text-justify py-2 mx-auto">
                            {{$chapter[0]->content}}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="d-flex col-md-3 ms-3 ">
            <div class="card chapterSelector">
                <div class="card-header">{{__('Fejezetek')}}</div>
                <div class="card-body overflow-auto">
                    <div class="d-flex flex-column justify-content-center ">
                        @foreach($chapterIdAndName as $cpIdAndName)
                            <a href="{{ url('/'.$chapter[0]->book_id.'/'.$cpIdAndName['id'])}}" class="text-reset text-decoration-none">
                                <div class="d-flex fs-5 py-2 px-2 {{$chapter[0]->id == $cpIdAndName['id'] ? 'activeCp': ''}}">
                                    {{$cpIdAndName['title']}}
                                </div>
                            </a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column mt-3">
        <form action="{{ url('/'.$chapter[0]->book_id.'/'.$chapter[0]->id)}}" method="POST">
            @csrf
            <div class="d-flex flex-row ps-5 justify-content-center">
                <div class="d-flex col-md-5 ms-5">
                    <textarea name="commentContent" id="commentContent" rows="6" class="form-control w-100"></textarea>
                </div>
                <div class ="d-flex col-md-3 ms-3 align-items-center">
                    <button type="submit" class="btn btn-secondary w-25 h-25">Küldés</button>
                </div>
            </div>
        </form>
    </div>
    <div class="d-flex flex-column mt-3">
        @foreach($comments as $comment)
            <div class="d-flex flex-row mt-2">
                <div class="d-flex w-100">
                    <div class="card w-75 offset-md-3">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex fs-4 align-items-center">
                                {{$comment['username']}}
                            </div>
                            <div class="d-flex mx-3">
                                {{$comment['content']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class ="d-flex col-md-3 ms-3 align-items-center">
                   
                </div>
            </div>
        @endforeach
    </div>
    
    
</div>


@endsection