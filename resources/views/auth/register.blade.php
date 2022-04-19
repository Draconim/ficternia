@extends('layouts.main')

@section('content')
<div class="container d-flex justify-content-center align-content-center my-5">
    <div class=" card d-flex flex-column col-md-10">
        <div class="card-header text-center h3">{{__('Regisztráció')}}</div>
        <form method="POST" action="{{route('register')}}" class="card-body">
            @csrf
            <div class="d-flex flex-row  px-3 justify-content-center">
                <x-forms.input divClass="m-3 mx-5 col-md-4" class="" name="username" label="{{__('Felhasználónév')}}" type="text" value="" />
                <x-forms.input divClass="m-3 mx-5 col-md-4" class="" name="name" label="{{__('Név')}}" type="text" value="" />
            </div>
            <div class="d-flex flex-row px-3 justify-content-center">
                <x-forms.input divClass="m-3 mx-5 col-md-4" class="" name="email" label="{{__('Email')}}" type="email" value="" />
                <x-forms.input divClass="m-3 mx-5 col-md-4" class="" name="email_confirmation" label="{{__('Email újra')}}" type="email" value="" />  
                </div>
            <div class="d-flex flex-row px-3 justify-content-center">
                <x-forms.input divClass="m-3 mx-5 col-md-4" class="" name="password" label="{{__('Jelszó')}}" type="password" value="" />
                <x-forms.input divClass="m-3 mx-5 col-md-4" class="" name="password_confirmation" label="{{__('Jelszó újra')}}" type="password" value="" />  
            </div>
            <div class="d-flex justify-content-center my-3">
                <button type="submit" class="btn btn-primary w-25">
                    {{ __('Regisztráció') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
