<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use App\Models\Jadwalsidang;
use App\Models\TugasAkhir;
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
        $validatedData['kartu'] = $request->file('kartu')->getClientOriginalName();
        $file = $request->file('kartu');
        $target_dir = "uploads/kartu"; //lokasi
        $target_file = $target_dir . basename($_FILES["kartu"]["name"]); //tempat lokasi
        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        //function pemindahan file
        $file->move($target_dir,$file->getClientOriginalName());

        Bimbingan::create($validatedData);


        return redirect('/mahasiswa-bimbingan');
    }


    // Get TA
    public function getSidang(){
        

        // Cek Sudah Mengajukan TA Belum
        $mahasiswa = TugasAkhir::where('mahasiswa_NIM',session()->get('datamahasiswa')->NIM)->where('STATUS_TA', 1)->get();
        if(blank($mahasiswa)){ //Kalau Belum udah mengajukan Belum diacc
            echo "<script> 
            alert('Anda Belum memiliki TA yang disetujui !');
                document.location.href = '/mahasiswa';
            </script>";
            exit();

        }
        // Cek Jumlah Bimbingan
        foreach($mahasiswa as $ta){
                
        }
        $jumlahBimbingan = Bimbingan::where('ta_ID_TA',$ta->ID_TA)->count();
        // dd($jumlahBimbingan);
        $sidang = Jadwalsidang::where('mahasiswa_NIM', session()->get('datamahasiswa')->NIM)->get();
        if($jumlahBimbingan < 8){ //Kalau Belum udah mengajukan Belum diacc
            echo "<script> 
            alert('Jumlah bimbingan anda masih dibawah batas minimal [8] !');
                document.location.href = '/mahasiswa';
            </script>";

        }else{ //kalau udah maju dan udah diacc

            $data = [
                'title' => 'SILOLAVAIR || Dashboard',
                'datasidang' => $sidang,
                'lembarPengesahan' => $ta->LEMBAR_PENGESAHAN,
                'laporanAkhir' => $ta->LAPORAN_FINAL_TA,
                'tanggal' => $ta->pengajuan_sidang,
            ];
            // $idta = $ta->ID_TA;
            return view('mhs.sidang', $data);

        }

    }

    // BUAT BIMBINGAN
    public function updateTa(Request $request)
    {
        $validatedData = $request->validate([
            'LEMBAR_PENGESAHAN'  => 'required',
            'LAPORAN_FINAL_TA'       => 'required',
        ]);
        // Lembar Pengesahan
        $validatedData['LEMBAR_PENGESAHAN'] = $request->file('LEMBAR_PENGESAHAN')->getClientOriginalName();
        $file = $request->file('LEMBAR_PENGESAHAN');
        $target_dir = "uploads/LEMBAR_PENGESAHAN"; //lokasi
        $target_file = $target_dir . basename($_FILES["LEMBAR_PENGESAHAN"]["name"]); //tempat lokasi
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //function pemindahan file
        $file->move($target_dir,$file->getClientOriginalName());

        // Laporan FInalTA
        $validatedData['LAPORAN_FINAL_TA'] = $request->file('LAPORAN_FINAL_TA')->getClientOriginalName();
        $file_akhir = $request->file('LAPORAN_FINAL_TA');
        $target_dir_akhir = "uploads/LAPORAN_FINAL_TA"; //lokasi
        $target_file_akhir = $target_dir_akhir . basename($_FILES["LAPORAN_FINAL_TA"]["name"]); //tempat lokasi
        $imageFileType = strtolower(pathinfo($target_file_akhir,PATHINFO_EXTENSION));
        //function pemindahan file
        $file_akhir->move($target_dir_akhir,$file->getClientOriginalName());
        // dd($validatedData['LEMBAR_PENGESAHAN']);
        TugasAkhir::where('mahasiswa_NIM', session()->get('datamahasiswa')->NIM)
        ->update(['LAPORAN_FINAL_TA' => $validatedData['LAPORAN_FINAL_TA'], 'LEMBAR_PENGESAHAN' =>$validatedData['LEMBAR_PENGESAHAN'],'pengajuan_sidang'=> NOW() ]);

        echo "<script> 
        alert('Pengajuan Berhasil, Mohon Tunggu Hingga staff akademik membuatkan jadwal untuk anda');
            document.location.href = '/ajukan-sidang';
        </script>";
        // return redirect('/mahasiswa-bimbingan');
    }

        // Get TA
        public function getJadwal(){
        

            
            $sidang = Jadwalsidang::where('mahasiswa_NIM', session()->get('datamahasiswa')->NIM)->get();
            // dd($sidang);
                $data = [
                    'title' => 'SILOLAVAIR || Dashboard',
                    'datasidang' => $sidang,
                    
                ];
                // $idta = $ta->ID_TA;
                return view('mhs.jadwal', $data);
    

    
        }
}
