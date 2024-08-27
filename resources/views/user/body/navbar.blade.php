<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{asset('user/images/taan-logo.jpg')}}" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-lg-end mx-auto mb-2 mb-lg-0 d-flex justify-content-end">
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{route('user.members')}}" role="button">
              Members <i class="fas fa-chevron-down dropdown-icon"></i>
            </a>
            <div class="dropdown-menu d-flex ">
              <div class="sub-menu">
                <div class="sub-count">
                  <div class="count-number">
                    <a href="{{route('user.members')}}">
                      <span class="text-white">Total Member</span> <br>
                      <h3 class="text-white">
                        2500 +
                    </a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="sub-menu sub-menu-items w-100">
                <a href="{{route('user.members.general')}}">General Members</a>
                <a href="{{route('user.members.associate')}}">Associate Members</a>
                <a href="{{route('user.members.regional')}}">Regional Association Members</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="{{route('user.trail')}}" role="button">
              Trail Profile <i class="fas fa-chevron-down dropdown-icon"></i>
            </a>
            <div class="dropdown-menu d-flex ">
              <div class="sub-menu">
                <div class="sub-count">
                  <div class="count-number ">
                    <a href="{{route('user.trail.package')}}">
                      <span class="text-white ">Total Trail </span> <br>
                      <h3 class="text-white ">
                        25 +
                    </a>

                    </h3>
                    <div class="trail-packages pt-3 " style="border-top: 2px solid white;">
                    <a href="{{route('user.trail.details')}}" class="d-block">
                        <span class="text-white "> Trail Selection</span> <br>
                        <h3 class="text-white ">
                          100 +
                      </a>

                      </h3>
                    </div>


                  </div>

                </div>
              </div>
              <div class="sub-menu sub-menu-items w-100 ">
                <a href="{{route('user.trail.details')}}">Everest Base Camp Trek</a>
                <a href="{{route('user.trail.details')}}">Langtang Base Camp Trek
                  Detail</a>
                <a href="{{route('user.trail.details')}}">
                  Kanchenjunga Base Camp Trek Cost and Itinerary 2024 </a>

                  <a href="{{route('user.trail.details')}}">
                    Kanchenjunga Circuit Trek 19 Days 2024 | 2025</a>
               

              </div>


            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{route('user.about')}}" role="button">
              About us <i class="fas fa-chevron-down dropdown-icon"></i>
            </a>
            <div class="dropdown-menu ">
           
              <div class="sub-menu sub-menu-items w-100">
                <a href="{{route('user.about')}}">Introduction</a>
                <a href="{{route('user.profile')}}">Our Profile</a>
                <a href="{{route('user.former-president')}}">Former Presidents</a>
                <a href="{{route('user.executive-committee')}}"> Executive Committee</a>
                <a href="{{route('user.departments')}}"> Departments</a>
                <a href="{{route('user.previous-committees')}}"> Previous Executive Committees</a>
                <a href="{{route('user.become-member')}}"> To Become Member</a>
                <a href="{{route('user.teams')}}"> Our Amazing Team</a>
                <a href="{{route('user.organization.chart')}}">Organizations Chart</a>

                
               
                
              </div>
            </div>
          </li>
          
        
          {{-- <li class="nav-item dropdown">
            <a class="nav-link " href="{{route('user.about')}}" role="button">
              About us
            </a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link" href="https://tims.ntb.gov.np/login" role="button">
              TIMs <i class="fas fa-chevron-down dropdown-icon"></i>
            </a>
            <div class="dropdown-menu ">
           
              <div class="sub-menu sub-menu-items w-100">
                <a href="https://tims.ntb.gov.np/login">TIMs /Login & Register</a>
                <a href="{{route('user.tims-overview')}}">TIMs Overview</a>
              </div>
            </div>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="https://tims.ntb.gov.np/login" role="button" aria-expanded="false">
              TIMs
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.faq')}}" role="button" aria-expanded="false">
              FAQs
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{route('user.about')}}" role="button">
              Others <i class="fas fa-chevron-down dropdown-icon"></i>
            </a>
            <div class="dropdown-menu d-flex end-0 ">
              <div class="sub-menu sub-menu-items w-100 p-3 ">
                <h5 class="sub-menu-title px-3 "  >Media</h5>
                <a href="{{route('user.news_event')}}">News & Events</a>
                <a href="{{route('user.newsletter')}}">Newsletter</a>
                <a href="{{route('user.notification')}}"> Notification</a>
                <a href="{{route('user.publication')}}"> TAAN Publications</a>
                <a href="{{route('user.press-release')}}"> Press Release</a>
                <a href="{{route('user.blog')}}"> Blog</a>
                <a href="{{route('user.gallery')}}"> Photo Gallery</a>
                <a href="{{route('user.video-gallery')}}"> Video Gallery</a>

                
                
              </div>
              <div class="sub-menu  sub-menu-items w-100 p-3 ">
                <h5 class="sub-menu-title px-3 " >
                  Resources
                </h5>
                <a href="{{route('user.rescue')}}">Rescue Procedure 2075</a>
                <a href="{{route('user.fee')}}">Trekking Peaks fees</a>
                <a href="{{route('user.treking-permit-fee')}}"> Trekking Permit fees</a>
                <a href="{{route('user.download')}}">Downloads</a>
             
                
              </div>
         
            </div>
          </li>
        </ul>
        <div class="d-flex align-items-center mobile-r-c" role="search">
          <a href="{{route('member.login')}}"><button class="btn btn-login be-member" type="submit">Sign In</button></a>
          <a href="{{route('become.member')}}"><button class="btn btn-signup btn-bg ms-2" type="submit"><i class="fa-regular fa-user"></i>
              Become a member
            </button></a>
        </div>
      </div>
    </div>
  </nav>