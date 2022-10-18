<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home(){
        $data = [
			'title' => 'Apply Us',
		];

        return view('home', $data);
    }
}
