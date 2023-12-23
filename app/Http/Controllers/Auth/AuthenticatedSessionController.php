<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.email'=>'You must enter a real email address!',
            'email.required'=>'The email field is required',
            'password.required'=>'Password field is required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) 
        {
            logger('Successful connection : ' . $request->input('email'));
            Auth::login($user);
            return redirect()->route('profil')->with('success', 'Welcome '.$user->name .' in your account!');
        } 
        else 
        {
            logger('Échec de connexion pour : ' . $request->input('email'));
            return redirect()->route('login')->with('error', 'Incorrect email or password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'You have been successfully logged out!');
    }

    public function showAdminLoginForm()
    {
        return view('admin.admin_login');
    }

    public function adminLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.email'=>'You must enter a real email address!',
            'email.required'=>'The email field is required',
            'password.required'=>'Password field is required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.login')->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password) && $user->role === 'admin') 
        {
            logger('Successful login as admin: ' . $request->input('email'));
            Auth::login($user);
            return redirect()->route('admin.dashboard')->with('success', 'Welcome admin '.$user->name .'!');
        } 
        else 
        {
            logger('Failed to log in as admin for: ' . $request->input('email'));
            return redirect()->route('admin.login')->with('error', 'Incorrect administrator email or password');
        }
    }
    protected function authenticated(Request $request, $user)
    {
        $user->updateLastLogin();

        return redirect()->intended($this->redirectPath());
    }
}