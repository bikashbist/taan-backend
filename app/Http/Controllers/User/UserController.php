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
    public function ForgetPassword(){
        return view('user.login.forget-password');
    }
    
    public function TopDestination(){
        return view('user.destination.destination');
    }
    public function BMember(){
        return view('user.apply-for-membership.membership');
    }
    public function Faq(){
        return view('user.faq.faq');
    }
    public function Teams(){
        return view('user.about.team');
    }
    
    public function MsgChairman(){
        return view('user.chairman.msg');
    }
    public function ToMember(){
        return view('user.about.to-become-member');
    }
    
    public function TeamProfile(){
        return view('user.about.team-profile');
    }
    public function Gallery(){
        return view('user.other.media.gallery');
    }
    public function GalleryDetails(){
        return view('user.other.media.gallery-detail');
    }
    public function VideoGallery(){
        return view('user.other.media.video');
    }
    public function NewsEvents(){
        return view('user.other.media.news-events');
    }
    public function NewsEventsDetails(){
        return view('user.other.media.details');
    }
    public function NewsLetter(){
        return view('user.other.media.newsletter');
    }
    public function Notification(){
        return view('user.other.media.notification');
    }
    public function Publication(){
        return view('user.other.media.publication');
    }
    public function PressRelease(){
        return view('user.other.media.press-release');
    }
    public function Blog(){
        return view('user.other.media.blog');
    }
    public function Download(){
        return view('user.other.resources.download');
    }
    public function Rescue(){
        return view('user.other.resources.rescue');
    }
    public function TrakingFee(){
        return view('user.other.resources.traking-fee');
    }
    public function TrakingPermitFee(){
        return view('user.other.resources.trekking-permit-fee');
    }
    public function PrevCommittee(){
        return view('user.about.pre-committee');
    }
    public function FormerPresident(){
        return view('user.about.former-president');
    }
    
    public function ExecutiveCommittee(){
        return view('user.about.executive-committee');
    }
    public function Departments(){
        return view('user.about.departments');
    }  public function Profile(){
        return view('user.about.profile');
    }
    public function TimsOverview(){
        return view('user.tims.overview');
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
