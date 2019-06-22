@extends('layout.main')

@section('title')
    Manida
@endsection

@section('content')
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    @include('common.header')
    <!--End Main Header -->
    
    
    <!-- Hidden Navigation Bar -->
    @include('common.hidden_bar')
    <!-- / Hidden Bar -->
    
    
    <!--Main Slider-->
    
    @include('common.slider')
    
    <!--Intro Section-->
    @include('common.intro')
    
    
    <!--About Farm Section-->
    @include('common.about')
    
    
    <!--Fluid Section One-->
    <section class="fluid-section-one">
    	<div class="oval-cut"></div>
        
        <!--FLoated Image Left-->
        <figure class="floated-image-left wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/food-image-2.png" alt=""></figure>
        <!--FLoated Image Right-->
        <figure class="floated-image-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/food-image-3.png" alt=""></figure>
        
    	<div class="outer-box clearfix">
        	<!--Left Column-->
            <div class="left-column">
            	<div class="clearfix">
                    <div class="inner-box">
                    	<h3>Save up to 50 %</h3>
                        <h5>on your first purchase</h5>
                        <a href="shop-single.html" class="theme-btn btn-style-three">Shop Now</a>
                    </div>
                </div>
            </div>	
            
            <!--Right Column-->
            <div class="right-column">
            	<div class="clearfix">
                    <div class="inner-box">
                    	<h3>Free Shipping</h3>
                        <h5>On order over $99</h5>
                        <a href="shop-single.html" class="theme-btn btn-style-three">Track Now</a>
                    </div>
                </div>
            </div>	
            
        </div>
    </section>
    
    
    <!--Gallery Section-->
    <section class="gallery-section">
    	<div class="auto-container">
			<!--Section Title-->
            <div class="sec-title-one">
                <h2>Our new products</h2>
            </div>
            
            <div class="mixitup-gallery">
        		<!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        @foreach($categories as $category)
                        <li class="filter" data-role="button" data-filter=".{{$category->title}}">{{$category->title}}</li>
                        @endforeach
                        <!--<li class="filter" data-role="button" data-filter=".vegetables">Vegetables</li>-->
                        <!--<li class="filter" data-role="button" data-filter=".breads">Breads</li>-->
                        <!--<li class="filter" data-role="button" data-filter=".juices">Juices</li>-->
                    </ul>
                </div>

                <!--Filter List-->
                <div class="filter-list row clearfix">
					
                    @foreach($products as $product)
                    <!--Default Food Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all {{$product->category->title}}">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="/{{$product->images[0]->path}}" title="Image Title Here"><img src="/{{$product->images[0]->path}}" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html"> {{$product->name}}</a></h3>
                                    <div class="price">$ 25.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Default Food Item-->
                    <!--<div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all breads juices">-->
                    <!--    <div class="inner-box">-->
                    <!--        <div class="image-box">-->
                    <!--        	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/2.jpg" title="Image Title Here"><img src="images/gallery/2.jpg" alt=""></a></figure>-->
                    <!--            <div class="lower-content">-->
                    <!--            	<h3><a href="shop.html">Kiwi Fruits</a></h3>-->
                    <!--                <div class="price">$ 18.00</div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <!--Default Food Item-->
                    <!--<div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all fruits vegetables">-->
                    <!--    <div class="inner-box">-->
                    <!--        <div class="image-box">-->
                    <!--        	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/3.jpg" title="Image Title Here"><img src="images/gallery/3.jpg" alt=""></a></figure>-->
                    <!--            <div class="lower-content">-->
                    <!--            	<h3><a href="shop.html">Tomatoes</a></h3>-->
                    <!--                <div class="price">$ 30.00</div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <!--Default Food Item-->
                    <!--<div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all fruits vegetables breads juices">-->
                    <!--    <div class="inner-box">-->
                    <!--        <div class="image-box">-->
                    <!--        	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/4.jpg" title="Image Title Here"><img src="images/gallery/4.jpg" alt=""></a></figure>-->
                    <!--            <div class="lower-content">-->
                    <!--            	<h3><a href="shop.html">Ripe pea</a></h3>-->
                    <!--                <div class="price">$ 15.00</div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <!--Default Food Item-->
                    <!--<div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all vegetables">-->
                    <!--    <div class="inner-box">-->
                    <!--        <div class="image-box">-->
                    <!--        	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/5.jpg" title="Image Title Here"><img src="images/gallery/5.jpg" alt=""></a></figure>-->
                    <!--            <div class="lower-content">-->
                    <!--            	<h3><a href="shop.html">Figs Sweet</a></h3>-->
                    <!--                <div class="price">$ 18.00</div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <!--Default Food Item-->
                    <!--<div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all breads juices">-->
                    <!--    <div class="inner-box">-->
                    <!--        <div class="image-box">-->
                    <!--        	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/6.jpg" title="Image Title Here"><img src="images/gallery/6.jpg" alt=""></a></figure>-->
                    <!--            <div class="lower-content">-->
                    <!--            	<h3><a href="shop.html">Rye Bread</a></h3>-->
                    <!--                <div class="price">$ 20.00</div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                </div>

				<!--Button Outer-->
				<div class="more-btn-outer text-center"><a href="shop.html" class="theme-btn btn-style-four">View More</a></div>

            </div>
            
        </div>
    </section>
    
    <!--Deal of the Day-->
    <section class="deal-of-day">
    	<div class="auto-container">
        	
            <!--Title Box-->
            <div class="title-box">
                <h3>Save up to 50 %</h3>
                <h2>Deal of the day</h2>
            </div>
            
            <!--Carousel Outer-->
            <div class="carousel-outer">
            	<div class="single-item-carousel">
                	<!--Slide Item-->
                    <div class="slide-item">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-8 col-sm-7 col-xs-12">
                            	<figure class="image-box"><a href="images/resource/food-image-4.png" class="lightbox-image"><img src="images/resource/food-image-4.png" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-4 col-sm-5 col-xs-12">
                            	<div class="inner">
                                    <div class="prod-title">Orancic Soup Mix 5004</div>
                                    <div class="price">Price: $350</div>
                                    <div class="text">Boursin boursin cheese strings. Cheesy feet roquefort pecorino danish fontina cheesecake chalk.</div>
                                    <div class="options clearfix">
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="shop.html" class="theme-btn shop-btn">Shop Now</a>
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-8 col-sm-7 col-xs-12">
                            	<figure class="image-box"><a href="images/resource/food-image-4.png" class="lightbox-image"><img src="images/resource/food-image-4.png" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-4 col-sm-5 col-xs-12">
                            	<div class="inner">
                                    <div class="prod-title">Orancic Soup Mix 5004</div>
                                    <div class="price">Price: $350</div>
                                    <div class="text">Boursin boursin cheese strings. Cheesy feet roquefort pecorino danish fontina cheesecake chalk.</div>
                                    <div class="options clearfix">
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="shop.html" class="theme-btn shop-btn">Shop Now</a>
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-8 col-sm-7 col-xs-12">
                            	<figure class="image-box"><a href="images/resource/food-image-4.png" class="lightbox-image"><img src="images/resource/food-image-4.png" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-4 col-sm-5 col-xs-12">
                            	<div class="inner">
                                    <div class="prod-title">Orancic Soup Mix 5004</div>
                                    <div class="price">Price: $350</div>
                                    <div class="text">Boursin boursin cheese strings. Cheesy feet roquefort pecorino danish fontina cheesecake chalk.</div>
                                    <div class="options clearfix">
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="shop.html" class="theme-btn shop-btn">Shop Now</a>
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
    
    <!--Our Team-->
    <section class="team-section">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title-one">
                <h2>Our farmers</h2>
            </div>
            
        	<div class="row clearfix">
            	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                	<!--Default Team Member-->
                    <div class="default-team-member">
                        <div class="inner-box clearfix">
                            <!--Image Column-->
                            <div class="image-column"><figure class="image"><a href="index.html#"><img src="images/resource/team-image-1.jpg" alt=""></a></figure></div>
                            <!--Content Column-->
                            <div class="content-column">
                                <div class="inner">
                                    <h3>Peter Parker</h3>
                                    <div class="text">Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters.</div>
                                    <div class="social-links">
                                        <a href="index.html#"><span class="fa fa-facebook-official"></span></a>
                                        <a href="index.html#"><span class="fa fa-twitter"></span></a>
                                        <a href="index.html#"><span class="fa fa-instagram"></span></a>
                                        <a href="index.html#"><span class="fa fa-skype"></span></a>
                                        <a href="index.html#"><span class="fa fa-vimeo-square"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Team Member-->
                    <div class="default-team-member alternate">
                        <div class="inner-box clearfix">
                            <!--Image Column-->
                            <div class="image-column"><figure class="image"><a href="index.html#"><img src="images/resource/team-image-2.jpg" alt=""></a></figure></div>
                            <!--Content Column-->
                            <div class="content-column">
                                <div class="inner">
                                    <h3>Darly Dixon</h3>
                                    <div class="text">Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters.</div>
                                    <div class="social-links">
                                        <a href="index.html#"><span class="fa fa-facebook-official"></span></a>
                                        <a href="index.html#"><span class="fa fa-twitter"></span></a>
                                        <a href="index.html#"><span class="fa fa-instagram"></span></a>
                                        <a href="index.html#"><span class="fa fa-skype"></span></a>
                                        <a href="index.html#"><span class="fa fa-vimeo-square"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                	<!--Default Team Member / Vertical-->
                    <div class="default-team-member vertical">
                        <div class="inner-box clearfix">
                            <!--Image Column-->
                            <div class="image-column"><figure class="image"><a href="index.html#"><img src="images/resource/team-image-3.jpg" alt=""></a></figure></div>
                            <!--Content Column-->
                            <div class="content-column">
                                <div class="inner">
                                    <h3>Rick Grimes</h3>
                                    <div class="text">Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters.</div>
                                    <div class="social-links">
                                        <a href="index.html#"><span class="fa fa-facebook-official"></span></a>
                                        <a href="index.html#"><span class="fa fa-twitter"></span></a>
                                        <a href="index.html#"><span class="fa fa-instagram"></span></a>
                                        <a href="index.html#"><span class="fa fa-skype"></span></a>
                                        <a href="index.html#"><span class="fa fa-vimeo-square"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!--Testimonials Section-->
    <section class="testimonial-section">
    	
    	<div class="oval-cut"></div>
        
    	<div class="auto-container">
        	<div class="carousel-outer">
            	<div class="icon-box"><span class="flaticon-blocks-with-angled-cuts"></span></div>
                
            	<div class="single-item-carousel">
                	<!--Slide Item-->
                    <div class="slide-item">
                    	<div class="text-content">Morbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequatSed quis condimentum quamorbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequat.</div>
                        <div class="quote-info">
                        	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure>
                            <h4>Adam Gilchrist</h4>
                            <div class="designation">CEO / Founder</div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                    	<div class="text-content">Morbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequatSed quis condimentum quamorbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequat.</div>
                        <div class="quote-info">
                        	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure>
                            <h4>Adam Gilchrist</h4>
                            <div class="designation">CEO / Founder</div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                    	<div class="text-content">Morbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequatSed quis condimentum quamorbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequat.</div>
                        <div class="quote-info">
                        	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure>
                            <h4>Adam Gilchrist</h4>
                            <div class="designation">CEO / Founder</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <!--sponsors style one-->
    <section class="sponsors-style-one">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title-one">
                <h2>Our partners</h2>
            </div>
            
    		<div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel">
                    <li class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/sponsors/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/sponsors/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/sponsors/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/sponsors/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/sponsors/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/sponsors/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/sponsors/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/sponsors/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/sponsors/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/sponsors/5.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <!--Fluid Section Two-->
    <section class="fluid-section-two">
        
    	<div class="outer-box clearfix">
        	<!--Left Column-->
            <div class="left-column">
            	<div class="clearfix">
                    <div class="inner-box">
                        <h5>Newsletter</h5>
                    	<h3>Stay tune for updates</h3>
                        
                        <div class="subscribe-form">
                        	<form method="post" action="contact.html">
                            	<div class="form-group">
                                	<input type="email" name="email" value="" placeholder="Enter Your Email" required>
                                    <button type="submit" class="theme-btn btn-style-three">Send Now</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>	
            
            <!--Right Column-->
            <div class="right-column">
            	<!--Map Canvas-->
                <div class="map-canvas"
                    data-zoom="10"
                    data-lat="23.815811"
                    data-lng="90.412580"
                    data-type="roadmap"
                    data-hue="#fc721e"
                    data-title="Dhaka"
                    data-content="Dhaka 1000-1200, Bangladesh<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>	
            
        </div>
    </section>
    
    
    <!--Main Footer / Footer Style One-->
    <footer class="main-footer footer-style-one">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                	
                    <!--Footer Column-->
                	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget about-widget">
                            <figure class="footer-logo"><a href="index.html"><img src="images/logo-3.png" alt=""></a></figure>
                            
                            <div class="text">
                            	<p>Vestibulum facilisis rhoncus tempor. Duis non ipsum volutpat, rhoat nacus nisi sed, pulvinar ex.</p>
                                <p>Etiam sit amet libero consea typoe, convallis odio estibulum urna.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget info-widget">
                        	<h2>KEEP IN TOUCH</h2>
                            <ul class="info">
                            	<li>Address : 44 New Design Street, Down Town,  Melbourne 005</li>
                                <li>Phone :  800 433 633 (or) 452 23 4354</li>
                                <li>Email : Stevan@Example.com</li>
                            </ul>
                        </div>
                    </div>
                    
                    
                    <!--Footer Column-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                    	<div class="footer-widget gallery-widget">
                            <h2>Instagram Feed</h2>	
                            <div class="clearfix">
                                <figure class="image"><a href="images/resource/blog-image-4.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-5.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-2.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-6.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-3.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-7.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-4.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-8.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-5.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-9.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-6.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column padd-left-60">
                    	<div class="footer-widget links-widget">
                        <h2>Featured links</h2>
                        	<div class="row clearfix">
                            	<div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul>
                                        <li><a href="index.html#">About</a></li>
                                        <li><a href="index.html#">Testimonial</a></li>
                                        <li><a href="index.html#">Team Members</a></li>
                                    </ul>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul>
                                        <li><a href="index.html#">What We Do</a></li>
                                        <li><a href="index.html#">New Products</a></li>
                                        <li><a href="index.html#">Our  Careere</a></li>
                                    </ul>
                                </div>    
                            </div>
                            <br>
                            <div class="social-links">
                            	<h3>Follow Us On:</h3>
                                <div class="links">
                                    <a href="index.html#"><span class="fa fa-facebook-official"></span></a>
                                    <a href="index.html#"><span class="fa fa-twitter"></span></a>
                                    <a href="index.html#"><span class="fa fa-google-plus"></span></a>
                                    <a href="index.html#"><span class="fa fa-instagram"></span></a>
                                    <a href="index.html#"><span class="fa fa-vimeo-square"></span></a>
                                    <a href="index.html#"><span class="fa fa-youtube-play"></span></a>
                                    <a href="index.html#"><span class="fa fa-dropbox"></span></a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container">
                    
                <!--Copyright-->
                <div class="copyright">Copyrights &copy; Warsaw 2016. All rights reserved.</div>
                
            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>
@endsection
