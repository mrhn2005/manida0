<section class="about-farm">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title-two">
                <h2>{{ __('messages.aboutus') }}</h2>
            </div>
                        
            <div class="row clearfix">
                <!--Column-->
                <div class="column col-lg-5 col-md-4 col-sm-12 col-xs-12">
                    <figure class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/food-image-1.png" alt=""></figure>
                </div>
                <!--Column-->
                <div class="column col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <div class="tabs-box tabs-style-one">
                    	<div class="row clearfix">
                        	
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <!--Tab Buttons-->
                                <ul class="tab-buttons clearfix">
                                    <li class="tab-btn" data-tab="#tab-one"><span class="txt">2012</span></li>
                                    <li class="tab-btn active-btn" data-tab="#tab-two"><span class="txt">2014</span></li>
                                    <li class="tab-btn" data-tab="#tab-three"><span class="txt">2016</span></li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <!--Tabs Content-->
                                <div class="tabs-content">
                                    
                                    <!--Tab-->
                                    <div class="tab" id="tab-one">
                                    	<h3>Have look at out beautiful farm </h3>
                                        <div class="content">
                                        	{{$content->aboutus}}
                                        </div>
                                        <h5 class="author-name">Muhibbur Rashid</h5>
                                    </div>
                                    
                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="tab-two">
                                    	<h3>Have look at out beautiful farm </h3>
                                        <div class="content">
                                        	{{$content->aboutus}}
                                        </div>
                                        <h5 class="author-name">Stevan Smith</h5>
                                    </div>
                                    
                                    <!--Tab-->
                                    <div class="tab" id="tab-three">
                                    	<h3>Have look at out beautiful farm </h3>
                                        <div class="content">
                                        	{{$content->aboutus}}
                                        </div>
                                        <h5 class="author-name">Tafseer Hussain</h5>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>