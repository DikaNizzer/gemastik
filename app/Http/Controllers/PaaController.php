<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
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
}
