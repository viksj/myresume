<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Helvetica, Arial, sans-serif';
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .resume-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h3, h2 {
            color: #343a40;
        }
        .fw-bold {
            font-weight: bold;
        }
        .section-title {
            margin-bottom: 10px;
            border-bottom: 2px solid #343a40;
            padding-bottom: 5px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        hr {
            border: 0;
            border-top: 1px solid #343a40;
            margin: 20px 0;
        }
        .project-title, .certification-title {
            font-size: 1.1em;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        .section ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        .section ul li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container resume-container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{ $resume->first_name }} {{ $resume->last_name }}</h3>
                <p class="m-0" style="font-size: 12px;">Email: <span class="fw-bold">{{ $resume->email }}</span></p>
                <p class="m-0" style="font-size: 12px;">Mobile Number: <span class="fw-bold">{{ $resume->phone }}</span></p>
                <p class="m-0" style="font-size: 12px;">Address:
                    <span class="fw-bold" style="">{{ $resume->address }}, {{ $resume->city }}, {{ $resume->state }}, {{ $resume->country }} ({{ $resume->zip_code }})</span>
                </p>
            </div>
        </div>
        <br />
        <div class="row section">
            <div class="col-md-12">
                <h2 class="section-title">Profile Summary</h2>
                <p>{{ $resume->summary }}</p>
            </div>
        </div>
        <br />
        <div class="row section">
            <div class="col-md-12">
                <h2 class="section-title">Education</h2>
                <table class="table table-striped">
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
        <br />
        <div class="row section">
            <div class="col-md-12">
                <h2 class="section-title">Experience</h2>
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
        <br />
        <div class="row section">
            <div class="col-md-12">
                <h2 class="section-title">Skills</h2>
                <ul>
                    @foreach (json_decode($resume->skills) as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <br />
        @if ($resume->projects)
            <div class="row section">
                <div class="col-md-12">
                    <h2 class="section-title">Projects</h2>
                    @php
                        $project = json_decode($resume->projects, true);
                        $count = count($project['name']);
                    @endphp
                    @for ($i = 0; $i < $count; $i++)
                        <div class="project-title">{{ $project['name'][$i] }}</div>
                        <p>
                            <span class="fw-bold">Project Description: </span>
                            <span>{{ $project['description'][$i] }}</span>
                        </p>
                    @endfor
                </div>
            </div>
            <br />
        @endif
        @if ($resume->certifications)
            <div class="row section">
                <div class="col-md-12">
                    <h2 class="section-title">Certifications</h2>
                    @php
                        $certification = json_decode($resume->certifications, true);
                        $count = count($certification['name']);
                    @endphp
                    @for ($i = 0; $i < $count; $i++)
                        <div class="certification-title">{{ $certification['name'][$i] }}</div>
                        <p>
                            <span class="fw-bold">Certification Description: </span>
                            <span>{{ $certification['description'][$i] }}</span>
                        </p>
                    @endfor
                </div>
            </div>
            <br />
        @endif
    </div>
</body>
</html>
