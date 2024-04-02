<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        // Mengambil semua data pengguna beserta nomor telepon mereka
        $pengguna = Pengguna::with('telepon')->get();
        
        // Return data ke view
        return view('pengguna', ['pengguna' => $pengguna]);
    }
}
