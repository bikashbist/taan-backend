<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function MemberDashboard(){
        return view('member.member_dashboard');
    }
 
}
