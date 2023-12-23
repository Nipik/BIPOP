<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('manageUsers', User::class);

        $users = User::all();

        return view('admin.index', compact('users'));
    }
    public function edit(User $user)
    {
        $this->authorize('manageUsers', User::class);

        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('manageUsers', User::class);

        $validator = Validator::make($request->all(), [
            'name' => 'alpha',
            'email' => 'email|unique:users,email,' . $user->id,
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ], [
            'name.alpha' => 'The name must contain only alphabetical letters',
            'email.email' => 'You must enter a real email address',
            'email.unique' => 'This email address is already used by another user',
            'image.image' => 'The file must be an image',
            'image.mimes' => 'The file must be of type: png, jpg, jpeg',
            'image.max' => 'The file must not exceed: 2048 kilobytes',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.edit', $user)->withErrors($validator)->withInput();
        }

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];
        //dump('Before update', $data);
       
        $this->handleImageUpload($request, $user, $data);

        $user->update($data);
        //dump('Reached here after update');
        return redirect()->route('admin.index')->with('success', 'User updated successfully.');
    }

    protected function handleImageUpload(Request $request, User $user, array &$data)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('image/profile_images', $imageName, 'public');
            $data['image'] = $path;
        }
    }
    public function destroy(User $user)
    {
        $this->authorize('manageUsers', User::class);

        return redirect()->route('admin.confirm-delete', $user);
    }

    public function confirmDelete(User $user)
    {
        $this->authorize('manageUsers', User::class);

        return view('admin.confirm-delete', compact('user'));
    }
}
