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
    // Other routes that should use the member footer
});

Route::group(['middleware' => 'setFooterType'], function () {
    Route::get('/members-general', [UserController::class, 'General'])->name('user.members.general');
    Route::get('/members-associate', [UserController::class, 'Associate'])->name('user.members.associate');
    Route::get('/members-regional', [UserController::class, 'Regional'])->name('user.members.regional');

    Route::get('/members', [UserController::class, 'Members'])->name('user.members');
    Route::get('/about', [UserController::class, 'aboutUs'])->name('user.about');
    Route::get('/about-organization-chart', [UserController::class, 'OrganizationChart'])->name('user.organization.chart');
    Route::get('/trail', [UserController::class, 'Trail'])->name('user.trail');

    Route::get('/trail-package', [UserController::class, 'TrailPackage'])->name('user.trail.package');
    Route::get('/trail-details', [UserController::class, 'TrailPackageDetails'])->name('user.trail.details');
   //end trail
   //login
   Route::get('/member-login', [UserController::class, 'Login'])->name('member.login');
   Route::get('/become-a-member', [UserController::class, 'BMember'])->name('become.member');

   Route::post('/members', [UserController::class, 'store'])->name('members.store');
   Route::post('to-become-member', [UserController::class, 'ToBecomeMember'])->name('members.store');

   
});

// Route::prefix('user')->group(function () {

//     member
//     Route::get('/members/{type}', [UserController::class, 'Members'])->name('user.members');
//     Route::get('/members-profile/{type}', [UserController::class, 'MembersProfile'])->name('user.members.profile');
//     Route::get('/members-package/{type}', [UserController::class, 'MembersPackage'])->name('user.members.package');
//     end member

//     trail

// });


Route::middleware('auth','role:admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('admin/member', [AdminController::class, 'AdminMember'])->name('admin.member');
    Route::get('members/create', [AdminMemberController::class, 'create'])->name('members.create');
   

});

Route::middleware('auth','role:member')->group(function () {
    Route::get('member/dashboard', [MemberController::class, 'MemberDashboard'])->name('member.dashboard');
});


require __DIR__.'/auth.php';
