<!doctype html> 
<html class="no-js" lang="{{App::getLocale()}}" >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     @if(View::hasSection('metadesc'))
        @yield('metadesc')
    @else
         <!--   <meta name="description" content="محلی جات از آبان ماه سال 95 با هدف ارائه محصولات محلی خوراکی سالم، طبیعی و ارگانیک و صنایع دستی مطمئن از تولیدکنندگان خانگی و روستایی شروع به فعالیت کرد. این گروه با هسته مرکزی جمعی از دانشجویان دانشگاه صنعتی شریف راه اندازی شده است. محلی جات نیاز صدها مشتری را پاسخگو بوده و از تولیدات ده ها تولیدکننده محلی و روستایی و خانگی حمایت کرده است.">-->
         <!--   <meta property="og:title" content="  فروشگاه اینترنتی محلی جات- بستر فروش محصولات محلی، ارگانیک و صنایع دستی "/>-->
        	<!--<meta property="og:type" content="website" />-->
        	<!--<meta property="og:url" content="{{Request::url()}}" />-->
        	<!--<meta property="og:site_name" content="  فروشگاه اینترنتی محلی جات- بستر فروش محصولات محلی، ارگانیک و صنایع دستی "/>-->
        	<!--<meta property="og:image" content="{{URL::to('/').'/img/logo/mahalijat.png' }}" />-->
    @endif
    
    <title>
        @yield('title')
    </title>
    
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    @yield('style')

    <style>
        .main-menu .navigation > li {
             padding: 0px 0px; 
        }
        .main-header .main-box .logo-box {
             padding: 0px 0px; 
        }
    </style>

</head>

<body style="padding-right:0;">
    
    @yield('content')
     
        
    <script src="js/jquery.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/revolution.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    
    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key="></script>
    <script src="js/map-script.js"></script>

    @yield('js')

</body>