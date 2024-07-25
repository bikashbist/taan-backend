<!DOCTYPE html>
<html lang="en">

@include('user.body.head')

<body>
  <!-- header start -->
  @include('user.body.header')
  <!-- header end -->
  <!-- navbar start -->
  @include('user.body.navbar')
  <!-- navbar end  -->

    @yield('content')
  @include('user.body.footer')

</body>

</html>