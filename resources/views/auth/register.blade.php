@extends('layout.main')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="g-3" action="{{route('register')}}" method="post">
                    @csrf
                    {{-- <div class="row">
                        <div class="col-md-6"> --}}
                            <x-input-field label="Name" name="name" value="{{old('name')}}"/>
                        {{-- </div>
                        <div class="col-md-6"> --}}
                            <x-input-field label="Email" type="email" name="email" value="{{old('email')}}" />
                            {{-- </div> --}}
                            <x-input-field label="Password" type="password" name="password" />
                            <x-input-field label="Conform Password" type="password" name="password_confirmation" />
                            <button type="submit" class="btn btn-sm border mt-2">{{__('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
