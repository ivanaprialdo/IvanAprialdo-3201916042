<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',  [
            'title' =>  'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'phone' =>'required',
            'password'  => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

        public function logout()
        {
            Auth::logout();
 
            request()->session()->invalidate();
 
            request()->session()->regenerateToken();
 
            return redirect('/');
        }
        public function lupapassword()
        {
            return view('login.lupapassword',  [
                'title' =>  'Ubah Pas',
                'active' => 'login'
            ]);
        }
        public function lupapasswordproses(Request $request)
        {
            $user= User::where('phone', $request->phone)->first();
            if ($user=='') {
                return redirect()->route('lupapassword')->with('loginError', 'No Whatsapp tidak terdaftar!');
            }else{
                
                $updatedate=date('dmy', strtotime($user->updated_at));
                $newpassword=$user->username.$updatedate;
                $send =  $this->sendpassword($user->phone, $newpassword);
                $update = $user->update([
                    'password'=>bcrypt($newpassword)
                ]);

                if ($send == false) {
                    return redirect()->route('login')->with('loginError', 'Server dalam masalah');
                }else{
                    return redirect()->route('login')->with('succes', 'Password Berhasil Diubah');
                }
               
            
              
                
                
            }
          
        }
        public function sendpassword($phone, $password)
        {
            try {
                $message= "
Password baru anda adalah $password
Jangan Bagikan Pesan Ini Kepada Siapapun!!!
            ";
            $url='http://localhost:3000/send-message';
            $clien= new Client();
            $hasil= $clien->request('POST', $url, [
                'form_params' => [
                    'number' => $phone,
                    'message' => $message
                ]
                ]);
                return $hasil->getBody()->getContents();
            } catch (\Throwable $th) {
                return false;
               
               
            }
            
        }
}
