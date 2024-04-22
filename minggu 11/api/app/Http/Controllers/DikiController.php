<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Hadiah;

class DikiController extends Controller
{
   public function index()
    {
        $anggotas = Anggota::with('hadiah')->get();

        return view('anggota', ['anggotas' => $anggotas]);
    }
}
