<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Taan Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('admin/') }}assets/img/taan-logo.jpg" type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="{{ asset('admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('admin/assets/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/kaiadmin.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets/css/admin.css') }}" /> --}}
    {{-- member css --}}
    <link rel="stylesheet" href="{{ asset('member/assets/css/member.css') }}" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="#" class="logo">
                        <h4 class="text-white"> <img src="{{ asset('member/assets/images/logo.svg') }}"
                                alt="logo"></h4>
                    </a>

                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right "></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left "></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt "></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner position-relative">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item">
                            <a href="#dashboard">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                                
                            </a>
                           
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#trail">
                                <i class="fas fa-layer-group"></i>
                                <p>Trail</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="trail">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="trail/create.html">
                                            <span class="sub-item">Trail Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Trail Package</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#dashboard">
                             <i class="fas fa-layer-group"></i>
                                <p>Packages</p>
                                
                            </a>
                           
                        </li>
                        <li class="nav-item">
                            <a href="#dashboard">
                             <i class="fas fa-layer-group"></i>
                                <p>Gallery</p>
                                
                            </a>
                           
                        </li>
                        <li class="nav-item">
                            <a href="#dashboard">
                             <i class="fas fa-layer-group"></i>
                                <p>About</p>
                                
                            </a>
                           
                        </li>


                    </ul>
                   
                </div>
                <div class="porfile-member p-4 mb-4">
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #3E97FF;background-image:url('/keen/demo1/assets/media/svg/shapes/widget-bg-1.png')">
                 
                        <div class="card-header pt-5">
                            <div class="card-title d-flex flex-column">   
    
                                <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">6969</span>
                               
                                <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Taan unique Number</span>             
                             
                            </div>
                              
                        </div>
                     
                        <div class="card-body d-flex align-items-end pt-0">
                 
                            <div class="d-flex align-items-center flex-column mt-3 w-100">
                                <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                    <span>43 Trail Package</span>
                                    <span>72%</span>
                                </div>
                    
                                <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                    <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                       
                        </div>
                   
                    </div>
                </div>
                
            </div>
           
          
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('admin/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand"
                                class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">

                        <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                    aria-labelledby="messageDropdown">
                                    <li>
                                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                                            Messages
                                            <a href="#" class="small">Mark all as read</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="{{ asset('admin/assets/img/jm_denis.jpg') }}"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jimmy Denis</span>
                                                        <span class="block"> How are you ? </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="{{ asset('admin/assets/img/chadengle.jpg') }}"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Chad</span>
                                                        <span class="block"> Ok, Thanks ! </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="{{ asset('admin/assets/img/mlane.jpg') }}"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jhon Doe</span>
                                                        <span class="block">
                                                            Ready for the meeting today...
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="{{ asset('admin/assets/img/talha.jpg') }}"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Talha</span>
                                                        <span class="block"> Hi, Apa Kabar ? </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all messages<i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification">4</span>
                                </a>
                                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                    <li>
                                        <div class="dropdown-title">
                                            You have 4 new notification
                                        </div>
                                    </li>
                                    <li>
                                        <div class="notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                <a href="#">
                                                    <div class="notif-icon notif-primary">
                                                        <i class="fa fa-user-plus"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block"> New user registered </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-icon notif-success">
                                                        <i class="fa fa-comment"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Rahmad commented on Admin
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="{{ asset('admin/assets/img/profile2.jpg') }}"
                                                            alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Reza send messages to you
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-icon notif-danger">
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block"> Farrah liked Admin </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all notifications<i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fas fa-layer-group"></i>
                                </a>
                                <div class="dropdown-menu quick-actions animated fadeIn">
                                    <div class="quick-actions-header">
                                        <span class="title mb-1">Quick Actions</span>
                                        <span class="subtitle op-7">Shortcuts</span>
                                    </div>
                                    <div class="quick-actions-scroll scrollbar-outer">
                                        <div class="quick-actions-items">
                                            <div class="row m-0">
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-danger rounded-circle">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </div>
                                                        <span class="text">Calendar</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-warning rounded-circle">
                                                            <i class="fas fa-map"></i>
                                                        </div>
                                                        <span class="text">Maps</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-info rounded-circle">
                                                            <i class="fas fa-file-excel"></i>
                                                        </div>
                                                        <span class="text">Reports</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-success rounded-circle">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <span class="text">Emails</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-primary rounded-circle">
                                                            <i class="fas fa-file-invoice-dollar"></i>
                                                        </div>
                                                        <span class="text">Invoice</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="#">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-secondary rounded-circle">
                                                            <i class="fas fa-credit-card"></i>
                                                        </div>
                                                        <span class="text">Payments</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="{{ asset('admin/assets/img/profile.jpg') }}" alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">Hizrian</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="{{ asset('admin/assets/img/profile.jpg') }}"
                                                        alt="image profile" class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4>Hizrian</h4>
                                                    <p class="text-muted">hello@example.com</p>
                                                    <a href="profile.html"
                                                        class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>


            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row ">
                        <div>
                            <h3 class="fw-bold mb-3">Member Dashboard</h3>
                            {{-- <h6 class="op-7 mb-2">Welcome! Sandip</h6> --}}
                        </div>
                        {{-- <div class="ms-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                            <a href="#" class="btn btn-primary btn-round">Add Member</a>
                        </div> --}}
                    </div>
                    <div class="align-items-center row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="pt-20 rounded-top member-profile">
                            </div>
                            <div class="bg-white rounded-bottom smooth-shadow-sm ">
                                <div class="d-flex align-items-center justify-content-between pt-4 pb-6 px-4">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="avatar-xxl avatar-indicators avatar-online me-2 position-relative d-flex justify-content-end align-items-end mt-n10">
                                            <img src="https://dash-ui-admin-template.vercel.app/images/avatar/avatar-1.jpg"
                                                alt=""
                                                class="avatar-xxl rounded-circle border border-4 border-white-color-40">
                                            <a class="position-absolute top-0 right-0 me-2" data-bs-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Verified"
                                                href="/pages/profile#!">
                                                <img src="https://dash-ui-admin-template.vercel.app/images/svg/checked-mark.svg"
                                                    alt="" height="30" width="30" class="">
                                            </a>
                                        </div>
                                        <div class="lh-1">
                                            <h2 class="mb-0">Jitu Chauhan<a class="text-decoration-none"
                                                    data-bs-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Beginner" href="/pages/profile#!"></a></h2>
                                            <p class="mb-0 d-block">@imjituchauhan</p>
                                        </div>
                                    </div>
                                    <div><a class="btn btn-outline-primary d-none d-md-block"
                                            href="/pages/profile#">Edit Profile</a></div>
                                </div>
                                <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active"
                                            href="/pages/profile#">Overview</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/pages/profile#">Project</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/pages/profile#">Files</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/pages/profile#">Teams</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/pages/profile#">Followers</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/pages/profile#">Activity</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

             
                    <div class="row mt-4">
                        <div class="mb-6 col-xl-6 col-lg-12 col-md-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">About Us</h4><span
                                        class="text-uppercase fw-medium text-dark fs-5 ls-2">Bio</span>
                                    <p class="mt-2 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Suspen disse var ius enim in eros elementum tristique. Duis cursus, mi quis
                                        viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.
                                    </p>
                                    <div class="row">
                                        <div class="mb-5 col-12">
                                            <h6 class="text-uppercase fs-5 ls-2">Position</h6>
                                            <p class="mb-0">Theme designer at Bootstrap.</p>
                                        </div>
                                        <div class="mb-5 col-6">
                                            <h6 class="text-uppercase fs-5 ls-2">Phone </h6>
                                            <p class="mb-0">+32112345689</p>
                                        </div>
                                        <div class="mb-5 col-6">
                                            <h6 class="text-uppercase fs-5 ls-2">Date of Birth </h6>
                                            <p class="mb-0">01.10.1997</p>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-uppercase fs-5 ls-2">Email </h6>
                                            <p class="mb-0">Dashui@gmail.com</p>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-uppercase fs-5 ls-2">Location</h6>
                                            <p class="mb-0">Ahmedabad, India</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6 col-xl-6 col-lg-12 col-md-12 col-12">
                            <div class="card card-with-package">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Projects Packages</h4>
                                    <div class="d-md-flex justify-content-between align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1 bg-white"><img
                                                        src="{{ asset('member/assets/images/camp.jpg') }}" alt=""
                                                        class=""></div>
                                            </div>
                                            <div class="ms-3 ">
                                                <h5 class="mb-1"><a class="text-inherit"
                                                        href="/pages/profile#">Everest Base Camp Trek</a></h5>
                                                <p class="mb-0 fs-5 text-muted">Package Descriptions</p>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="d-md-flex justify-content-between align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1 bg-white"><img
                                                        src="{{ asset('member/assets/images/camp.jpg') }}" alt=""
                                                        class=""></div>
                                            </div>
                                            <div class="ms-3 ">
                                                <h5 class="mb-1"><a class="text-inherit"
                                                        href="/pages/profile#">Bhutan Highlights Tours</a></h5>
                                                <p class="mb-0 fs-5 text-muted">Package Descriptions</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="d-md-flex justify-content-between align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1 bg-white"><img
                                                        src="{{ asset('member/assets/images/camp.jpg') }}" alt=""
                                                        class=""></div>
                                            </div>
                                            <div class="ms-3 ">
                                                <h5 class="mb-1"><a class="text-inherit"
                                                        href="/pages/profile#">Bhutan Highlights Tours</a></h5>
                                                <p class="mb-0 fs-5 text-muted">Package Descriptions</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="d-md-flex justify-content-between align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1 bg-white"><img
                                                        src="{{ asset('member/assets/images/camp.jpg') }}" alt=""
                                                        class=""></div>
                                            </div>
                                            <div class="ms-3 ">
                                                <h5 class="mb-1"><a class="text-inherit"
                                                        href="/pages/profile#">Bhutan Highlights Tours</a></h5>
                                                <p class="mb-0 fs-5 text-muted">Package Descriptions</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="d-md-flex justify-content-between align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1 bg-white"><img
                                                        src="{{ asset('member/assets/images/camp.jpg') }}" alt=""
                                                        class=""></div>
                                            </div>
                                            <div class="ms-3 ">
                                                <h5 class="mb-1"><a class="text-inherit"
                                                        href="/pages/profile#">Bhutan Highlights Tours</a></h5>
                                                <p class="mb-0 fs-5 text-muted">Package Descriptions</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Softech
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Help </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Licenses </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        2024, made with <i class="fa fa-heart heart text-danger"></i> by
                        <a href="#">Softech</a>
                    </div>
                    <div>
                        Distributed by
                        <a target="_blank" href="#">Softech</a>.
                    </div>
                </div>
            </footer>
        </div>


    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('admin/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('admin/assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('admin/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('admin/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugin/jsvectormap/world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('admin/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('admin/assets/js/kaiadmin.min.js') }}"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{ asset('admin/assets/js/setting-demo.js') }}"></script>
    <script src="{{ asset('admin/assets/js/demo.js') }}"></script>

    <script>
        $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#177dff",
            fillColor: "rgba(23, 125, 255, 0.14)",
        });

        $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#f3545d",
            fillColor: "rgba(243, 84, 93, .14)",
        });

        $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#ffa534",
            fillColor: "rgba(255, 165, 52, .14)",
        });
    </script>
</body>

</html>
