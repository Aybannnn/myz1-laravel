<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminpage()
    {
        return view('admin/admin-homepage');
    }
}
