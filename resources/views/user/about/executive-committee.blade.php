@extends('user.user_dashboard')
@section('content')

    <section class="about-us ">
        <div class="section-bg-banner">
            <div class="hero-bg">
                <img src="{{asset('user/images/layout-img/page-title.webp')}}"  alt="bg">
            </div>
            <div class="container">
               <div class="section-hero-title">
                <p class="text-white"> Welcome to!</p>
                <h1 class="text-white">Executive Committee</h1>
               </div>
               <img class="page-title-icon" src="{{asset('user/images/layout-img/icon-page-title.png')}}" alt="icon">
            </div>
        </div>
       
    </section>
    <section class="teams py-lg-5 py-3 pb-3">
        <div class="container">
            <div class="teams__details">

                
                <div class="row g-4 justify-content-center ">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                    <img src="{{ asset('user/images/team/nil-hari-bastola.jpg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0">Nilhari Bastola </h4>
                                    <span class="py-2 d-block"> President
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                    <img src="{{ asset('user/images/team/khum-bahadur-subedi.jpeg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0"> Khum Bahadur Subedi</h4>
                                    <span class="py-2 d-block"> Immediate Past President
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                   <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                    <img src="{{ asset('user/images/team/krishna-parsad-dahal-1.jpg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0">Krishna Prasad Dahal</h4>
                                    <span class="py-2 d-block">Senior Vice President
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                     <img src="{{ asset('user/images/team/pradip-pandit-1.jpg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0">Pradip Pandit</h4>
                                    <span class="py-2 d-block">First Vice President
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                  
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                    <img src="{{ asset('user/images/team/dhan-bahadur-gurung.jpg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0"> Dhan Bahadur Gurung</h4>
                                    <span class="py-2 d-block">Second Vice President
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                    <img src="{{ asset('user/images/team/binod-sapkota-taan-team.jpg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0"> Binod Sapkota</h4>
                                    <span class="py-2 d-block"> General Secretary
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                 
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                    <img src="{{ asset('user/images/team/homnath.jpg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0">Homnath Bhattarai </h4>
                                    <span class="py-2 d-block">Secretary
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                    <img src="{{ asset('user/images/team/puru.jpg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0">Purushotam Timalsena </h4>
                                    <span class="py-2 d-block">Treasurer
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                    <img src="{{ asset('user/images/team/chhin.jpg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0">Chhing Dorchi Sherpa </h4>
                                    <span class="py-2 d-block">Joint-Treasurer
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                    <img src="{{ asset('user/images/team/ram-banjara-1.jpg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0">Ram Prasad Banjara  </h4>
                                    <span class="py-2 d-block">Executive Member
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="teams__details__list">
                            <div class="teams__details__list__box">
                                <div class="logo-img position-relative">
                                    <img src="{{ asset('user/images/team/raju-aryal.jpg') }}"
                                    alt="" class="img">
                                    <a class="profile-btn" href="{{route('user.team-profile')}}">View Profile <i class="fa-solid fa-eye"></i></a>
                                  
                                </div>
    
                                <div class="text p-lg-4 p-3 text-center position-relative">
                                    <h4 class="mb-0">Raju Aryal </h4>
                                    <span class="py-2 d-block">Executive Member
                                    </span>
                                    {{-- <div class="teams__social-media d-flex justify-content-center  ">
                                        <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </div> --}}
                                </div>
    
                            </div>
    
                        </div> 
                    </div>
                  
                </div>
            </div>
    </section>
@endsection