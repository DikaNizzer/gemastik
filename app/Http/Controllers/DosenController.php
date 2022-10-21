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
        return view('dosen.mahasiswa', compact('mahasiswa', 'data'));
        // return view('dosen.index', $data);
    }

}
