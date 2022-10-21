<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bimbingan extends Controller
{
    //
    public function get_bimbingan(){
        $data = [
			'title' => 'SILOLAVAIR || Dashboard',
		];

        return view('mhs.bimbingan', $data);
    }
}
