<?php

namespace App\Http\Controllers;

use App\Models\Paa;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

// LOGINPAA
    public function authenticate(Request $request)
        {

            $paa = Paa::where('EMAIL_PAA', $request->email)->first();
            // $santri = DB::table('santri')->where('EMAIL', $request->EMAIL)->get();

            if($paa == null){
                return back()->with('logerror', 'Login Gagal');
            }else{
                if(password_verify($request->password, $paa->PASSWORD)){
                    // if(Auth::loginUsingId($santri->IDSANTRI)){
                        Auth::guard('paa')->login($paa);
                        $request->session()->regenerate();
                        $request->session()->put('datapaa', $paa);
                        return redirect()->intended('paa');
                    // }
                }else{
                    return back()->with('logerror', 'Login Gagal');
                }
            }
        }
// LOGOUT PAA
        public function logoutPaa(){

            Auth::logout();

            request()->session()->invalidate();

            request()->session()->regenerateToken();
            session()->forget('datapaa');

            return redirect('/');
        }

        // LOGINDOSEN
    public function authenticateDosen(Request $request)
    {

        $dosen = Dosen::where('EMAIL_DOSEN', $request->email)->first();
        // $santri = DB::table('santri')->where('EMAIL', $request->EMAIL)->get();

        if($dosen == null){
            return back()->with('logerror', 'Login Gagal');
        }else{
            if(password_verify($request->password, $dosen->PASSWORD_DOSEN)){
                // if(Auth::loginUsingId($santri->IDSANTRI)){
                    Auth::guard('paa')->login($dosen);
                    $request->session()->regenerate();
                    $request->session()->put('datadosen', $dosen);
                    return redirect()->intended('dosen');
                // }
            }else{
                return back()->with('logerror', 'Login Gagal');
            }
        }
    }

    // LOGOUT Dosen
    public function logoutDosen(){

        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();
        session()->forget('datadosen');

        return redirect('/');
    }

    // LOGINDOSEN
    public function authenticateMahasiswa(Request $request)
    {

        $mahasiswa = Mahasiswa::where('EMAIL_MHS', $request->email)->first();
        // $santri = DB::table('santri')->where('EMAIL', $request->EMAIL)->get();
        $dospem = Dosen::where('NIP', $mahasiswa->dosen_NIP)->first();
        if($mahasiswa == null){
            return back()->with('logerror', 'Login Gagal');
        }else{
            if(password_verify($request->password, $mahasiswa->PASSWORD_MHS)){
                // if(Auth::loginUsingId($santri->IDSANTRI)){
                    Auth::guard('mahasiswa')->login($mahasiswa);
                    $request->session()->regenerate();
                    $request->session()->put('datamahasiswa', $mahasiswa);
                    $request->session()->put('dospem', $dospem);
                    return redirect()->intended('mahasiswa');
                // }
            }else{
                return back()->with('logerror', 'Login Gagal');
            }
        }
    }

        // LOGOUT Dosen
        public function logoutMahasiswa(){

            Auth::logout();
    
            request()->session()->invalidate();
    
            request()->session()->regenerateToken();
            session()->forget('datamahasiswa');
    
            return redirect('/');
        }

}
