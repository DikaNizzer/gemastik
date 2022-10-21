<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('paa.create', $data);
    }
}
