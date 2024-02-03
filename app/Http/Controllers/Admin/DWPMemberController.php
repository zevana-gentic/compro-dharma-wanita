<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DWPMemberController extends Controller
{
    public function dwp_member_list()
    {
        return view('admin.dwp-member-list');
    }
}
