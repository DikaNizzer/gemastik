<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\RiwayatRevisi;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RevisiController extends Controller
{
    public function get_revisi(){
        // Cek Sudah Mengajukan TA Belum
        $mahasiswa = TugasAkhir::where('mahasiswa_NIM',session()->get('datamahasiswa')->NIM)->where('STATUS_TA', 1)->get();
        
        
        if(blank($mahasiswa)){ //Kalau Belum udah mengajukan Belum diacc
            echo "<script> 
            alert('Anda Belum memiliki TA yang disetujui !');
                document.location.href = '/mahasiswa';
            </script>";

        }else{ //kalau udah maju dan udah diacc
            foreach($mahasiswa as $ta){
                
            }
            $revisi = RiwayatRevisi::where('ID_TA',$ta->ID_TA)->get();
            $data = [
                'title' => 'SILOLAVAIR || Dashboard',
                'idta' => $ta->ID_TA,
                'revisi' => $revisi
            ];
            // $idta = $ta->ID_TA;
            return view('mhs.revisi', $data);

        }

    }


    public function create_revisi(Request $request)
    {
        $validatedData = $request->validate([
            'ID_TA'             => 'required',
            'TANGGAL_REVISI'    => 'required',
            'KETERANGAN_REVISI' => 'required',
            'PEMBERI_REVISI'    => 'required',
            'LAPORAN_TA'        => 'required',

        ]);

        // dd($validatedData);
        $validatedData['LAPORAN_TA'] = $request->file('LAPORAN_TA')->getClientOriginalName();
        $file = $request->file('LAPORAN_TA');
        $target_dir = "uploads/revisi/"; //lokasi
        $target_file = $target_dir . basename($_FILES["LAPORAN_TA"]["name"]); //tempat lokasi
        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        //function pemindahan file
        $file->move($target_dir,$file->getClientOriginalName());

        RiwayatRevisi::create($validatedData);


        return redirect('/mahasiswa-revisi');
    }

    public function createRev(Request $request)
    {
        $validatedData = $request->validate([
            'TANGGAL_REVISI'  => 'required',
            'KETERANGAN_REVISI'       => 'required',
            'PEMBERI_REVISI'   => 'required',
            'ta_ID_TA'   => 'required',
        ]);

    dd($validatedData);
    RiwayatRevisi::create($request);
        echo 'DIPENCET';

    }

}
