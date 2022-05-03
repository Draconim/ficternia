@extends('layouts.main')
@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error( error )
        })
</script>
@endpush
@section('content')

<div class="container-fluid my-5">
    @if(!isset($chapter))
        <form action="{{route('addChapter',$bookId)}}" method="POST" class="justify-content-center">
    @else
        <form action="{{url('/MyBooks/'.$bookId.'/changeChapter/'.$chapter->id)}}" method="POST" class="justify-content-center">
    @endif
        @csrf
        <div class="d-flex justify-content-center col-6 mx-auto">
            <div class="card w-100">
                <div class="card-header h3 text-center">
                    @if(isset($chapter))
                        {{__('Fejezet módosítása')}}
                    @else
                        {{__('Új fejezet')}}
                    @endif
                </div>
                <div class="card-body">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row justify-content-center m-3">
                            <x-forms.input divClass="my-2 d-flex flex-column w-100" 
                            class="" name="title" label="{{__('Fejezet címe')}}" type="text" value="{{isset($chapter) ? $chapter->title : ''}}" />
                        </div>
                        <div class="d-flex flex-column justify-content-center m-3">
                            <textarea id="editor" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content">{{isset($chapter) ? $chapter->content : ''}}{{ old('content') }}</textarea>
                            @if ($errors->has('content'))
                                <p class="invalid-feedback">{{ $errors->first('content') }}</p>
                            @endif
                        </div>
                        <div class="d-flex flex-column justify-content-center my-2 mx-3">
                            <div class="d-flex flex-row my-2">
                                <div class=" me-2">
                                    <input type="checkbox" name="publish" id="publish" {{isset($chapter) ? ($chapter->published=='published' ? 'checked' : '') : ''}}>
                                </div>
                                <div>Publikálom</div>
                            </div>
                            <div class="d-flex justify-content-center w-100 my-3">
                                <button type="submit" class="btn btn-secondary w-50">Mentés</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </form>
</div>

@endsection