<?php
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminMemberController;
use App\Http\Controllers\Member\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index' , ['footerType' => 'main']);
});

// Route::get('/admin-part', function () {
//     return view('admin.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::group(['middleware' => 'setFooterType'], function () {
  
    Route::get('/members-profile/{type}', [UserController::class, 'MembersProfile'])->name('user.members.profile');
    Route::get('/members-package/{type}', [UserController::class, 'MembersPackage'])->name('user.members.package');

});

Route::group(['middleware' => 'setFooterType'], function () {
    Route::get('/members-general', [UserController::class, 'General'])->name('user.members.general');
    Route::get('/members-associate', [UserController::class, 'Associate'])->name('user.members.associate');
    Route::get('/members-regional', [UserController::class, 'Regional'])->name('user.members.regional');

    Route::get('/members', [UserController::class, 'Members'])->name('user.members');
    Route::get('/about', [UserController::class, 'aboutUs'])->name('user.about');
    Route::get('/to-become-a-member', [UserController::class, 'ToMember'])->name('user.become-member');
    Route::get('/team-profile', [UserController::class, 'TeamProfile'])->name('user.team-profile');
    Route::get('/gallery', [UserController::class, 'Gallery'])->name('user.gallery');
    Route::get('/gallery-detail', [UserController::class, 'GalleryDetails'])->name('gallery-detail');
    Route::get('/video-gallery', [UserController::class, 'VideoGallery'])->name('user.video-gallery');
    Route::get('/news-events', [UserController::class, 'NewsEvents'])->name('user.news_event');
    Route::get('/news-events-details', [UserController::class, 'NewsEventsDetails'])->name('user.news.details');
    Route::get('/video-newsletter', [UserController::class, 'NewsLetter'])->name('user.newsletter');
    Route::get('/notification', [UserController::class, 'Notification'])->name('user.notification');
    Route::get('/publication', [UserController::class, 'Publication'])->name('user.publication');
    Route::get('/press-release', [UserController::class, 'PressRelease'])->name('user.press-release');
    Route::get('/blog', [UserController::class, 'Blog'])->name('user.blog');
    Route::get('/download', [UserController::class, 'Download'])->name('user.download');
    Route::get('/rescue', [UserController::class, 'Rescue'])->name('user.rescue');
    Route::get('/traking-fee', [UserController::class, 'TrakingFee'])->name('user.fee');
    Route::get('/traking--permit-fee', [UserController::class, 'TrakingPermitFee'])->name('user.treking-permit-fee');

    Route::get('/previous-committees', [UserController::class, 'PrevCommittee'])->name('user.previous-committees');
    Route::get('/former-president', [UserController::class, 'FormerPresident'])->name('user.former-president');
    Route::get('/executive-committee', [UserController::class, 'ExecutiveCommittee'])->name('user.executive-committee');
    Route::get('/departments', [UserController::class, 'Departments'])->name('user.departments');

    Route::get('/profile', [UserController::class, 'Profile'])->name('user.profile');
    
    Route::get('/tims-overview', [UserController::class, 'TimsOverview'])->name('user.tims-overview');
    

    Route::get('/teams', [UserController::class, 'Teams'])->name('user.teams');
    Route::get('/about-organization-chart', [UserController::class, 'OrganizationChart'])->name('user.organization.chart');
    Route::get('/trail', [UserController::class, 'Trail'])->name('user.trail');
    Route::get('/top-destination', [UserController::class, 'TopDestination'])->name('top.destination');
    
    Route::get('/trail-package', [UserController::class, 'TrailPackage'])->name('user.trail.package');
    Route::get('/trail-details', [UserController::class, 'TrailPackageDetails'])->name('user.trail.details');
    Route::get('/msg-chairman', [UserController::class, 'MsgChairman'])->name('user.msg.chairman');
   //end trail
   //login
   Route::get('/member-login', [UserController::class, 'Login'])->name('member.login');
   Route::get('/forget-password', [UserController::class, 'ForgetPassword'])->name('member.forget.password');
   Route::get('/become-a-member', [UserController::class, 'BMember'])->name('become.member');
   Route::get('/faq', [UserController::class, 'Faq'])->name('user.faq');
   Route::post('/members', [UserController::class, 'store'])->name('members.store');
   Route::post('to-become-member', [UserController::class, 'ToBecomeMember'])->name('members.store');
});

Route::middleware('auth','role:admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('admin/member', [AdminController::class, 'AdminMember'])->name('admin.member');
    Route::get('members/create', [AdminMemberController::class, 'create'])->name('members.create');
});

Route::middleware('auth','role:member')->group(function () {
    Route::get('member/dashboard', [MemberController::class, 'MemberDashboard'])->name('member.dashboard');
});


require __DIR__.'/auth.php';
