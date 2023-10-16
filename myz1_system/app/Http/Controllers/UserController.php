<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); 
    }

    public function login(Request $request)
    {
        // Validate the login data
        $request->validate([
            'useremail' => 'required|email',
            'userpassword' => 'required',
        ]);

        // Check patient table
        $user = User::where('pemail', $request->input('useremail'))->first();

        // Check admin table if not found in the patient table
        $user = $user ?? Admin::where('aemail', $request->input('useremail'))->first();

        if ($user && $user->ppassword === $request->input('userpassword')) {
            return redirect()->route('user.userHomepage');
        } else if ($user && $user->apassword === $request->input('userpassword')) {
            return redirect()->route('admin.adminHomepage');
        }

    return redirect()->back()->with('error', 'Invalid credentials. Please try again');
}

    public function showUserpage()
    {
        return view('user/user-homepage'); // Assuming your Blade view is named 'user-homepage.blade.php'
    }
    public function showAdminpage()
    {
        return view('admin/admin-homepage');
    }
}
