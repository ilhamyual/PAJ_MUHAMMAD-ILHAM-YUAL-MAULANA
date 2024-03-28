<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;
use Illuminate\Support\Facades\DB;

class VoterController extends Controller
{
    public function viewVoter()
    {
        $voter = DB::table('voters')->get();
        return view('voters',compact('voter'));
    }
}
