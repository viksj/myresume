<?php

namespace App\Http\Controllers\Resume;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
        ]);

        // dd($request->all());
        // Create a new Resume instance
        $resume = new Resume();
        
        // Fill the Resume model with validated data
        $resume->fill($validatedData);

        // Additional fields not directly validated
        $resume->user_id = auth()->id(); // Assuming you have user authentication
        $resume->phone = $request->input('phone');
        $resume->summary = $request->input('summary');
        $resume->address = $request->input('address');
        $resume->city = $request->input('city');
        $resume->state = $request->input('state');
        $resume->zip_code = $request->input('zip_code');
        $resume->country = $request->input('country');
        // Convert arrays to JSON strings
        $resume->education = json_encode($request->input('education'));
        $resume->experience = json_encode($request->input('experience'));
        $resume->skills = json_encode($request->input('skills'));
        $resume->projects = json_encode($request->input('projects'));
        $resume->certifications = json_encode($request->input('certifications'));

        // Save the resume to the database
        $resume->save();

        // Redirect back with a success message or to another page
        return redirect()->route('resume.create')->with('success', 'Resume created successfully!');
    }
}
