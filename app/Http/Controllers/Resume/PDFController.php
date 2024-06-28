<?php

namespace App\Http\Controllers\Resume;

use App\Models\Resume;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function generatePDF(Request $request, Resume $resume)
    {
        // Check authorization to view this resume
        // if ($request->user()->cannot('view', $resume)) {
        //     abort(403);
        // }
        $name = Auth::user()->name;
        $pdf = PDF::loadView('resume.pdf', compact('resume'));

        // Display PDF in browser
        if ($request->input('action') == 'view') {
            return $pdf->stream();
        }

        // Download PDF
        return $pdf->download("$name.pdf");
    }
}
