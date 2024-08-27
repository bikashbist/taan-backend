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
                    <h1 class="text-white">Video Gallery</h1>


                </div>
                <img class="page-title-icon" src="{{ asset('user/images/layout-img/icon-page-title.png') }}" alt="icon">
            </div>
        </div>

    </section>

    <section class="video py-lg-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a class="video__wrapper" href="https://www.youtube.com/watch?v=BchpIcqJy8w" data-fancybox="gallery">
                        <img src="{{ asset('user/images/pokhara.webp') }}" alt="img" />
                        <div class="video__play-icon">
                            <span>
                                <i class="fa-regular fa-circle-play"></i>
                            </span>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a class="video__wrapper" href="https://www.youtube.com/watch?v=9_WJOZiixww" data-fancybox="gallery">
                        <img src="{{ asset('user/images/about/2.jpg') }}" alt="img" />
                        <div class="video__play-icon">
                            <span>
                                <i class="fa-regular fa-circle-play"></i>
                            </span>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a class="video__wrapper" href="https://www.youtube.com/watch?v=wTQ9wNbaN8I" data-fancybox="gallery">
                        <img src="{{ asset('user/images/trail/3.webp') }}" alt="img" />
                        <div class="video__play-icon">
                            <span>
                                <i class="fa-regular fa-circle-play"></i>
                            </span>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a class="video__wrapper" href="https://www.youtube.com/watch?v=1LUyjmm3w9I" data-fancybox="gallery">
                        <img src="{{ asset('user/images/trail/america-gded4fdb31_640-300x169.jpg') }}" alt="img" />
                        <div class="video__play-icon">
                            <span>
                                <i class="fa-regular fa-circle-play"></i>
                            </span>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a class="video__wrapper" href="https://www.youtube.com/watch?v=1LUyjmm3w9I" data-fancybox="gallery">
                        <img src="{{ asset('user/images/trail/annapurna-circuit-trekking.jpg') }}" alt="img" />
                        <div class="video__play-icon">
                            <span>
                                <i class="fa-regular fa-circle-play"></i>
                            </span>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a class="video__wrapper" href="https://www.youtube.com/watch?v=1LUyjmm3w9I" data-fancybox="gallery">
                        <img src="{{ asset('user/images/trail/everest-base-camp-trek-with-helicopter-return.webp') }}"
                            alt="img" />
                        <div class="video__play-icon">
                            <span>
                                <i class="fa-regular fa-circle-play"></i>
                            </span>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a class="video__wrapper" href="https://www.youtube.com/watch?v=1LUyjmm3w9I" data-fancybox="gallery">
                        <img src="{{ asset('user/images/trail/3.webp') }}" alt="img" />
                        <div class="video__play-icon">
                            <span>
                                <i class="fa-regular fa-circle-play"></i>
                            </span>

                        </div>
                    </a>
                </div>
             
            </div>
        </div>
    </section>
@endsection
