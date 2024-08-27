@extends('user.user_dashboard')
@section('content')

<section class="about-us profile-page">
    <div class="section-bg-banner">
        <div class="hero-bg">
            <img src="{{asset('user/images/layout-img/page-title.webp')}}"  alt="bg">
        </div>
        <div class="container">
           <div class="section-hero-title">
            <p class="text-white"> Welcome !</p>
            <h1 class="text-white">My Profiele</h1>

          
           </div>
           <img class="page-title-icon" src="{{asset('user/images/layout-img/icon-page-title.png')}}" alt="icon">
        </div>
    </div>
    <div class="container py-lg-5 py-3">
        <div class="row">
            <div class="col-lg-12 mx-auto">

                <div class="an-user mb-4 pb-xl-2 d-flex align-items-center">
                    <div class="image image-big">
                        <img src="{{asset('user/images/about/about-user.png')}}" width="100%" alt="">
                    </div>
                    <div class="text">
                        <h6 class="name">Ms. Ambica Shrestha</h6>
                        <p class="mb-0">Founder President </p>
                        <a href="#">
                            <div class="more-details d-flex align-items-center">
                                <img src="https://en.wikipedia.org/static/images/icons/wikipedia.png" height="20" alt="img"> <span class="ms-2">Wiki Profile</span>
                            </div>
                        </a>
                      
                    </div>
                
                </div>
                  <div class="teams__social-media d-flex mb-lg-4 mb-3 ">
                    <a class="bg-facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a class="bg-insta" href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
                <div>


                    <p>
                        Trekking Agencies' Association of Nepal (TAAN) is an umbrella association of trekking
                        agencies in the country. It was established in 1979 by a handful of trekking agency
                        operators who felt it was time to devise sound business principles as well as regulate
                        the
                        sector which was growing by leaps and bounds with every passing year. They also felt the
                        need of a strong lobby group that could suggest to the government on several issues to
                        promote the Nepali tourism industry and develop tourism as a revenue generating
                        industry.
                    </p>
                    <h4>
                        <strong>
                            Initially, TAAN had limited its membership only to Nepalese trekking agencies. It later
                            opened associate membership to foreign organizations to broaden the scope of the
                            association
                        </strong>
                    .
                    </h4>
                    <p>TAAN members (around 1,729 General Members, 7 Associate Members and 155 General Members
                        of
                        TAAN Regional Association Pokhara) meet annually to endorse policy guidelines which
                        govern
                        the executive body. The executive committee work as per the TAAN Statute and guidelines
                        of
                        the Annual General Body meeting. The association frequently communicates with different
                        government agencies and other stakeholders to simplify working procedures and resolve
                        problems related to the trekking sector. The executive committee, which is elected every
                        two
                        years, has eight office-bearers, nine executive committee members, four nominated
                        executive
                        members, one immediate past president and one representative from TAAN Regional
                        Association
                        Pokhara</p>
                    <p>
                        TAAN has 17 departments, which are led by office-bearers or executive committee members,
                        which assist the executive committee to meet its objectives. The association organizes
                        different trainings and workshops on a regular basis to enhance professionalism of its
                        member agencies and their workforce. It organizes number of events like TAAN Lhosar
                        Festival
                        (February 17), Langtang Marathon Championship (April 25), International Sagarmatha Day
                        and
                        TAAN Day (May 29), World Environment Day (June 5), and World Tourism Day (September 27),
                        among others. Likewise, programs like tree plantation, trekking trails and rivers
                        clean-up
                        campaign, and works to promote agro tourism and good sanitation are organized throughout
                        the
                        year.
                    </p>
                    <p>TAAN also join hands with number of government agencies and travel trade associations to
                        organize different programs and activities.</p>
                
      

                </div>


            </div>
        </div>
    </div>
</section>
   
@endsection