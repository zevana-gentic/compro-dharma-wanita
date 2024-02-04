<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['members'] = User::where('role', '!=', 1)->latest()->limit(10)->get();

        return view('admin.dashboard', $data);
    }
}
