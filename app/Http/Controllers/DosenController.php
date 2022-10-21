<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
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

}
