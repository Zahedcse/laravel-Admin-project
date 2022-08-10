<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        if (session()->has('username')) {
            return redirect()->to('/');
        }
        return view('backend.auth.login');
    }
    public function registration()
    {
        return view('backend.auth.register');
    }
    public function regstore(Request $request, User $user)
    {
        $user->fill($request->post())->save();
        return redirect()->to('/login')->with('msg', 'Account Creation Successfull');
    }
    
    public function loginstore(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $users = User::where('email', $email)
                    ->where('password', $password)
                    ->first();
        // dd($users);
        if ($users) {
            $name = $users->name;
            $request->session()->put('username', $name);
            return redirect()->to('/');
        } else {
            return redirect()->back()->with('msg', 'Invalid Username or Password');
        }
    }
    public function logout()
    {
        Session::flush('username');
        // Auth::logout();
        return redirect('login');
    }
}
