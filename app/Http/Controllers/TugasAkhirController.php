<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TugasAkhirController extends Controller
{
    public function get_ta(){
        $tugasAkhir = TugasAKhir::all();
        $data = [
			'title' => 'Dashboard Mahasiswa',
            'tugasAkhir' => $tugasAkhir
		];

        return view('mhs.tugas_akhir', $data);
    }


    public function create_ta(Request $request)
    {
        $validatedData = $request->validate([
            'mahasiswa_NIM'  => 'required',
            'JUDUL_TA'       => 'required',
            'laporan_awal'   => 'required',
        ]);

        $file = $request->file('laporan_awal');
        $target_dir = "uploads/"; //lokasi
        $target_file = $target_dir . basename($_FILES["laporan_awal"]["name"]); //tempat lokasi
        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        //function pemindahan file
        $file->move($target_dir,$file->getClientOriginalName());

        TugasAkhir::create($validatedData);
        $id_ta = TugasAkhir::all()->last()->ID_TA;

        DB::table('tugas_akhir')->where('ID_TA',$id_ta)->update([
            'laporan_awal'     => basename($_FILES["laporan_awal"]["name"]),
            'TGL_PENGAJUAN'    => date('Y-m-d H:i:s')
        ]);

        return redirect('/mahasiswa-ta');
    }



}
