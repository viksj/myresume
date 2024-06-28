@extends('layout.main')
@section('title', 'Create Resume')
@section('main-content')
    <div class="container border">
        <div class="row">
            <div class="col-md-12">
                <h4>{{ $resume->first_name }} {{ $resume->last_name }}</h4>
                <p class="m-0">Email: <span class="fw-bold">{{ $resume->email }}</span></p>
                <p class="m-0">Mobile Number: <span class="fw-bold">{{ $resume->phone }}</span></p>
                <p class="m-0">
                    <span>Address : </span>
                <p class="fw-bold"> {{ $resume->address }}, {{ $resume->city }}, {{ $resume->state }}, {{ $resume->country }}
                    ({{ $resume->zip_code }})</p>
                </p>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <h5 style="background-color: #82a3e9; color: #ffffff; padding: 5px;">Profile Summary</h5>
                <p>{{ $resume->summary }}</p>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <h5 style="background-color: #82a3e9; color: #ffffff; padding: 5px;">Education</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Institution</th>
                            <th>Degree</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($resume->education)
                            @php
                                $education = json_decode($resume->education, true);
                                $count = count($education['institution']);
                            @endphp
                            @for ($i = 0; $i < $count; $i++)
                                <tr>
                                    <td>{{ $education['institution'][$i] }}</td>
                                    <td>{{ $education['degree'][$i] }}</td>
                                    <td>{{ $education['year'][$i] }}</td>
                                </tr>
                            @endfor
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <h5 style="background-color: #82a3e9; color: #ffffff; padding: 5px;">Exprience</h5>
                <ul>
                    @if ($resume->experience)
                        @foreach (json_decode($resume->experience) as $experience)
                            <li>{{ $experience }}</li>
                        @endforeach
                    @else
                        <li>Fresher</li>
                    @endif
                </ul>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <h5 style="background-color: #82a3e9; color: #ffffff; padding: 5px;">Skills</h5>
                <ul>
                    @foreach (json_decode($resume->skills) as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <hr />
        @if ($resume->projects)
            <div class="row">
                <div class="col-md-12">
                    <h5 style="background-color: #82a3e9; color: #ffffff; padding: 5px;">Projects</h5>
                    @php
                        $project = json_decode($resume->projects, true);
                        $count = count($project['name']);
                    @endphp
                    @for ($i = 0; $i < $count; $i++)
                        <h4 class="ms-5">{{ $project['name'][$i] }}</h4>
                        <p class="ms-5 mb-0">
                            <span class="fw-bold">Project Description : </span>
                            <br />
                        <p class="ms-5">{{ $project['description'][$i] }}</p>
                        </p>
                    @endfor
                </div>
            </div>
            <hr />
        @endif
        @if ($resume->certifications)
            <div class="row">
                <div class="col-md-12">
                    <h5 style="background-color: #82a3e9; color: #ffffff; padding: 5px;">Certifications</h5>
                    @php
                        $certification = json_decode($resume->certifications, true);
                        $count = count($certification['name']);
                    @endphp
                    @for ($i = 0; $i < $count; $i++)
                        <h4 class="ms-5">{{ $certification['name'][$i] }}</h4>
                        <p class="ms-5 mb-0">
                            <span class="fw-bold">Certification Description : </span>
                            <br />
                        <p class="ms-5">{{ $certification['description'][$i] }}</p>
                        </p>
                    @endfor
                </div>
            </div>
            <hr />
        @endif
    </div>
@endsection
