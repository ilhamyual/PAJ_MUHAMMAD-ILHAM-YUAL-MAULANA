<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class SubjectController extends Controller
{
    public function viewsubjectstudent()
    {
        return view('subjectstudent');
    }

    public function viewsubjectteacher()
    {
        return view('subjectteacher');
    }
    
    public function viewsubjectadmin()
    {
        return view('subjectadmin');
    }
}
