<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\TugasAkhir;
use App\Models\Jadwalsidang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;


class PaaController extends Controller
{
    public function index(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard PAA',
		];

        return view('paa.index', $data);
    }

    public function create(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard PAA',
		];

        return view('paa.create', [
            'data' => $data,
            'dosens' =>Dosen::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIP' => 'required|numeric|unique:dosens',
            'NAMA_DOSEN' => 'required',
            'EMAIL_DOSEN' => 'required|email:dns|unique:dosens',
            'NO_TLP_DOSEN' => 'required|unique:dosens',
            'ALAMAT_DOSEN' => 'required',
            'PASSWORD_DOSEN' => 'required|min:5|max:255'
        ]);

        $validatedData['PASSWORD_DOSEN'] = Hash::make($validatedData['PASSWORD_DOSEN']);
        // dd($validatedData);
        Dosen::create($validatedData);
        return redirect('/buat-akun-dosen')->with('success', "New User Successfully Added!");
    }

    public function createMhs(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard PAA',
		];

        return view('paa.createMhs', [
            'data' => $data,
            'dosens' =>Dosen::all(),
            'mahasiswas' => Mahasiswa::all()
        ]);
    }

    public function storeMhs(Request $request)
    {
        $validatedData = $request->validate([
            'NIM' => 'required|numeric|unique:mahasiswas',
            'dosen_NIP' => 'required|numeric',
            'NAMA_MHS' => 'required',
            'EMAIL_MHS' => 'required|email:dns|unique:mahasiswas',
            'NO_TLP_MHS' => 'required|unique:mahasiswas',
            'ALAMAT_MHS' => 'required',
            'PASSWORD_MHS' => 'required|min:5|max:255'
        ]);
        $validatedData['PASSWORD_MHS'] = Hash::make($validatedData['PASSWORD_MHS']);
        // dd($validatedData);
        Mahasiswa::create($validatedData);
        return redirect('/buat-akun-mhs')->with('success', "New User Successfully Added!");

    }

    public function getSidang(){
        

        // Cek Sudah Mengajukan TA Belum
        // $mahasiswa = TugasAkhir::whereNotNull('LAPORAN_FINAL_TA')->where('STATUS_TA', 1)->get();
        $mahasiswa = Mahasiswa::with(['tugas_akhirs'=>function($query){
            $query->where('STATUS_TA' , '=', '1')->whereNotNull('LAPORAN_FINAL_TA');
          }])->get();
        //   dd($mahasiswa);
        // Cek Jumlah Bimbingan
        foreach($mahasiswa as $ta){
                
        }
        
        // dd($jumlahBimbingan);
        // $sidang = Jadwalsidang::where('mahasiswa_NIM', session()->get('datamahasiswa')->NIM)->get();
       

            $data = [
                'title' => 'SILOLAVAIR || Dashboard',
                // 'datasidang' => $sidang,
                'lembarPengesahan' => $ta->LEMBAR_PENGESAHAN,
                'laporanAkhir' => $ta->LAPORAN_FINAL_TA,
                'tanggal' => $ta->pengajuan_sidang,
            ];
            $dosen = Dosen::all();
            return view('paa.sidang', compact('data', 'mahasiswa', 'dosen'));

        

    }

    public function createJadwal(Request $request)
    {
        $validatedData = $request->validate([
            'mahasiswa_NIM' => 'required',
            'WAKTU_SIDANG' => 'required',
            'DOSEN_PENGUJI' => 'required',
            'STATUS_SIDANG' => 'required',

        ]);
        // dd($validatedData);
        Jadwalsidang::create($validatedData);
        return redirect('/paa-sidang');

    }

    public function getJadwal(){
        


        $mahasiswa = Mahasiswa::with('jadwalsidangs')->get();
        //   dd($mahasiswa);


            $data = [
                'title' => 'SILOLAVAIR || Dashboard',

            ];
            $dosen = Dosen::all();
            return view('paa.jadwal', compact('data', 'mahasiswa' ));


        

    }
}
