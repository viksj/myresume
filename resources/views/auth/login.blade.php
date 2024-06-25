@extends('layout.main')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="g-3" action="{{ route('login') }}" method="post">
                    @csrf
                    <x-input-field label="Email" type="email" name="email" value="{{ old('email') }}" />
                    <x-input-field label="Password" type="password" name="password" />
                    <button type="submit" class="btn btn-sm border mt-2">{{ __('Register') }}</button>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
