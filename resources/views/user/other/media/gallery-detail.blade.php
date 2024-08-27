@extends('user.user_dashboard')
@section('content')
    <section class="about-us gallery-page ">
        <div class="section-bg-banner">
            <div class="hero-bg">
                <img src="{{ asset('user/images/layout-img/page-title.webp') }}" alt="bg">
            </div>
            <div class="container">
                <div class="section-hero-title">
                    <p class="text-white">Photo Gallery</p>
                    <h1 class="text-white"> A Small Taan Tour</h1>


                </div>
                <img class="page-title-icon" src="{{ asset('user/images/layout-img/icon-page-title.png') }}" alt="icon">
            </div>
        </div>
    </section>
    <section class="teams pt-lg-5 pt-4 pb-lg-5 pb-3">
        <div class="container">
            <div class="teams__details">

                <div class="row g-4 content_gallery">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "> <a data-fancybox="gallery_details" class="swipebox"
                            data-src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                            data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                            <img src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                                width="100%" height="250px" alt="img" />
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "> <a data-fancybox="gallery_details" class="swipebox"
                            data-src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                            data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                            <img src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                                width="100%" height="250px" alt="img" />
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "> <a data-fancybox="gallery_details" class="swipebox"
                            data-src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                            data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                            <img src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                                width="100%" height="250px" alt="img" />
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "> <a data-fancybox="gallery_details" class="swipebox"
                            data-src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                            data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                            <img src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                                width="100%" height="250px" alt="img" />
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "> <a data-fancybox="gallery_details" class="swipebox"
                            data-src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                            data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                            <img src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                                width="100%" height="250px" alt="img" />
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "> <a data-fancybox="gallery_details" class="swipebox"
                            data-src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                            data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                            <img src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                                width="100%" height="250px" alt="img" />
                        </a></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12   "> <a data-fancybox="gallery_details" class="swipebox"
                            data-src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                            data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
                            <img src="{{ asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg') }}"
                                width="100%" height="250px" alt="img" />
                        </a></div>

                </div>
            </div>
    </section>
@endsection
