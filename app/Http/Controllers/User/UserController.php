<?php

namespace App\Http\Controllers\User;
use App\Models\BecomeMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function aboutUs()
    {
        return view('user.about.about' );
    }
    
    public function OrganizationChart()
    {
        return view('user.about.organization-chart' );
    }

    public function Members(){
        return view('user.member.member');
    }
    public function MembersProfile(Request $request, $type){
        return view('user.member.member-profile' );
    }
    public function MembersPackage(Request $request, $type){
        return view('user.member.member-package-details');
    }
    public function General(){
        return view('user.member.general');
    }
    public function Associate(){
        return view('user.member.associate');
    }
    public function Regional(){
        return view('user.member.regional');
    }

    
    public function Trail(){
        return view('user.trail.trail' );
    }
    public function TrailPackage(){
        return view('user.trail.package' );
    }
    public function TrailPackageDetails(){
        return view('user.trail.details' );
    }
    public function Login(){
        return view('user.login.login');
    }
    public function BMember(){
        return view('user.apply-for-membership.membership');
    }
    public function ToBecomeMember(Request $request)
    {
        // Add debugging to check if data is received
        logger($request->all());

        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|email|max:255',
            'c_pan' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'c_register' => 'required|file|mimes:pdf,jpg,jpeg,png',
        ]);

        // Check if files are uploaded correctly
        $panPath = $request->file('c_pan')->store('pan_numbers', 'public');
        $registerPath = $request->file('c_register')->store('register_files', 'public');

        BecomeMember::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'pan_number' => $panPath,
            'register_file' => $registerPath,
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
    


    
}
