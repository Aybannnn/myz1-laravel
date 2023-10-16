<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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

        // Retrieve the user based on the email
        $user = User::where('pemail', $request->input('useremail'))->first();

        if ($user && $user->ppassword === $request->input('userpassword')) {
            return redirect()->route('user.userHomepage');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function showUserpage()
    {
        return view('user/user-homepage'); // Assuming your Blade view is named 'user-homepage.blade.php'
    }
}
