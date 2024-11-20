<?php

namespace App\Http\Controllers\Sekda;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['page_title'] = 'Dashboard Sekda';
        $data['members'] = User::where('role', '!=', 1)->latest()->limit(10)->get();
        $data['total_news'] = News::count();
        // $data['total_dwp_member'] = User::where('role', '!=', 1)->count();

        return view('sekda.dashboard', $data);
    }
}
