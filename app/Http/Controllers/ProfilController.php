<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function show()
    {
        $user = Auth::user(); 
        return view('auth.profil', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('auth.edit-profile', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::find($id);

        if ($user) {
            $user->name = $request->input('name');
            $user->email = $request->input('email');

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('image', 'public');

                if ($user->image) {
                    Storage::disk('public')->delete($user->image);
                }

                $user->image = $imagePath;
            }

            $user->save();

            return redirect()->route('profil')->with('success', 'Profile updated successfully!');
        }

        return redirect()->route('profil')->with('error', 'Profile not found');
     }
    public function delete()
    {
        $user = Auth::user();

        if ($user) {
            User::destroy($user->id);
            Auth::logout();
            return redirect()->route('home')->with('success', 'Profile deleted successfully!');
        }

        return redirect()->route('profil')->with('error', 'Profile not found!');
    }

    public function destroy()
    {
        return view('auth.confirm-delete');
    }

}
