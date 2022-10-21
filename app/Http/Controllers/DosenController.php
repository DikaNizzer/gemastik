<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Support\Facades\Hash;


class DosenController extends Controller
{
    public function index(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard Dosen',
		];

        return view('dosen.index', $data);
    }

}
