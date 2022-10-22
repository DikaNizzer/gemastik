<?php

namespace App\Http\Controllers;

// use App\Models\Bimbingan;
use App\Models\Mahasiswa;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Bimbingan;

class BimbinganController extends Controller
{
    //
    public function get_bimbingan(){
        

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
            $bimbingan = Bimbingan::where('ta_ID_TA',$ta->ID_TA)->get();
            $data = [
                'title' => 'SILOLAVAIR || Dashboard',
                'idta' => $ta->ID_TA,
                'bimbingan' => $bimbingan
            ];
            // $idta = $ta->ID_TA;
            return view('mhs.bimbingan', $data);

        }

    }


}
