<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;

class UploadController extends Controller
{
    public function upload()
    {
        $gambar = Gambar::get();
        return view('upload', ['gambar' => $gambar]);
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);

        // Menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // Isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);
        $image = Image::make(public_path('data_file/'.$nama_file));
        $image->resize(100, 100); // Ubah ukuran gambar sesuai kebutuhan
        $image->save();
        
        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        $gambar = Gambar::findOrFail($id);
    
        // Hapus file fisik dari storage
        Storage::delete('data_file/' . $gambar->file);
    
        // Hapus data gambar dari database
        $gambar->delete();
    
        // Hapus file dari folder data_file (jika masih ada)
        $file_path = public_path('data_file/' . $gambar->file);
        if (file_exists($file_path)) {
            unlink($file_path);
        }
    
        return redirect()->back();
    }
}
