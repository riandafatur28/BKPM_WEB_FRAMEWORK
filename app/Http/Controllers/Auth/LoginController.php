<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        // Cek apakah input username berupa email atau username
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Data login yang akan dicek
        $login = [
            $loginType => $request->username,
            'password' => $request->password
        ];

        // Gunakan Auth Facade untuk melakukan login
        if (Auth::attempt($login)) {
            return redirect()->route('home');
        }

        // Redirect kembali ke login jika gagal
        return redirect()->route('login')->with(['error' => 'Username atau Password salah!']);
    }
}
