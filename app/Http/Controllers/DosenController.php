<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;


class DosenController extends Controller
{
    public function index(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard Dosen',
		];

        return view('dosen.index', $data);
    }


    public function getMahasiswa(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard Dosen',
		];

        $mahasiswa = Mahasiswa::where('dosen_NIP',session()->get('datadosen')->NIP)->get();
        // dd($mahasiswa->tugas_akhirs);
        // foreach ($mahasiswa as $comment){ 
        //     dd($comment->JUDUL_TA);
        // }
        return view('dosen.mahasiswa', compact('mahasiswa', 'data'));
        // return view('dosen.index', $data);
    }

    public function getTA(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard Dosen',
		];

        $mahasiswa = Mahasiswa::where('dosen_NIP',session()->get('datadosen')->NIP)->has('tugas_akhirs')->get();
        return view('dosen.pengajuan-ta', compact('mahasiswa', 'data'));
        // return view('dosen.index', $data);
    }

    public function updateStatus($idta, $status){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard Dosen',
		];

        // var_dump($idta, $status);
        TugasAkhir::where('ID_TA', $idta)
        ->update(['STATUS_TA' => $status]);

        return redirect('/pengajuan-ta');
        // return view('dosen.index', $data);
    }

    public function taAcc(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard Dosen',
		];

        // $mahasiswa = Mahasiswa::where('dosen_NIP',session()->get('datadosen')->NIP)->where('')->has('tugas_akhirs')->where()->get();
        $mahasiswa = Mahasiswa::where('dosen_NIP',session()->get('datadosen')->NIP)->with(['tugas_akhirs'=>function($query){
            $query->where('STATUS_TA' , '=', '1');
          }])->get();

        //   dd($mahasiswa);
        return view('dosen.ta', compact('mahasiswa', 'data'));
        // return view('dosen.index', $data);
    }

}
