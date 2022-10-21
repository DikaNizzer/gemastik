<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
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
            'PASSWORD_DOSEN' => 'required|min:6|max:255'
        ]);

        $validatedData['PASSWORD_DOSEN'] = Hash::make($validatedData['PASSWORD_DOSEN']);
        // dd($validatedData);
        Dosen::create($validatedData);
        return redirect('/buat-akun-dosen')->with('success', "New User Successfully Added!");

    }
}
