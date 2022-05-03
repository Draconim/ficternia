@extends('layouts.main')
@section('content')

<div class="container-fluid d-grid my-5">
    <div class=" ">
        @if(!isset($myBook[0]))
            <form action="{{ route('addBook') }}" method="POST" enctype="multipart/form-data">
        @else
            <form action="{{ route('changeBookPost',$myBook[0]->id) }}" method="POST" enctype="multipart/form-data">
        @endif
            <div class="row justify-content-center">
                @csrf
                <div class="col-6">
                    <div class="card">
                        <div class="card-header h3 text-center">
                            @if(isset($myBook[0]))
                                {{__('Történet módosítása')}}
                            @else
                                {{__('Új történet')}}
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row justify-content-center m-3">
                                    
                                    <x-forms.input divClass="my-2 d-flex flex-column w-100" 
                                    class="" name="title" label="{{__('A történet címe')}}" type="text" value="{{isset($myBook[0]) ? $myBook[0]->title : ''}}" />
                                </div>
                                <div class="d-flex flex-column justify-content-center m-3">
                                    <label for="description">Leírás</label>
                                    <textarea name="description" id="description" rows="10" class="w-100 form-control border-dark">{{isset($myBook[0]) ? $myBook[0]->description : ''}}</textarea>
                                </div>
                                <div class="d-flex flex-column justify-content-center m-3">
                                    <label for="genre_id">{{ __('Zsáner') }}</label>
                                    <select class="form-control border-dark dynamic{{ $errors->has('genre_id') ? ' is-invalid' : '' }}" name="genre_id" id="genre">
                                        <option value="">{{ __('Kérlek válassz') }}</option>
                                        @foreach($genres as $genre)
                                        <option value="{{ $genre->id }}" {{ old('genre_id') == $genre->id ? 'selected' : '' }} {{isset($myBook[0]) ? ($myBook[0]->genre_id==$genre->id ? 'selected' : '') : ''}}>
                                            {{ $genre->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    
                                    @if ($errors->has('genre_id'))
                                    <p class="invalid-feedback">{{ $errors->first('genre_id') }}</p>
                                    @endif
                                </div>
                                <div class="d-flex flex-column justify-content-center m-3">
                                    <label for="subGenre_id">{{ __('Alzsáner') }}</label>
                                    <select class="form-control border-dark {{ $errors->has('subGenre_id') ? ' is-invalid' : '' }}" name="subGenre_id" id="subGenre">
                                        <option value="">{{ __('Kérlek válassz') }}</option>
                                        @foreach($subGenres as $subGenre)
                                        <option value="{{ $subGenre->id }}" {{ old('subGenre_id') == $subGenre->id ? 'selected' : '' }} {{isset($myBook[0]) ? ($myBook[0]->subGenre_id==$subGenre->id ? 'selected' : '') : ''}}>
                                            {{ $subGenre->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('subGenre_id'))
                                    <p class="invalid-feedback">{{ $errors->first('subGenre_id') }}</p>
                                    @endif
                                </div>
                                <div class="d-flex flex-column justify-content-center m-3">
                                    <label for="age_limit">{{ __('Korhatár') }}</label>
                                    <select class="form-control border-dark {{ $errors->has('age_limit') ? ' is-invalid' : '' }}" name="age_limit" id="ageLimit">
                                        <option value="">{{ __('Kérlek válassz') }}</option>
                                        <option value="12" {{isset($myBook[0]) ? ($myBook[0]->age_limit=='12' ? 'selected' : '') : ''}}>12</option>
                                        <option value="14" {{isset($myBook[0]) ? ($myBook[0]->age_limit=='14' ? 'selected' : '') : ''}}>14</option>
                                        <option value="16" {{isset($myBook[0]) ? ($myBook[0]->age_limit=='16' ? 'selected' : '') : ''}}>16</option>
                                        <option value="18" {{isset($myBook[0]) ? ($myBook[0]->age_limit=='18' ? 'selected' : '') : ''}}>18+</option>
                                    </select>
                                    @if ($errors->has('age_limit'))
                                    <p class="invalid-feedback">{{ $errors->first('age_limit') }}</p>
                                    @endif
                                </div>
                                <div class="d-flex flex-column justify-content-center my-2 mx-3">
                                    <div class="d-flex flex-row my-2">
                                        <div class=" me-2">
                                            <input type="checkbox" name="published" id="published" {{isset($myBook[0]) ? ($myBook[0]->published=='published' ? 'checked' : '') : ''}}>
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
                <div class="col-3 ms-5">
                    <div class="card">
                        <div class="card-header h3 text-center">
                            {{__('Borítókép')}}
                        </div>
                        <div class="card-body">
                            <input class="form-control {{ $errors->has('cover') ? 'is-invalid' : ''}}" type="file" name="cover" value="{{old('cover')}}">
                            @if($errors->has('cover'))
                                <p class="invalid-feedback">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>  
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
    $('#genre').on('change', function () {
    let id = $(this).val();
    $('#subGenre').empty();
    $('#subGenre').append(`<option value="0" disabled selected>Processing...</option>`);
    $.ajax({
    type: 'GET',
    url: 'NewBook/getSubGenre/' + id,
    success: function (response) {
    var response = JSON.parse(response);
    console.log(response);   
    $('#subGenre').empty();
    $('#subGenre').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
    response.forEach(element => {
        $('#subGenre').append(`<option value="${element['id']}">${element['name']}</option>`);
        });
    }
});
});
});
</script>
-->
@endsection