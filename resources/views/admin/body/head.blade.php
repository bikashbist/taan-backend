<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Taan Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{asset('admin/')}}assets/img/taan-logo.jpg" type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="{{asset('admin/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: {
          families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{asset('admin/assets/css/fonts.min.css')}}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
  
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/kaiadmin.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/admin.css')}}" />
  </head>