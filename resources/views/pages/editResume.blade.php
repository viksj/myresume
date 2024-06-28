@extends('layout.main')
@section('title', 'Edit Resume')
@section('main-content')
    <div class="container">
        <h2>Edit Resume</h2>
        <form action="{{ route('resumes.update', $resume->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $resume->first_name) }}" required>
            </div>
            
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $resume->last_name) }}" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $resume->email) }}" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $resume->phone) }}">
            </div>
            
            <div class="form-group">
                <label for="summary">Summary</label>
                <textarea class="form-control" id="summary" name="summary">{{ old('summary', $resume->summary) }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $resume->address) }}">
            </div>
            
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $resume->city) }}">
            </div>
            
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" value="{{ old('state', $resume->state) }}">
            </div>
            
            <div class="form-group">
                <label for="zip_code">Zip Code</label>
                <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ old('zip_code', $resume->zip_code) }}">
            </div>
            
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $resume->country) }}">
            </div>

            <h3>Education</h3>
            <div id="education-fields">
                @php
                    $education = json_decode($resume->education, true);
                @endphp
                @foreach ($education['institution'] as $index => $institution)
                    <div class="form-group">
                        <label for="education_institution_{{ $index }}">Institution</label>
                        <input type="text" class="form-control" id="education_institution_{{ $index }}" name="education[institution][]" value="{{ old('education.institution.' . $index, $institution) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="education_degree_{{ $index }}">Degree</label>
                        <input type="text" class="form-control" id="education_degree_{{ $index }}" name="education[degree][]" value="{{ old('education.degree.' . $index, $education['degree'][$index]) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="education_year_{{ $index }}">Year</label>
                        <input type="text" class="form-control" id="education_year_{{ $index }}" name="education[year][]" value="{{ old('education.year.' . $index, $education['year'][$index]) }}" required>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-education" class="btn btn-primary">Add Education</button>

            <button type="submit" class="btn btn-success">Update Resume</button>
        </form>
    </div>

    <script>
        document.getElementById('add-education').addEventListener('click', function () {
            var index = document.querySelectorAll('#education-fields .form-group').length / 3; // Get current number of education groups
            var educationFields = `
                <div class="form-group">
                    <label for="education_institution_${index}">Institution</label>
                    <input type="text" class="form-control" id="education_institution_${index}" name="education[institution][]" required>
                </div>
                <div class="form-group">
                    <label for="education_degree_${index}">Degree</label>
                    <input type="text" class="form-control" id="education_degree_${index}" name="education[degree][]" required>
                </div>
                <div class="form-group">
                    <label for="education_year_${index}">Year</label>
                    <input type="text" class="form-control" id="education_year_${index}" name="education[year][]" required>
                </div>
            `;
            document.getElementById('education-fields').insertAdjacentHTML('beforeend', educationFields);
        });
    </script>
@endsection
