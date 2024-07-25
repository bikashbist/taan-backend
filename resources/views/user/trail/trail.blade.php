@extends('user.user_dashboard')
@section('content')
<div class="trail-profile  pb-lg-5">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 col-md-10 col-12 mx-auto">
                <h1 class="text-center text-white py-lg-5 py-3">Looking For New Trail?</h1>
                <div class="trail-profile--meta-search text-center">
                    <span data-value="Search Trails"> <i class="fa-solid fa-magnifying-glass"></i> All
                        Trail</span>
                    <span data-value="Upsection-trail Trails"> <i class="fa-solid fa-magnifying-glass"></i>
                        Up Coming Trail</span>
                    <span data-value="New Trails"> <i class="fa-solid fa-magnifying-glass"></i> New Trail</span>
                    <span data-value="Existing Trails"> <i class="fa-solid fa-magnifying-glass"></i> Existing
                        Trail</span>
                </div>

                <div class="search-trail">
                    <form id="searchForm" action="#">
                        <div class="d-flex align-items-center justify-content-between search-trail__search">
                            <div class="search-trail__search--input d-flex align-items-center flex-fill">
                                <b><i class="fa-solid fa-magnifying-glass"></i></b>
                                <input id="searchInput" class="search-trail__search--input-type" type="text"
                                    placeholder="Search Trails">
                            </div>
                            <button id="searchButton" class="btn-search" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i> Search</button>
                        </div>
                    </form>
                  
                </div>
            </div>
          
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 my-lg-4 pt-3 mt-3">
            <div class="trail-card ">
                <img src="{{asset('user/images/home-banner.png')}}" alt="banner">
                <div class="trail-card__details d-flex justify-content-center align-items-center">
                    <div class="trail-card__content text-center">
                        <h1 class="text-white title">Start planning your next trail adventure</h1>
                        <p class="text-white subtitle ">TAAN helps adventure-seekers plan and book travel to
                            some of the most popular mountain destinations around the Nepal</p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<section class="section-trail mb-3">
    <div class="container">
    
        <div class="section-trail__details">
            <div class="row g-4 ">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="trail-details.html">
                        <div class="section-trail__details__list">
                            <div class="section-trail__details__list__box">
                                <div class="logo-img">
                                    <img src="{{asset('user/images/trail/things-to-do-in-kathmandu-300x200.jpg')}}" alt=""
                                        class="img">
                                    <div class="tag up-coming  px-4">
                                        <img src="{{asset('user/images/trail/soon.svg')}}" alt="coming soon">
                                    </div>
                                    <!-- <div class="bagde-flag-wrap">
                                        <a href="#" class="bagde-flag"> NEw </a>
                                      </div> -->
                                    <div class="trail-packages">

                                    </div>
                                </div>

                                <div class="text">

                                    <small><i class="fa-solid fa-location-dot"></i> Kathmandu, Chitwan, Pokhara
                                    </small>
                                    <h5>Things To Do In Kathmandu – 11 Must See And Do Activities In Nepal’s
                                        Capital </h5>

                                </div>

                            </div>

                        </div> <!-- list section-trail -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="trail-details.html">
                        <div class="section-trail__details__list">
                            <div class="section-trail__details__list__box">
                                <div class="logo-img">
                                    <img src="{{asset('user/images/trail/Climbers-side-Nepali-Mount-Everest.webp')}} " alt="" class="img">
                                    <div class="bagde-flag-wrap">
                                        <a href="#" class="bagde-flag"> NEW </a>
                                    </div>
                                </div>

                                <div class="text">

                                    <small><i class="fa-solid fa-location-dot"></i> Solukhumbu Nepal -10
                                    </small>
                                    <a href="trail-details.html">      <h5>Everest Base Camp Trek - 13 Things to Know for Your Trip</h5></a>
                               
                                </div>

                            </div>

                        </div> <!-- list section-trail -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="trail-details.html">
                        <div class="section-trail__details__list">
                            <div class="section-trail__details__list__box">
                                <div class="logo-img">
                                    <img src="{{asset('user/images/trail/Climbers-side-Nepali-Mount-Everest.webp')}}" alt="" class="img">
                                    <div class="bagde-flag-wrap">
                                        <a href="#" class="bagde-flag"> NEW </a>
                                    </div>
                                </div>

                                <div class="text">

                                    <small><i class="fa-solid fa-location-dot"></i> Solukhumbu Nepal -10
                                    </small>
                                    <a href="trail-details.html">      <h5>Everest Base Camp Trek - 13 Things to Know for Your Trip</h5></a>
                               


                                </div>

                            </div>

                        </div> <!-- list section-trail -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="#">
                        <div class="section-trail__details__list">
                            <div class="section-trail__details__list__box">
                                <div class="logo-img">
                                    <img src="https://media.everestbasecamptravel.com/uploads/package/namche-helicopter-flight.webp"
                                        alt="" class="img">
                                    <div class="bagde-flag-wrap">
                                        <a href="#" class="bagde-flag"> NEW </a>
                                    </div>
                                </div>

                                <div class="text">

                                    <small><i class="fa-solid fa-location-dot"></i> Kathmandu, Chitwan, Pokhara
                                    </small>
                                    <h5>Everest Base Camp Trek - 13 Things to Know for Your Trip</h5>


                                </div>

                            </div>

                        </div> <!-- list section-trail -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="#">
                        <div class="section-trail__details__list">
                            <div class="section-trail__details__list__box">
                                <div class="logo-img">
                                    <img src="https://media.everestbasecamptravel.com/uploads/package/namche-helicopter-flight.webp"
                                        alt="" class="img">
                                    <div class="bagde-flag-wrap">
                                        <a href="#" class="bagde-flag"> NEW </a>
                                    </div>
                                </div>

                                <div class="text">

                                    <small><i class="fa-solid fa-location-dot"></i> Kathmandu, Nepal </small>
                                    <h5>Everest Base Camp Trek - 13 Things to Know for Your Trip</h5>


                                </div>

                            </div>

                        </div> <!-- list section-trail -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="#">
                        <div class="section-trail__details__list">
                            <div class="section-trail__details__list__box">
                                <div class="logo-img">
                                    <img src="https://media.everestbasecamptravel.com/uploads/package/namche-helicopter-flight.webp"
                                        alt="" class="img">

                                </div>

                                <div class="text">

                                    <small><i class="fa-solid fa-location-dot"></i> Kathmandu, Nepal </small>
                                    <h5>Everest Base Camp Trek - 13 Things to Know for Your Trip</h5>


                                </div>

                            </div>

                        </div> <!-- list section-trail -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="#">
                        <div class="section-trail__details__list">
                            <div class="section-trail__details__list__box">
                                <div class="logo-img">
                                    <img src="https://media.everestbasecamptravel.com/uploads/package/namche-helicopter-flight.webp"
                                        alt="" class="img">

                                </div>

                                <div class="text">

                                    <small><i class="fa-solid fa-location-dot"></i> Kathmandu, Nepal </small>
                                    <h5>Everest Base Camp Trek - 13 Things to Know for Your Trip</h5>


                                </div>

                            </div>

                        </div> <!-- list section-trail -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="#">
                        <div class="section-trail__details__list">
                            <div class="section-trail__details__list__box">
                                <div class="logo-img">
                                    <img src="https://media.everestbasecamptravel.com/uploads/package/namche-helicopter-flight.webp"
                                        alt="" class="img">

                                </div>

                                <div class="text">

                                    <small><i class="fa-solid fa-location-dot"></i> Kathmandu, Nepal </small>
                                    <h5>Everest Base Camp Trek - 13 Things to Know for Your Trip</h5>


                                </div>

                            </div>

                        </div> <!-- list section-trail -->
                    </a>
                </div>
            </div>

        </div>
    </div>
</section><!-- up section-trail trail -->

   
@endsection