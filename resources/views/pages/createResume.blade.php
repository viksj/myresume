@extends('layout.main')
@section('title', 'Create Resume')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="row g-3 justify-content-center mt-2" action="{{route('resume.create')}}" method="post">
                    @csrf
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                {{ __('Basic') }}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <x-input-field label="First Name" name="first_name" id="first_name"
                                                value="{{ old('first_name') }}" required="true" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <x-input-field label="Last Name" name="last_name" id="last_name"
                                                value="{{ old('last_name') }}" required="true" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <x-input-field label="Email" type="email" name="email" id="email"
                                                value="{{ old('email') }}" required="true" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <x-input-field label="Contect Number" name="phone" id="phone"
                                                value="{{ old('phone') }}" required="true" />
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
                                        <x-input-field label="Address" name="address" id="address"
                                            value="{{ old('address') }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-field label="City" name="city" id="city"
                                            value="{{ old('city') }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-field label="State" name="state" id="state"
                                            value="{{ old('state') }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-field label="Zip Code" name="zip_code" id="zip_code"
                                            value="{{ old('zip_code') }}" />
                                    </div>
                                    <div class="col-md-6">
                                        <x-input-field label="Country" name="country" id="country"
                                            value="{{ old('country') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header">
                                {{ __('Education Info') }}
                            </div>
                            <div class="card-body" id="education-section">
                                <div class="row education-row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <x-input-field label="Institution" name="education[institution][]"
                                                id="education[institution][]"
                                                value="{{ old('education[institution][]') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <x-input-field label="Degree" name="education[degree][]"
                                                id="education[degree][]" value="{{ old('education[degree][]') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <x-input-field label="Year" name="education[year][]" id="education[year][]"
                                                value="{{ old('education[year][]') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <br />
                                            <button class="btn btn-sm add-btn" type="button">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header">
                                {{ __('Experience Info') }}
                            </div>
                            <div class="card-body" id="experience-section">
                                <div class="row experience-row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <x-input-field label="Experience" name="experience[]" id="experience[]"
                                                value="{{ old('experience[]') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <br />
                                            <button class="btn btn-sm mt-md-3" id="add-experience"
                                                type="button">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header">
                                {{ __('skills Info') }}
                            </div>
                            <div class="card-body" id="skills-section">
                                <div class="row skills-row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <x-input-field label="skills" name="skills[]" id="skills[]"
                                                value="{{ old('skills[]') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <br />
                                            <button class="btn btn-sm mt-md-3" id="add-skills"
                                                type="button">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header">
                                {{ __('projects Info') }}
                            </div>
                            <div class="card-body" id="projects-section">
                                <div class="row projects-row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <x-input-field label="Project Name" name="projects[name][]"
                                                id="projects[name][]" value="{{ old('projects[name][]') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <x-input-field label="Project description" name="projects[description][]"
                                                id="projects[description][]"
                                                value="{{ old('projects[description][]') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <br />
                                            <button class="btn btn-sm mt-md-3" id="add-projects"
                                                type="button">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2 mb-2">
                            <div class="card-header">
                                {{ __('Certifications Info') }}
                            </div>
                            <div class="card-body" id="projects-section">
                                <div class="row projects-row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <x-input-field label="Project Name" name="certifications[name][]"
                                                id="certifications[name][]"
                                                value="{{ old('certifications[name][]') }}" />
                                        </div>
                                        <div class="form-group">
                                            <x-input-field label="Project Name" name="certifications[description][]"
                                                id="certifications[description][]"
                                                value="{{ old('certifications[description][]') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <br />
                                            <button class="btn btn-sm mt-md-3" id="add-certifications"
                                                type="button">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            // Add button click handler
            $('.add-btn').click(function() {
                console.log('click')
                var newRow = `
                <div class="row education-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="education[institution][]">Institution</label>
                            <input type="text" class="form-control" name="education[institution][]" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="education[degree][]">Degree</label>
                            <input type="text" class="form-control" name="education[degree][]" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="education[year][]">Year</label>
                            <input type="text" class="form-control" name="education[year][]" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <br/>
                            <button class="btn btn-sm btn-danger remove-btn">Remove</button>
                        </div>
                    </div>
                </div>
            `;
                $('#education-section').append(newRow);
            });

            // Remove button click handler
            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.education-row').remove();
            });
            // Add button click handler for Experience Info (if needed)
            $('#add-experience').click(function() {
                var newRow = `
            <div class="row experience-row">
                <div class="col-md-8">
                    <div class="form-group">
                        <x-input-field label="Experience" name="experience[]" id="experience[]"
                            value="{{ old('experience[]') }}" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <br />
                        <button class="btn btn-sm mt-md-3 remove-btn" type="button">Remove</button>
                    </div>
                </div>
            </div>
        `;
                $('#experience-section').append(newRow);
            });

            // Remove button click handler for Experience Info
            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.experience-row').remove();
            });

            // Add button click handler for Skills Info (if needed)
            $('#add-skills').click(function() {
                var newRow = `
            <div class="row skills-row">
                <div class="col-md-8">
                    <div class="form-group">
                        <x-input-field label="Skills" name="skills[]" id="skills[]"
                            value="{{ old('skills[]') }}" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <br />
                        <button class="btn btn-sm mt-md-3 remove-btn" type="button">Remove</button>
                    </div>
                </div>
            </div>
        `;
                $('#skills-section').append(newRow);
            });

            // Remove button click handler for Skills Info
            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.skills-row').remove();
            });

            // Add button click handler for Projects Info (if needed)
            $('#add-projects').click(function() {
                var newRow = `
            <div class="row projects-row">
                <div class="col-md-3">
                    <div class="form-group">
                        <x-input-field label="Project Name" name="projects[name][]"
                            id="projects[name][]" value="{{ old('projects[name][]') }}" />
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <x-input-field label="Project Description" name="projects[description][]"
                            id="projects[description][]" value="{{ old('projects[description][]') }}" />
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <br />
                        <button class="btn btn-sm mt-md-3 remove-btn" type="button">Remove</button>
                    </div>
                </div>
            </div>
        `;
                $('#projects-section').append(newRow);
            });

            // Remove button click handler for Projects Info
            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.projects-row').remove();
            });

            // Add button click handler for Certifications Info (if needed)
            $('#add-certifications').click(function() {
                var newRow = `
            <div class="row certifications-row">
                <div class="col-md-8">
                    <div class="form-group">
                        <x-input-field label="Certification Name" name="certifications[name][]"
                            id="certifications[name][]" value="{{ old('certifications[name][]') }}" />
                    </div>
                    <div class="form-group">
                        <x-input-field label="Certification Description"
                            name="certifications[description][]" id="certifications[description][]"
                            value="{{ old('certifications[description][]') }}" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <br />
                        <button class="btn btn-sm mt-md-3 remove-btn" type="button">Remove</button>
                    </div>
                </div>
            </div>
        `;
                $('#certifications-section').append(newRow);
            });

            // Remove button click handler for Certifications Info
            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.certifications-row').remove();
            });

        });
    </script>
@endsection
