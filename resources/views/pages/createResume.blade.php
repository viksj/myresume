@extends('layout.main')
@section('title', 'Create Resume')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="row g-3 justify-content-center mt-2" action="" method="post">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                {{__('Basic')}}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <x-input-field label="First Name" name="first_name" id="first_name" value="{{old('first_name')}}" required="true"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <x-input-field label="Last Name" name="last_name" id="last_name" value="{{old('last_name')}}" required="true"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <x-input-field label="Email" type="email" name="email" id="email" value="{{old('email')}}" required="true"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <x-input-field label="Contect Number" name="phone" id="phone" value="{{old('phone')}}" required="true"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="summary" class="form-label">{{ __('Summary') }}</label>
                                            <textarea class="form-control" id="summary" name="summary" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header">
                                {{ __('Address Info') }}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-input-field label="Address" name="address" id="address" value="{{ old('address') }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-field label="City" name="city" id="city" value="{{ old('city') }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-field label="State" name="state" id="state" value="{{ old('state') }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-field label="Zip Code" name="zip_code" id="zip_code" value="{{ old('zip_code') }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-field label="Country" name="country" id="country" value="{{ old('country') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header">
                                {{ __('Education Info') }}
                            </div>
                            <div class="card-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <x-input-field label="Institution" name="education[institution][]" id="education[institution][]" value="{{old('education[institution][]')}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <x-input-field label="Degree" name="education[degree][]" id="education[degree][]" value="{{old('education[degree][]')}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <x-input-field label="Year" name="education[year][]" id="education[year][]" value="{{old('education[year][]')}}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection