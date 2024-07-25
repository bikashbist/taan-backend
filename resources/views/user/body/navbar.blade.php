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
                <a href="{{route('user.members.profile','member')}}">Member Profile</a>
                <a href="{{route('user.members.package','member')}}">Member Traking Package</a>
                <a href="#"> Regional Association Members</a>
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
                      <span class="text-white ">Trail Package</span> <br>
                      <h3 class="text-white ">
                        25 +
                    </a>

                    </h3>
                    <div class="trail-packages pt-3 " style="border-top: 2px solid white;">
                    <a href="{{route('user.trail.details')}}" class="d-block">
                        <span class="text-white "> Trail details</span> <br>
                        <h3 class="text-white ">
                          100 +
                      </a>

                      </h3>
                    </div>


                  </div>

                </div>
              </div>
              <div class="sub-menu sub-menu-items w-100 ">

                <a href="{{route('user.trail.package')}}">Trail Profile</a>
                <a href="{{route('user.trail.details')}}">Package Details
                  Detail</a>

                <a href="trail-details.html">Everest Base Camp Trek</a>
                <a href="trail-package-details.html">Everest Base Camp Trek
                  Detail</a>
                <a href="trail-package-details.html">Everest Base Camp Trek Everest Base Camp Trek
                  Detail</a>

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
                <a href="{{route('user.organization.chart')}}">Organizations Chart</a>
              </div>
            </div>
          </li>
          
        
          {{-- <li class="nav-item dropdown">
            <a class="nav-link " href="{{route('user.about')}}" role="button">
              About us
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="#" role="button" aria-expanded="false">
              TIMs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" role="button" aria-expanded="false">
              FAQs
            </a>
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