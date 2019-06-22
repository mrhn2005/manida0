<!-- Main Header-->
    <header class="main-header">
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <select class="dropdown ss-lang-selector">
                                        <option data-url="">Language</option>
                                        <option data-url="#">Persian</option>
                                        <option data-url="">English</option>
                                        <option data-url="#">Russian</option>
                                        <option data-url="#">Arabic</option>
                                    </select>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Language
                                        </a>
                                        <ul>
                                            @foreach (config('translatable.locales') as $lang => $language)
                                                
                                                    <li>
                                                        <a href="{{ route('lang.switch', $lang) }}">
                                                            {{ $language }}
                                                        </a>
                                                    </li>
                                                
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="current dropdown"><a href="index.html#">Home</a>
                                    	<ul>
                                            <li><a href="index.html">Homepage One</a></li>
                                            <li><a href="index-2.html">Homepage Two</a></li>
                                            <li><a href="index-3.html">Homepage Three</a></li>
                                            <li class="dropdown"><a href="index-3.html">Header Styles</a>
                                            	<ul>
                                                	<li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li class="dropdown"><a href="index.html#">Gallery</a>
                                    	<ul>
                                            <li><a href="gallery-three-column.html">Gallery Three Column</a></li>
                                            <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                            <li><a href="gallery-fullwidth.html">Gallery Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <!--<li class="dropdown"><a href="index.html#">Blog</a>-->
                                    <!--	<ul>-->
                                    <!--        <li><a href="blog.html">Our Blog</a></li>-->
                                    <!--        <li><a href="blog-single.html">Blog Single</a></li>-->
                                    <!--    </ul>-->
                                    <!--</li>-->
                                    <li class="dropdown"><a href="index.html#">Shop</a>
                                    	<ul>
                                            <li><a href="shop.html">Our Shop</a></li>
                                            <li><a href="shop-single.html">Shop Single</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    
                                 </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                        
                    </div><!--Nav Outer End-->
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->
                    
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->