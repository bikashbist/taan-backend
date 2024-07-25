<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;

class AdminMemberController extends Controller
{
    public function store(MemberRequest $request)
    {
        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'pan' => $request->pan,
            'company_number' => $request->companyNumber,
        ]);

        return redirect()->back()->with('success', 'Member created successfully');
    }
}
