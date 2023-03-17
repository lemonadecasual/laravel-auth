<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }



    public function store(Request $request)
    {

        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gendar' => ['required'],
            'year' => ['required', 'integer', 'min:1900'],
            'month' => ['required'],
            'day' => ['required', 'integer', 'min:1', 'max:31'],
            'wallet' => ['required']
        ]);

        $user = User::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "gendar" => $request->gendar,
            "email" => $request->email,
            "year" => $request->year,
            "month" => $request->month,
            "day" => $request->day,
            "wallet" => $request->wallet,
        ]);

        Auth::login($user);

        return redirect()->intended('/');
    }


    public function wallet_exists(Request $request)
    {
        $wallet = $request->wallet;
        $user = User::where('wallet', $wallet)->first();
        if ($user) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function get_user(Request $request)
    {
        $wallet = $request->wallet;
        $user = User::where('wallet', $wallet)->first();
        return response()->json($user);
    }
}
