<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DWPMemberController extends Controller
{
    public function dwp_member_list(Request $request)
    {
        $member = User::where('role', '!=','1');

        if ($request->q) {
            $member = $member->where('name',  'LIKE', '%' . $request->q . '%')
                            ->orWhere('email', 'LIKE', '%'. $request->q . '%');
        }

        $data['members'] = $member->paginate(10)->withQueryString();

        return view('admin.dwp-member-list', $data);
    }

    public function dwp_member_detail($id)
    {
        $data['member'] = User::where('role', '!=','1')->find($id);
        return view('admin.dwp-member-detail', $data);
    }
}
