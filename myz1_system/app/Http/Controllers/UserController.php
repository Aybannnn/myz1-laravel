<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('useremail');
        $password = $request->input('userpassword');

        $user = User::where('pemail', $email)->where('ppassword', $password)->first();

        if ($user) {
            $utype = $user->usertype;

            if ($utype == 'p') {
                // TODO: Use Eloquent for queries
                $checker = User::where('pemail', $email)->where('ppassword', $password)->first();

                if ($checker) {
                    // Patient dashboard
                    Session::put('user', $email);
                    Session::put('usertype', 'p');
                    return redirect()->route('user/user-homepage');
                } else {
                    return redirect()->back()->with('error', 'Wrong credentials: Invalid email or password');
                }
            }
        }
    }
    public function userHomepage()
{
    return view('user-homepage');
}

}

//             } elseif ($utype == 'a') {
//                 // TODO: Use Eloquent for queries
//                 $ch$checker = User::where('aemail', $email)->where('apassword', $password)->first();

//                 if ($checker) {
//                     // Admin dashboard
//                     Session::put('user', $email);
//                     Session::put('usertype', 'a');
//                     return redirect('/admin/index');
//                 } else {
//                     return redirect()->back()->with('error', 'Wrong credentials: Invalid email or password');
//                 }
//             } elseif ($utype == 'd') {
//                 // TODO: Use Eloquent for queries
//                 $ch$checker = User::where('docemail', $email)->where('docpassword', $password)->first();

//                 if ($checker) {
//                     // Doctor dashboard
//                     Session::put('user', $email);
//                     Session::put('usertype', 'd');
//                     return redirect('/doctor/index');
//                 } else {
//                     return redirect()->back()->with('error', 'Wrong credentials: Invalid email or password');
//                 }
//             }
//         } else {
//             return redirect()->back()->with('error', 'We can\'t find any account for this email.');
//         }
//     }
// }
