<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Multi Auth Guard') }}</title>
<link rel="shortcut icon" type="image/x-icon" href="/img/logo/mahalijat.1.png">
    <!-- Styles -->
    
    <!--<link href="/css/app.css" rel="stylesheet">-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/admin.css" rel="stylesheet">
    <link href="/admin/my.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @yield('style')
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    
</head>

<body style="background-color:#F8F8F8">
    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="" class="logo">
                Mani
                <span>
                da
            </span></a>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">
                                 {{ Auth::user()->name }}
                                </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout ">
                            <div class="log-arrow-up"></div>
                            <!--<li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>-->
                            <!--<li><a href="#"><i class="icon-cog"></i>تنظیمات</a></li>-->
                            <!--<li><a href="#"><i class="icon-bell-alt"></i>اعلام ها</a></li>-->
                            <li style="text-align:middle;"><a href="{{ url('/admin/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="icon-key"></i>خروج</a></li>
                                                 <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="">
                            <i class="icon-dashboard"></i>
                            <span>صفحه اصلی</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{route('banners.index')}}">
                            <i class="fa fa-sliders"></i>
                            <span>
                              اسلایدر
                                
                            </span>
                            <!--<span class="arrow"></span>-->
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{route('products.index')}}" class="" >
                            <i class="fa fa-shopping-basket"></i>
                            <span>
                                محصولات
                            </span>
                            <!--<span class="arrow"></span>-->
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{route('categories.index')}}">
                            <i class="fa fa-sitemap"></i>
                            <span>
                               دسته بندیها
                                </span>
                            
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{route('contents.index')}}">
                            <i class="fa fa-user"></i>
                            <span>
                                مطالب عمومی 
                                
                            </span>
                            <!--<span class="arrow"></span>-->
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{route('galleries.index')}}">
                            <i class="fa fa-image"></i>
                            <span>
                                گالری
                                
                            </span>
                            <!--<span class="arrow"></span>-->
                        </a>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>

    @yield('content')
    </section>
    <!-- Scripts -->
    
    <script src="/js/app.js"></script>
    <script src="/js/admin.js"></script>
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/page-accelerator/0.1.1/page-accelerator.min.js"></script>-->
    <script>
    // var person = {
    
    // afterLoading : function() {
    //     activateTooltip();
    //     $('[data-placement="right"]').tooltip();
    //         jQuery('#sidebar .sub-menu > a').on('click', function (){
    //     var last = jQuery('.sub-menu.open', $('#sidebar'));
    //     last.removeClass("open");
    //     jQuery('.arrow', last).removeClass("open");
    //     jQuery('.sub', last).slideUp(200);
    //     var sub = jQuery(this).next();
    //     if (sub.is(":visible")) {
    //         jQuery('.arrow', jQuery(this)).removeClass("open");
    //         jQuery(this).parent().removeClass("open");
    //         sub.slideUp(200);
    //     } else {
    //         jQuery('.arrow', jQuery(this)).addClass("open");
    //         jQuery(this).parent().addClass("open");
    //         sub.slideDown(200);
    //     }
    //     var o = ($(this).offset());
    //     diff = 200 - o.top;
    //     if(diff>0)
    //         $("#sidebar").scrollTo("-="+Math.abs(diff),500);
    //     else
    //         $("#sidebar").scrollTo("+="+Math.abs(diff),500);
    //     });
    //     $("#printButton").click(function(){
    //         var mode = 'iframe'; //popup
    //         var close = mode == "popup";
    //         var options = { mode : mode, popClose : close};
    //         $("div.printableArea").printArea( options );
    //     });
        
    // // activateTooltip();
    // //  tinymce.init();
    //     } 
     
    
    // };
    
        // pageAccelerator(person);
    $('.confirm-form').submit(function() {
        var c = confirm("آیا مطمئنید؟");
        return c; //you can just return c because it will be true or false
    });
     
        
    </script>
    @yield('js')
</body>
</html>
