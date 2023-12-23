<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();
        $activeUsers = User::where('is_active', true)->count();
        $inactiveUsers = User::where('is_active', false)->count();
        $inactiveUsers = $totalUsers - $activeUsers;
        $rolesDistribution = Role::withCount('users')->get();
        $lastLogin = auth()->user()->last_login;
        $userName = auth()->user()->name;
        return view('admin.admin_dashboard', compact('totalUsers', 'activeUsers', 'inactiveUsers', 'rolesDistribution' , 'lastLogin', 'userName'));
    }
    
}
