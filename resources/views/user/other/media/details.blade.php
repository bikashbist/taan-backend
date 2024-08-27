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
                <h1 class="text-white">News & Events Detail Page</h1>


            </div>
            <img class="page-title-icon" src="{{ asset('user/images/layout-img/icon-page-title.png') }}" alt="icon">
        </div>
    </div>

</section>

    <section class="main-content mt-lg-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="main-content__details">
                        <div class="trail-details">

                    
                            <div class="page_content">
                                <img class="mb-3"
                                        src="{{asset('user/images/trail/everest-base-camp-trek-with-helicopter-return.webp')}} "
                                        alt="img">
                                <blockquote>
                                    <p>This sanctuary on a lagoon is virtually the same as it was six hundred years ago,
                                        which adds to the fascinating character.</p>
                                </blockquote>

                                <h4 class="p1"><span class="s1">Exploring the Area</span></h4>
                                <p class="p2">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                    fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard
                                    Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave.
                                    Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack,
                                    elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan
                                    retro. Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo
                                    biodiesel Neutra selfies.</p>
                                <h4 class="p1"><span class="s1">Coastal Adventures</span></h4>
                                <p class="p2">Exercitation photo booth stumptown tote bag Banksy, elit small batch
                                    freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips
                                    proident chillwave deep v laborum. Aliquip veniam delectus.</p>

                                <h4 class="p1"><span class="s1">Eating and Drinking</span></h4>
                                <p class="p2">See-through delicate embroidered organza blue lining luxury acetate-mix
                                    stretch pleat detailing. Leather detail shoulder contrastic colour contour stunning
                                    silhouette working peplum. Statement buttons cover-up tweaks patch pockets perennial
                                    lapel collar flap chest pockets topline</p>
                                <h4 class="p2">What to See and Do</h4>
                                <p>Foam padding in the insoles leather finest quality staple flat slip-on design pointed
                                    toe off-duty shoe. Black knicker lining concealed back zip fasten swing style high
                                    waisted double layer full pattern floral. Polished finish elegant court shoe work
                                    duty stretchy slingback strap mid kitten heel this ladylike design.</p>

                                <h4 class="p2">Where to Stay</h4>
                                <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache
                                    fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.
                                    Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan
                                    High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit
                                    bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro.
                                    Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel
                                    Neutra selfies.</p>
                                <h4 class="p1"><span class="s1">How to Get Around</span></h4>
                                <p class="p2">Exercitation photo booth stumptown tote bag Banksy, elit small batch
                                    freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips
                                    proident chillwave deep v laborum. Aliquip veniam delectus.</p>
                            </div>
                        </div>
                               
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-content__sidebar">
                       
                        <div class=" sidebar sidebar-border trail-details-sidebar mb-4  ">
                            
                            
                            <h3>Other News & Events </h3>
                            <div class="sidebar__package p-4">
                                
                                <ul class="posts blog withthumb ">
                                    <li class="mb-3">
                                        <div class="post_circle_thumb">
                                            <a href="#"><img class="alignleft frame post_thumb"
                                                    src="{{asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg')}} "
                                                    alt="img"></a>
                                        </div><a href="#">Everest Base Camp Trek - 13 Things to Know for Your Trip</a>
                                        <div class="post_attribute">December 10, 2016</div>
                                    </li>
    
                                    <li class="mb-3">
                                        <div class="post_circle_thumb ">
                                            <a href="#"><img class="alignleft frame post_thumb"
                                                    src="{{asset('user/images/trail/america-gded4fdb31_640-300x169.jpg')}} " alt="img"></a>
                                        </div><a href="#">Everest Base Camp Trek - 13 Things to Know for Your Trip</a>
                                        <div class="post_attribute">December 10, 2016</div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="post_circle_thumb ">
                                            <a href="#"><img class="alignleft frame post_thumb"
                                                    src="{{asset('user/images/trail/1.webp')}} " alt="img"></a>
                                        </div><a href="#">Everest Base Camp Trek - 13 Things to Know for Your Trip</a>
                                        <div class="post_attribute">December 10, 2016</div>
                                    </li>
    
                                    <li class="mb-3">
                                        <div class="post_circle_thumb ">
                                            <a href="#"><img class="alignleft frame post_thumb"
                                                    src="{{asset('user/images/trail/3.jpg')}} " alt="img"></a>
                                        </div><a href="#">Everest Base Camp Trek - 13 Things to Know for Your Trip</a>
                                        <div class="post_attribute">December 10, 2016</div>
                                    </li>
    
                                    <li>
                                        <div class="post_circle_thumb ">
                                            <a href="#"><img class="alignleft frame post_thumb"
                                                    src="{{asset('user/images/trail/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg')}} "
                                                    alt="img"></a>
                                        </div><a href="#">Everest Base Camp Trek - 13 Things to Know for Your Trip</a>
                                        <div class="post_attribute">December 10, 2016</div>
                                    </li>
                                </ul>
    
                            </div>
    
                        </div>
                    </div>
                   
                </div>
           
               
            </div>
        </div>

    </section>
   

@endsection
