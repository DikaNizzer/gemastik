<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MahasiswaController extends Controller
{
    public function index(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard Mahasiswa',
		];

        return view('mhs.index', $data);
    }


    // BUAT BIMBINGAN
    public function createBimbingan(Request $request)
    {
        $validatedData = $request->validate([
            'KETERANGAN'  => 'required',
            'TGL_BIMBINGAN'       => 'required',
            'kartu'   => 'required',
            'ta_ID_TA'   => 'required',
        ]);

        $file = $request->file('kartu');
        $target_dir = "uploads/kartu"; //lokasi
        $target_file = $target_dir . basename($_FILES["kartu"]["name"]); //tempat lokasi
        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        //function pemindahan file
        $file->move($target_dir,$file->getClientOriginalName());

        Bimbingan::create($validatedData);


        return redirect('/mahasiswa-bimbingan');
    }
}
