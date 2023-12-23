<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create(Request $request)
    {
        return view('auth.inscription');
    }

    protected function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|alpha',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
        ], [
            'name.required' => 'The name field is required',
            'name.alpha' => 'The name must contain only alphabetical letters',
            'email.email' => 'You must use a real email address',
            'email.unique' => 'The email you used already exists',
            'email.required' => 'The email field is required',
            'password.required' => 'Password field is required',
            'password.string' => 'Password must contain characters',
            'password.min' => 'Password must contain at least 8 characters',
            'image.required' => 'The image field is required',
            'image.image' => 'The file must be an image',
            'image.mimes' => 'The file must be of type: jpeg,png,jpg',
            'image.max' => 'The file must not exceed: 2048 kilobytes',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('inscription')->withErrors($validator)->withInput();
        }
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
        }
    
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'image' => $imagePath,
        ]);
    
        return redirect()->route('login')->with('success', 'Successful registration. Please log in!');
    }
}
