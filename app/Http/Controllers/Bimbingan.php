<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bimbingan extends Controller
{
    //
    public function bimbingan(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard',
		];

        return view('dashboard.bimbingan', $data);
    }
}
