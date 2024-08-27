@extends('user.user_dashboard')
@section('content')
    <section class="about-us gallery-page ">
        <div class="section-bg-banner">
            <div class="hero-bg">
                <img src="{{ asset('user/images/layout-img/page-title.webp') }}" alt="bg">
            </div>
            <div class="container">
                <div class="section-hero-title">
                    <p class="text-white"> Welcome to!</p>
                    <h1 class="text-white">Photo Gallery</h1>


                </div>
                <img class="page-title-icon" src="{{ asset('user/images/layout-img/icon-page-title.png') }}" alt="icon">
            </div>
        </div>

    </section>
    <section class="teams pt-lg-5 pt-4 pb-lg-5 pb-3">
        <div class="container">
            <div class="teams__details">
                <div class="row g-4 content_gallery" >
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "
                       ><a href="{{route('gallery-detail')}}" class="swipebox"
                            title="A Small Taan Tour">
                            <img decoding="async"
                                src="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image.png"
                                alt="A Small Taan Tour">
                            <span class="gallery-item">
                                <h4 class="title">A Small Taan Tour</h4>
                            </span>
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "
                        ><a href="#" class="swipebox"
                            title="Team Plan to Visit Pokhara">
                            <img decoding="async"
                                src="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image-9.png"
                                alt="Team Plan to Visit Pokhara">
                            <span class="gallery-item">
                                <h4 class="title">Team Plan to Visit Pokhara</h4>
                            </span>
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "
                        ><a href="#" class="swipebox"
                            title="Taan Team Enjoying">
                            <img decoding="async"
                                src="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image-8.png"
                                alt="Taan Team Enjoying">
                            <span class="gallery-item">
                                <h4 class="title">Taan Team Enjoying</h4>
                            </span>
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "
                        ><a href="#" class="swipebox"
                            title="Team Photos">
                            <img decoding="async"
                                src="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image-7.png"
                                alt="Team Photos">
                            <span class="gallery-item">
                                <h4 class="title">Team Photos</h4>
                            </span>
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "
                        ><a href="#" class="swipebox"
                            title="Secret Taan Meeting">
                            <img decoding="async"
                                src="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image-6.png"
                                alt="Secret Taan Meeting">
                            <span class="gallery-item">
                                <h4 class="title">Secret Taan Meeting</h4>
                            </span>
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "
                        ><a href="#" class="swipebox"
                            title="Taan Event ">
                            <img decoding="async"
                                src="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image-5.png"
                                alt="Taan Event ">
                            <span class="gallery-item">
                                <h4 class="title">Taan Event </h4>
                            </span>
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "
                        ><a href="#" class="swipebox"
                            title="A rare opportunity to try Foundry ">
                            <img decoding="async"
                                src="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image-4.png"
                                alt="A rare opportunity to try Foundry ">
                            <span class="gallery-item">
                                <h4 class="title">A rare opportunity to try Foundry </h4>
                            </span>
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "
                        ><a href="#" class="swipebox"
                            title="Taan News Event">
                            <img decoding="async"
                                src="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image-3.png"
                                alt="Taan News Event">
                            <span class="gallery-item">
                                <h4 class="title">Taan News Event</h4>
                            </span>
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "
                        ><a href="#" class="swipebox"
                            title="Taan Meeting">
                            <img decoding="async"
                                src="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image-2.png"
                                alt="Taan Meeting">
                            <span class="gallery-item">
                                <h4 class="title">Taan Meeting</h4>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "
                       ><a
                            href="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image-1.png"
                            class="swipebox" title="World’s hottest destinations for vegans">
                            <img decoding="async"
                                src="https://travelwp.physcode.com/main-demo/wp-content/uploads/sites/7/2024/08/Image-1.png"
                                alt="World’s hottest destinations for vegans">
                            <span class="gallery-item">
                                <h4 class="title">World’s hottest destinations for vegans</h4>
                            </span>
                        </a></div>
                </div>
            </div>
    </section>
@endsection
