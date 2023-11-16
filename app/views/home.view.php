<?php
require "parts/head.php";
?>
<body>
<!-- <div class="preloder" id="preloder">
    <div class="heart">
        <div class="heart-piece-0"></div>
        <div class="heart-piece-1"></div>
        <div class="heart-piece-2"></div>
        <div class="heart-piece-3"></div>
        <div class="heart-piece-4"></div>
        <div class="heart-piece-5"></div>
        <div class="heart-piece-6"></div>
        <div class="heart-piece-7"></div>
        <div class="heart-piece-8"></div>
        <p>loading...</p>
    </div>
</div> -->
<a href="javascript:;" id="back-to-top"><i class="fas fa-arrow-up"></i></a>
<div id="header">
    <div class="right-sidebar" id="right-sidebar">
        <button class="sidebar-close">

        </button>
        <div class="sidebar-contant">
            <h4>Address &amp; Phone</h4>
            <h5>9 Valley St. Brooklyn, NY 11203</h5>
            <h5><a href="tel:#">1-800-346-6277</a></h5>
            <div class="heart-line">
                <i class="fas fa-heart"></i>
            </div>
            <h4>Locations</h4>
            <!-- Owl Carousel-->
            <div class="sidebar-profile owl-carousel">
                <div class="item">
                    <img src="<?=IMG ?>/community-img1.jpg" alt="img" title="">
                </div>
                <div class="item">
                    <img src="<?=IMG ?>/community-img2.jpg" alt="img" title="">
                </div>
                <div class="item">
                    <img src="<?=IMG ?>/community-img3.jpg" alt="img" title="">
                </div>
                <div class="item">
                    <img src="<?=IMG ?>/community-img4.jpg" alt="img" title="">
                </div>
                <div class="item">
                    <img src="<?=IMG ?>/community-img5.jpg" alt="img" title="">
                </div>
                <div class="item">
                    <img src="<?=IMG ?>/community-img6.jpg" alt="img" title="">
                </div>
                <div class="item">
                    <img src="<?=IMG ?>/community-img7.jpg" alt="img" title="">
                </div>
                <div class="item">
                    <img src="<?=IMG ?>/community-img8.jpg" alt="img" title="">
                </div>
            </div>
            <a class="main-btn" href="contact.html">Get in Touch</a>
        </div>
    </div>
    <header class="w-100 float-start">
        <div class="main-header w-100 float-start">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6 p-0">
                        <div class="main-header-logo">
                            <a href="index.html">
                                <img src="<?=IMG ?>/logo.png" class="img-fluid" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-6 p-0">
                        <div class="main-menu w-100 float-end">
                            <div class="overlay d-block d-lg-none"></div>
                            <ul class="float-end" id="cssmenu">
                                <li class="d-block d-lg-none">
                                    <a href="javascript:;" class="b-none">
                                        <img src="<?=IMG ?>/logo.png" alt="logo">
                                    </a>
                                </li>
                                <li class="mydropdown">
                                    <a href="#">Home</a>
                                </li>
                                <li class="mydropdown">
                                    <a href="home/chisiamo">Chi Siamo</a>
                                </li>
                                <li><a href="membership.html">Membership</a></li>
                                <li class="mydropdown">
                                    <a href="javascript:;">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="maindropdown">
                                        <li><a href="shop.html" data-hover="Shop">Shop</a></li>
                                        <li><a href="shop-single.html" data-hover="Shop Single">Shop Single</a></li>
                                        <li><a href="shoping-cart.html" data-hover="Shoping Cart">Shoping Cart</a></li>
                                        <li><a href="shop-checkout.html" data-hover="Checkout">Checkout</a></li>

                                    </ul>
                                </li>
                                <li class="mydropdown">
                                    <a href="javascript:;">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="maindropdown">
                                        <li><a href="blog.html" data-hover="Blog">Blog</a></li>
                                        <li><a href="blog-single.html" data-hover="Blog Single">Blog Single</a></li>
                                    </ul>
                                </li>

                                <li class="mydropdown">
                                    <a href="javascript:;">Shortcode <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="maindropdown">
                                        <li><a href="accordion.html" data-hover="Accordion">Accordion</a></li>
                                        <li><a href="client.html" data-hover="Client">Client</a></li>
                                        <li><a href="counter.html" data-hover="Counter">Counter</a></li>
                                        <li><a href="form.html" data-hover="Form">Form</a></li>
                                        <li><a href="alert.html" data-hover="Alert">Alert</a></li>
                                        <li><a href="icon.html" data-hover="Icon">Icon</a></li>
                                        <li><a href="list.html" data-hover="List">List</a></li>
                                        <li><a href="pricing-table.html" data-hover="Pricing Table">Pricing Table</a></li>
                                        <li><a href="button.html" data-hover="Button">Button</a></li>
                                        <li><a href="tab.html" data-hover="Tabs">Tabs</a></li>
                                        <li><a href="team.html" data-hover="Team">Team</a></li>
                                        <li><a href="testimonials.html" data-hover="Testimonial">Testimonial</a></li>
                                        <li><a href="portfolio.html" data-hover="Portfolio">Portfolio</a></li>
                                        <li><a href="social-icon.html" data-hover="Social Icon">Social Icon</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li class="d-none d-lg-block">
                                    <button class="js-toggle-dark-mode" type="button">
                                        <i class="fa fa-sun-o darkSunMode" aria-hidden="true"></i>
                                        <i class="fa fa-moon-o darkMoonMode" aria-hidden="true"></i>
                                    </button>
                                </li>

                                <li class="d-none d-lg-block"><a href="javascript:;" class="sidebar-toggle"><span
                                            class="sidebar-toggle-1"></span><span
                                            class="sidebar-toggle-2"></span></a>
                                </li>
                            </ul>
                            <div class="mobToggle d-flex d-lg-none">
                                <button class="js-toggle-dark-mode" type="button">
                                    <i class="fa fa-sun-o darkSunMode" aria-hidden="true"></i>
                                    <i class="fa fa-moon-o darkMoonMode" aria-hidden="true"></i>
                                </button>
                                <div class="toggle-btn">
                                    <div class="icon-left"></div>
                                    <div class="icon-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shap">
            <img src="<?=IMG ?>/banner-shape1.png" alt="banner-shape1" class="img-fluid">
            <img src="<?=IMG ?>/banner-shape2.png" alt="banner-shape2" class="img-fluid">
        </div>
        <div class="shadow-img">
        </div>
    </header>
</div>
<section class="example">
    <article class="content">
        <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
             data-alias="classic4export" data-source="gallery"
             style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;"
                 data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-3045" data-transition="zoomout" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut" data-masterspeed="2000"
                        data-thumb="<?=IMG ?>/banner-1-100x50.jpg" data-rotate="0" data-fstransition="fade"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
                        data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4=""
                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                        data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?=IMG ?>/banner-1.jpg" alt="img" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-3045-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap;">Introducing Fervor
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-3045-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap;">Are You Waiting
                            For
                            Datting?</div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption NotGeneric-Icon   tp-resizeme" id="slide-3045-layer-8"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; cursor:default;"><i
                                class="pe-7s-refresh"></i> </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-3046" data-transition="fadetotopfadefrombottom" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1500"
                        data-thumb="<?=IMG ?>/banner-2-100x50.jpg" data-rotate="0" data-saveperformance="off"
                        data-title="Find Match" data-param1="" data-param2="" data-param3="" data-param4=""
                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                        data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?=IMG ?>/banner-2.jpg" alt="img" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-3"
                             id="slide-3046-layer-1" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']"
                             data-lineheight="['70','70','70','50']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap;">Find Match</div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-2"
                             id="slide-3046-layer-4" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['52','52','52','51']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap;">Meet Big And
                            Beautiful Love
                            Here!</div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-1"
                             id="slide-3046-layer-8" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: nowrap; cursor:default;">
                            <i class="pe-7s-mouse"></i>
                        </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-8" id="slide-3046-layer-10"
                             data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']"
                             data-y="['top','top','top','top']" data-voffset="['632','632','632','632']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                             data-responsive_offset="on"
                             data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 11;border-width:0px;">
                            <div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-startdeg="-20"
                                 data-enddeg="360" data-speed="35" data-origin="50% 50%"><img
                                    src="<?=IMG ?>/blurflake4.png" alt="img"
                                    data-ww="['240px','240px','240px','240px']"
                                    data-hh="['240px','240px','240px','240px']" width="240" height="240"
                                    data-no-retina> </div>
                        </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="slide-3046-layer-11"
                             data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']"
                             data-y="['top','top','top','top']" data-voffset="['487','487','487','487']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                             data-responsive_offset="on"
                             data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 12;border-width:0px;">
                            <div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px"
                                 data-origin="50% 50%"><img src="<?=IMG ?>/blurflake3.png" alt="img"
                                                            data-ww="['170px','170px','170px','170px']"
                                                            data-hh="['170px','170px','170px','170px']" width="170" height="170"
                                                            data-no-retina> </div>
                        </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-3046-layer-12"
                             data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']"
                             data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                             data-responsive_offset="on"
                             data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 13;border-width:0px;">
                            <div class="rs-looped rs-rotate" data-easing="Power2.easeInOut" data-startdeg="-20"
                                 data-enddeg="360" data-speed="20" data-origin="50% 50%"><img
                                    src="<?=IMG ?>/blurflake2.png" alt="img" data-ww="['50px','50px','50px','50px']"
                                    data-hh="['51px','51px','51px','51px']" width="50" height="51" data-no-retina>
                            </div>
                        </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-6" id="slide-3046-layer-13"
                             data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']"
                             data-y="['top','top','top','top']" data-voffset="['216','216','216','216']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                             data-responsive_offset="on"
                             data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 14;border-width:0px;">
                            <div class="rs-looped rs-wave" data-speed="4" data-angle="0" data-radius="10"
                                 data-origin="50% 50%"><img src="<?=IMG ?>/blurflake1.png" alt="img"
                                                            data-ww="['120px','120px','120px','120px']"
                                                            data-hh="['120px','120px','120px','120px']" width="120" height="120"
                                                            data-no-retina> </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-3047" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                        data-masterspeed="2000" data-thumb="<?=IMG ?>/banner-3-100x50.jpg" data-rotate="0"
                        data-saveperformance="off" data-title="Create Profile" data-param1="" data-param2=""
                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                        data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?=IMG ?>/banner-3.jpg" alt="img" data-bgposition="center center" data-kenburns="on"
                             data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100"
                             data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                             data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme" id="slide-3047-layer-9"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                             data-width="500" data-height="140" data-whitespace="nowrap" data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 15;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);border-width:0px;">
                        </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-3047-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 16; white-space: nowrap;">Create Profile
                        </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-3047-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 17; white-space: nowrap;">IN A SMOOTH WAY
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-3049" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                        data-masterspeed="2000" data-thumb="<?=IMG ?>/banner-4-100x50.jpg" data-rotate="0"
                        data-saveperformance="off" data-title="Start Dating" data-param1="" data-param2=""
                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                        data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?=IMG ?>/banner-4.jpg" alt="img" data-bgposition="center center" data-kenburns="on"
                             data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100"
                             data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500"
                             data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 18 -->
                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-3049-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.1,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 22; white-space: nowrap;">Start Dating
                        </div>

                        <!-- LAYER NR. 19 -->
                        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-3049-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 23; white-space: nowrap;">GET SLIDER
                            REVOLUTION
                            TODAY </div>

                        <!-- LAYER NR. 20 -->
                        <div class="tp-caption NotGeneric-Icon   tp-resizeme" id="slide-3049-layer-8"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                             data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 24; white-space: nowrap;cursor:default;"><i
                                class="pe-7s-diamond"></i> </div>
                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </article>
</section>
<div class="dating-wapper w-100 float-start">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-12 col-12 order-lg-1">
                <div class="dating-content">
                    <div class="heading">
                        <h2>Dating <strong>BetterThan</strong> Ever Before</h2>
                        <div class="heart-line">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <p>This theme extends default WordPress profiles. User can edit profile fields, upload photos,
                        add favorites, view gifts and read messages, edit privacy settings without even seeing .
                        <br>
                        <br>
                        This theme extends default WordPress profiles. User can edit profile fields, upload photos,
                        add favorites, view gifts and read messages, edit privacy settings without even seeing the
                        WordPress back-end.
                        This theme extends default WordPress profiles. User can edit profile fields, upload photos,
                        add favorites, view gifts
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 order-lg-12">
                <img src="<?=IMG ?>/dating-img.png" alt="dating-img" class="img-fluid">
            </div>
        </div>
        <div class="take-a-change w-100 float-start ">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="change-box w-100 float-start">
                        <label>I am a</label>
                        <div class="custum-select">
                            <select class="">
                                <option value="" data-display-text="Man-Looking-a-woman">Man Looking a woman
                                </option>
                                <option value="Woman-Looking-a-Man">Woman Looking a Man</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="change-box change-box-res w-100 float-start">
                        <label class="label-2nd">Between Ages:</label>
                        <div class="custum-range">
                            <div class="price-range-slider"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="main-btn-2">
                        <a href="searchbar.html" class="main-btn">Find A Match</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="counter-section bg-color2 w-100 float-start">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="counter-box">
                    <div class="counter-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xml:space="preserve" viewBox="0 0 2048 2048">
								<defs>
                                    <linearGradient id="header-shape-gradient" x1="17.5001" y1="32" x2="17.5001"
                                                    y2="2.9711">
                                        <stop offset="0" stop-color="var(--color-stop)" />
                                        <stop offset="1" stop-color="var(--color-bot)" />
                                    </linearGradient>
                                </defs>
                            <g>

                                <g>
                                    <polygon id="_460791224"
                                             points="1055.21,882.466 1055.21,1168.8 1007.21,1168.8 1007.21,882.466 " />
                                    <polygon
                                        points="1568.33,1168.8 1568.33,1049.63 479.671,1049.63 479.671,1168.8 431.671,1168.8 431.671,1025.9 431.671,1025.63 431.671,1001.63 455.671,1001.63 1592.33,1001.63 1616.33,1001.63 1616.33,1025.63 1616.33,1168.8 " />
                                    <g>
                                        <path
                                            d="M961.169 614.373l15.241 0c6.43465,0 12.2776,2.53465 16.5874,6.6567 5.17087,4.07008 10.5106,7.30985 15.9354,9.49961 4.88504,1.97244 9.92717,3.05551 15.0662,3.05551 5.13898,0 10.1811,-1.08307 15.0662,-3.05551 5.91615,-2.38819 11.7295,-6.02599 17.3351,-10.6252l15.1878 18.4689 -15.2221 -18.5551c4.46811,-3.66496 9.86221,-5.44725 15.2221,-5.44489l0.056693 0 15.1854 0c37.6548,0 71.8713,15.3874 96.6615,40.1776 24.789,24.7902 40.1776,59.0079 40.1776,96.6627l0 67.7056c0,13.2543 -10.7457,24 -24,24l-351.34 0c-13.2543,0 -24,-10.7457 -24,-24l0 -67.7056c0,-37.6548 15.3874,-71.8725 40.1776,-96.6627 24.7902,-24.7902 59.0079,-40.1776 96.6627,-40.1776zm7.27323 48l-7.27323 0c-24.4051,0 -46.6122,10.0028 -62.7249,26.1154 -16.1126,16.1126 -26.1154,38.3197 -26.1154,62.7249l0 43.7055 303.34 0 0 -43.7055c0,-24.4051 -10.0028,-46.6111 -26.1154,-62.7249 -16.1126,-16.1126 -38.3185,-26.1154 -62.7237,-26.1154l-7.27442 0c-7.2319,5.15433 -14.8075,9.41694 -22.6772,12.5941 -10.5827,4.27205 -21.5799,6.61772 -32.8796,6.61772 -11.2996,0 -22.2969,-2.34567 -32.8796,-6.61772 -7.86969,-3.17835 -15.4453,-7.43977 -22.6772,-12.5941z" />
                                        <path
                                            d="M1024 286.624c38.9705,0 74.6729,9.70985 100.445,30.3177 24.6543,19.715 39.7099,48.3154 39.7099,86.5654 0,39.267 -17.1095,91.6076 -44.1827,130.885 -24.5528,35.6197 -57.8587,61.6311 -95.9717,61.6311 -38.113,0 -71.419,-26.0114 -95.9717,-61.6311 -27.0732,-39.2776 -44.1827,-91.6182 -44.1827,-130.885 0,-38.25 15.0555,-66.8504 39.7099,-86.5654 25.7717,-20.6079 61.4741,-30.3177 100.445,-30.3177zm70.6312 67.6312c-16.6866,-13.3441 -41.9126,-19.6311 -70.6312,-19.6311 -28.7185,0 -53.9445,6.28701 -70.6312,19.6311 -13.363,10.6854 -21.5232,26.8925 -21.5232,49.252 0,30.6378 13.7705,72.0875 35.5583,103.699 16.2602,23.5902 36.3177,40.8177 56.5961,40.8177 20.2784,0 40.3359,-17.2276 56.5961,-40.8177 21.7878,-31.611 35.5583,-73.0607 35.5583,-103.699 0,-22.3595 -8.16024,-38.5666 -21.5232,-49.252z" />
                                    </g>
                                    <g>
                                        <path
                                            d="M1529.5 1532.83l15.241 0c6.43229,0 12.2728,2.52992 16.5815,6.64961 5.17323,4.07126 10.513,7.31457 15.9425,9.50552 4.88504,1.97244 9.92835,3.05551 15.0662,3.05551 5.1378,0 10.1799,-1.08307 15.0662,-3.05551 5.91733,-2.38819 11.7295,-6.02599 17.3351,-10.624l15.1878 18.4689 -15.2209 -18.5563c4.46693,-3.66496 9.86103,-5.44725 15.2209,-5.4437l0.0578741 0 15.1831 0c37.6548,0 71.8725,15.3874 96.6627,40.1776 24.7902,24.7902 40.1776,59.0067 40.1776,96.6615l0 67.7056c0,13.2543 -10.7457,24 -24,24l-351.34 0c-13.2543,0 -24,-10.7457 -24,-24l0 -67.7056c0,-37.6548 15.3874,-71.8713 40.1776,-96.6615 24.7902,-24.7902 59.0067,-40.1776 96.6615,-40.1776zm7.27323 48l-7.27323 0c-24.4051,0 -46.6111,10.0028 -62.7237,26.1154 -16.1126,16.1126 -26.1154,38.3185 -26.1154,62.7237l0 43.7055 303.34 0 0 -43.7055c0,-24.4051 -10.0028,-46.6111 -26.1154,-62.7237 -16.1126,-16.1126 -38.3197,-26.1154 -62.7249,-26.1154l-7.27442 0c-7.2319,5.15552 -14.8063,9.41694 -22.676,12.5929 -10.5839,4.27205 -21.5823,6.61772 -32.8796,6.61772 -11.2984,0 -22.2969,-2.34567 -32.8796,-6.61772 -7.87087,-3.17599 -15.4453,-7.43741 -22.6784,-12.5929z" />
                                        <path
                                            d="M1592.33 1205.08c38.9705,0 74.6729,9.70985 100.445,30.3177 24.6543,19.715 39.7099,48.3154 39.7099,86.5654 0,39.267 -17.1095,91.6087 -44.1827,130.886 -24.5528,35.6197 -57.8587,61.6311 -95.9717,61.6311 -38.113,0 -71.4201,-26.0114 -95.9729,-61.6311 -27.0732,-39.2776 -44.1827,-91.6194 -44.1827,-130.886 0,-38.25 15.0543,-66.8504 39.7099,-86.5666 25.7717,-20.6079 61.4764,-30.3166 100.446,-30.3166zm70.6312 67.6312c-16.6866,-13.3441 -41.9126,-19.6311 -70.6312,-19.6311 -28.7185,0 -53.9457,6.28701 -70.6323,19.6299 -13.363,10.6854 -21.5232,26.8925 -21.5232,49.2532 0,30.6378 13.7705,72.0886 35.5583,103.7 16.2602,23.5902 36.3177,40.8177 56.5973,40.8177 20.2784,0 40.3359,-17.2276 56.5961,-40.8177 21.7878,-31.611 35.5583,-73.0619 35.5583,-103.7 0,-22.3595 -8.16024,-38.5666 -21.5232,-49.252z" />
                                    </g>
                                    <g>
                                        <path
                                            d="M961.17 1532.83l15.241 0c6.43229,0 12.2728,2.52992 16.5815,6.64961 5.17323,4.07126 10.513,7.31457 15.9414,9.50552 4.88622,1.97244 9.92835,3.05551 15.0662,3.05551 5.1378,0 10.1799,-1.08307 15.0662,-3.05551 5.91733,-2.38819 11.7295,-6.02599 17.3351,-10.624l15.1878 18.4689 -15.2209 -18.5563c4.46693,-3.66496 9.86103,-5.44725 15.2209,-5.4437l0.0578741 0 15.1843 0c37.6548,0 71.8713,15.3874 96.6615,40.1776 24.7902,24.7902 40.1776,59.0067 40.1776,96.6615l0 67.7056c0,13.2543 -10.7457,24 -24,24l-351.34 0c-13.2543,0 -24,-10.7457 -24,-24l0 -67.7056c0,-37.6548 15.3874,-71.8713 40.1776,-96.6615 24.7902,-24.7902 59.0079,-40.1776 96.6627,-40.1776zm7.27442 48l-7.27442 0c-24.4051,0 -46.6122,10.0028 -62.7249,26.1154 -16.1126,16.1126 -26.1154,38.3185 -26.1154,62.7237l0 43.7055 303.34 0 0 -43.7055c0,-24.4051 -10.0028,-46.6111 -26.1154,-62.7237 -16.1126,-16.1126 -38.3185,-26.1154 -62.7237,-26.1154l-7.2756 0c-7.2319,5.15552 -14.8063,9.41694 -22.676,12.5929 -10.5839,4.27205 -21.5823,6.61772 -32.8796,6.61772 -11.2973,0 -22.2957,-2.34567 -32.8796,-6.61772 -7.86969,-3.17599 -15.4441,-7.43741 -22.676,-12.5929z" />
                                        <path
                                            d="M1024 1205.08c38.9705,0 74.6729,9.70985 100.445,30.3177 24.6543,19.715 39.7099,48.3154 39.7099,86.5654 0,39.267 -17.1095,91.6087 -44.1827,130.886 -24.5528,35.6197 -57.8587,61.6311 -95.9717,61.6311 -38.113,0 -71.419,-26.0114 -95.9717,-61.6311 -27.0732,-39.2776 -44.1827,-91.6194 -44.1827,-130.886 0,-38.25 15.0555,-66.8504 39.7099,-86.5654 25.7717,-20.6079 61.4741,-30.3177 100.445,-30.3177zm70.6312 67.6312c-16.6866,-13.3441 -41.9126,-19.6311 -70.6312,-19.6311 -28.7185,0 -53.9445,6.28701 -70.6312,19.6311 -13.363,10.6854 -21.5232,26.8925 -21.5232,49.252 0,30.6378 13.7705,72.0886 35.5583,103.7 16.2602,23.5902 36.3177,40.8177 56.5961,40.8177 20.2784,0 40.3359,-17.2276 56.5961,-40.8177 21.7878,-31.611 35.5583,-73.0619 35.5583,-103.7 0,-22.3595 -8.16024,-38.5666 -21.5232,-49.252z" />
                                    </g>
                                    <g>
                                        <path
                                            d="M392.84 1532.83l15.241 0c6.43229,0 12.2728,2.52992 16.5815,6.64961 5.17323,4.07126 10.513,7.31457 15.9414,9.50552 4.88622,1.97244 9.92835,3.05551 15.0662,3.05551 5.13898,0 10.1811,-1.08307 15.0662,-3.05551 5.91733,-2.38819 11.7295,-6.02599 17.3351,-10.624l15.1878 18.4689 -15.2209 -18.5563c4.46693,-3.66496 9.86103,-5.44725 15.2209,-5.4437l0.0578741 0 15.1843 0c37.6548,0 71.8713,15.3874 96.6615,40.1776 24.7902,24.7902 40.1776,59.0067 40.1776,96.6615l0 67.7056c0,13.2543 -10.7457,24 -24,24l-351.34 0c-13.2543,0 -24,-10.7457 -24,-24l0 -67.7056c0,-37.6548 15.3874,-71.8713 40.1776,-96.6615 24.7902,-24.7902 59.0079,-40.1776 96.6627,-40.1776zm7.27442 48l-7.27442 0c-24.4051,0 -46.6122,10.0028 -62.7249,26.1154 -16.1126,16.1126 -26.1154,38.3185 -26.1154,62.7237l0 43.7055 303.34 0 0 -43.7055c0,-24.4051 -10.0028,-46.6111 -26.1154,-62.7237 -16.1126,-16.1126 -38.3185,-26.1154 -62.7237,-26.1154l-7.2756 0c-7.23071,5.15552 -14.8051,9.41694 -22.676,12.5929 -10.5827,4.27205 -21.5799,6.61772 -32.8796,6.61772 -11.2973,0 -22.2957,-2.34567 -32.8796,-6.61772 -7.86969,-3.17599 -15.4441,-7.43741 -22.676,-12.5929z" />
                                        <path
                                            d="M455.67 1205.08c38.9693,0 74.6753,9.70985 100.445,30.3177 24.6567,19.715 39.7111,48.3154 39.7111,86.5654 0,39.267 -17.1095,91.6076 -44.1827,130.885 -24.5516,35.6197 -57.8599,61.6323 -95.9729,61.6323 -38.113,0 -71.419,-26.0114 -95.9717,-61.6311 -27.0732,-39.2776 -44.1827,-91.6194 -44.1827,-130.886 0,-38.25 15.0555,-66.8504 39.7099,-86.5654 25.7717,-20.6079 61.4741,-30.3177 100.445,-30.3177zm70.6312 67.6312c-16.6854,-13.3441 -41.9126,-19.6311 -70.6312,-19.6311 -28.7185,0 -53.9445,6.28701 -70.6312,19.6311 -13.363,10.6854 -21.5232,26.8925 -21.5232,49.252 0,30.6378 13.7705,72.0886 35.5583,103.7 16.2602,23.5902 36.3177,40.8177 56.5961,40.8177 20.2795,0 40.337,-17.2288 56.5973,-40.8189 21.7878,-31.611 35.5583,-73.0607 35.5583,-103.699 0,-22.3595 -8.16142,-38.5666 -21.5244,-49.252z" />
                                    </g>
                                </g>
                            </g>
							</svg>
                    </div>
                    <div class="counter-text">
                        <div class="counter h2" data-count="157"></div>
                        <p>Members in total</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="counter-box">
                    <div class="counter-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 217.16 209.23">
                            <defs>
                                <linearGradient id="header-shape-gradient2" x1="17.5001" y1="32" x2="17.5001"
                                                y2="2.9711">
                                    <stop offset="0" stop-color="var(--color-stop)" />
                                    <stop offset="1" stop-color="var(--color-bot)" />
                                </linearGradient>
                            </defs>
                            <g data-name="Layer 2">
                                <g data-name="Layer 1">
                                    <path
                                        d="M39.92,6.58H37V3.63a3.63,3.63,0,0,0-7.26,0V6.58H26.77a3.63,3.63,0,1,0,0,7.26h2.95v2.95a3.63,3.63,0,0,0,7.26,0V13.84h2.95a3.63,3.63,0,0,0,0-7.26Z" />
                                    <path
                                        d="M187.66,14.83h-2.95V11.89a3.63,3.63,0,0,0-7.26,0v2.95H174.5a3.63,3.63,0,1,0,0,7.26h2.95V25a3.63,3.63,0,0,0,7.26,0V22.1h2.95a3.63,3.63,0,0,0,0-7.26Z" />
                                    <path
                                        d="M182.24,199.85h-2v-2a2.46,2.46,0,0,0-4.92,0v2h-2a2.46,2.46,0,1,0,0,4.92h2v2a2.46,2.46,0,0,0,4.92,0v-2h2a2.46,2.46,0,0,0,0-4.92Z" />
                                    <path
                                        d="M19.13,76.75V64.51a1.24,1.24,0,0,1,1.24-1.24h2.25a1.24,1.24,0,0,1,1.2.92L25,68.78a1.24,1.24,0,0,0,2.4,0l1.2-4.58a1.24,1.24,0,0,1,1.2-.92H32.1a1.24,1.24,0,0,1,1.24,1.24V76.75A1.24,1.24,0,0,1,32.1,78h-.28a1.24,1.24,0,0,1-1.24-1.24V66.4L27.9,77.05a1.24,1.24,0,0,1-1.2.94h-.93a1.24,1.24,0,0,1-1.2-.94L21.89,66.4V76.75A1.24,1.24,0,0,1,20.65,78h-.28A1.24,1.24,0,0,1,19.13,76.75Z" />
                                    <path
                                        d="M36.3,76.75V64.51a1.24,1.24,0,0,1,1.24-1.24H46a1.24,1.24,0,0,1,1.24,1.24h0A1.24,1.24,0,0,1,46,65.76H40.51A1.24,1.24,0,0,0,39.27,67v.78A1.24,1.24,0,0,0,40.51,69h4.91a1.24,1.24,0,0,1,1.24,1.24h0a1.24,1.24,0,0,1-1.24,1.24H40.51a1.24,1.24,0,0,0-1.24,1.24v1.53a1.24,1.24,0,0,0,1.24,1.24h5.74a1.24,1.24,0,0,1,1.24,1.24h0A1.24,1.24,0,0,1,46.25,78H37.54A1.24,1.24,0,0,1,36.3,76.75Z" />
                                    <path
                                        d="M50,76.75V64.51a1.24,1.24,0,0,1,1.24-1.24h2.25a1.24,1.24,0,0,1,1.2.92l1.22,4.59a1.24,1.24,0,0,0,2.4,0l1.2-4.58a1.24,1.24,0,0,1,1.2-.92h2.26a1.24,1.24,0,0,1,1.24,1.24V76.75A1.24,1.24,0,0,1,62.95,78h-.28a1.24,1.24,0,0,1-1.24-1.24V66.4L58.74,77.05a1.24,1.24,0,0,1-1.2.94h-.93a1.24,1.24,0,0,1-1.2-.94L52.73,66.4V76.75A1.24,1.24,0,0,1,51.49,78h-.28A1.24,1.24,0,0,1,50,76.75Z" />
                                    <path
                                        d="M67.15,64.51a1.24,1.24,0,0,1,1.24-1.24H73a17,17,0,0,1,2.61.15,3.83,3.83,0,0,1,1.54.61,3.78,3.78,0,0,1,1.13,1.23A3.33,3.33,0,0,1,78.76,67a3.49,3.49,0,0,1-2.07,3.19,3.87,3.87,0,0,1,2.07,1.34,3.54,3.54,0,0,1,.72,2.22,4.37,4.37,0,0,1-.47,2,3.93,3.93,0,0,1-1.28,1.52,4.21,4.21,0,0,1-2,.7Q75,78,72.16,78H68.39a1.24,1.24,0,0,1-1.24-1.24Zm3,1.21v3.4h1.95q1.74,0,2.16-.05a2,2,0,0,0,1.2-.53,1.55,1.55,0,0,0,.44-1.15,1.61,1.61,0,0,0-.38-1.11,1.7,1.7,0,0,0-1.12-.52q-.44-.05-2.54-.05Zm0,5.85v2.7a1.24,1.24,0,0,0,1.24,1.24h1.51a13.44,13.44,0,0,0,2-.09A1.84,1.84,0,0,0,76,74.83a1.81,1.81,0,0,0,.42-1.25,1.92,1.92,0,0,0-.32-1.12,1.82,1.82,0,0,0-.93-.67,10.1,10.1,0,0,0-2.64-.21Z" />
                                    <path
                                        d="M82,76.75V64.51a1.24,1.24,0,0,1,1.24-1.24h8.43a1.24,1.24,0,0,1,1.24,1.24h0a1.24,1.24,0,0,1-1.24,1.24H86.2A1.24,1.24,0,0,0,85,67v.78A1.24,1.24,0,0,0,86.2,69h4.91a1.24,1.24,0,0,1,1.24,1.24h0a1.24,1.24,0,0,1-1.24,1.24H86.2A1.24,1.24,0,0,0,85,72.74v1.53a1.24,1.24,0,0,0,1.24,1.24h5.74a1.24,1.24,0,0,1,1.24,1.24h0A1.24,1.24,0,0,1,91.94,78H83.23A1.24,1.24,0,0,1,82,76.75Z" />
                                    <path
                                        d="M95.71,76.75V64.51A1.24,1.24,0,0,1,97,63.27h5a10.71,10.71,0,0,1,3.43.4,3.38,3.38,0,0,1,1.71,1.41,4.24,4.24,0,0,1,.64,2.32,3.93,3.93,0,0,1-1,2.74,4.68,4.68,0,0,1-2.91,1.36,6.93,6.93,0,0,1,1.59,1.23,16.77,16.77,0,0,1,1.69,2.39l1.8,2.87h-2.89a1.24,1.24,0,0,1-1-.55l-1.78-2.65a20.78,20.78,0,0,0-1.57-2.16,2.28,2.28,0,0,0-.89-.61,4.9,4.9,0,0,0-1.5-.17h-.6v4.9A1.24,1.24,0,0,1,97.44,78H97A1.24,1.24,0,0,1,95.71,76.75Zm3-7.25h2.2a11.35,11.35,0,0,0,2.67-.18,1.6,1.6,0,0,0,.83-.62,1.92,1.92,0,0,0,.3-1.1,1.76,1.76,0,0,0-.4-1.2,1.82,1.82,0,0,0-1.12-.58q-.36-.05-2.17-.05H98.68Z" />
                                    <rect x="126.33" y="91.96" width="69.33" height="69.33" rx="2.83" ry="2.83"
                                          stroke-width="6" fill="none" />
                                    <circle cx="161" cy="118.03" r="8.59" />
                                    <path
                                        d="M161,135.29h0a13,13,0,0,1,13,13v13a0,0,0,0,1,0,0H148a0,0,0,0,1,0,0v-13A13,13,0,0,1,161,135.29Z" />
                                    <rect x="19.13" y="97.12" width="83.2" height="8" rx="4" ry="4" />
                                    <rect x="19.13" y="123.26" width="83.2" height="8" rx="4" ry="4" />
                                    <rect x="19.13" y="149.39" width="83.2" height="8" rx="4" ry="4" />
                                    <line x1="214.16" y1="56.62" x2="148" y2="56.62" stroke-width="6" />
                                    <line x1="130.83" y1="56.62" x2="142.33" y2="56.62" stroke-width="6" />
                                    <line x1="214.16" y1="77.99" x2="163.33" y2="77.99" stroke-width="6" />
                                    <circle cx="42.91" cy="180.85" r="2.9" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="counter-text">
                        <div class="counter h2 counter-pluseicon" data-count="21"></div>
                        <p>Members </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="counter-box">
                    <div class="counter-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44.943" height="48.002"
                             viewBox="0 0 44.943 48.002">
                            <defs>
                                <linearGradient id="header-shape-gradient3" x1="17.5001" y1="32" x2="17.5001"
                                                y2="2.9711">
                                    <stop offset="0" stop-color="var(--color-stop)" />
                                    <stop offset="1" stop-color="var(--color-bot)" />
                                </linearGradient>
                            </defs>
                            <g>
                                <path
                                    d="M44.8,32.327a.723.723,0,0,0-.586-.3h-3.85v-.434a6.084,6.084,0,0,0-3.632-5.461c-.517-.244-1.056-.471-1.613-.689l1.157-1.523a.73.73,0,0,0-.074-.963c-3.152-3.055-2.675-4.6-1.952-6.945a14.023,14.023,0,0,0,.8-4.39,10.965,10.965,0,0,0-3.147-8.259C28.216-.184,22.676-.007,22.5.005,22.27,0,16.73-.183,13.037,3.364A10.961,10.961,0,0,0,9.89,11.623a14.023,14.023,0,0,0,.8,4.39c.723,2.344,1.2,3.891-1.953,6.945a.73.73,0,0,0-.077.959L9.809,25.45c-.554.217-1.09.443-1.6.686a6.079,6.079,0,0,0-3.626,5.455v.438H.727a.729.729,0,0,0-.693.947L4.613,47.492a.727.727,0,0,0,.693.51H39.638a.727.727,0,0,0,.693-.51L44.91,32.976A.727.727,0,0,0,44.8,32.327ZM12.082,15.585a12.661,12.661,0,0,1-.738-3.962,9.567,9.567,0,0,1,2.694-7.2C17.276,1.3,22.393,1.454,22.5,1.458c.044,0,5.146-.17,8.4,2.955a9.571,9.571,0,0,1,2.7,7.21,12.656,12.656,0,0,1-.738,3.962c-.752,2.438-1.405,4.557,1.875,7.961l-1.046,1.377c-.347-.115-.7-.229-1.069-.336-.606-.18-1.219-.35-1.841-.5a4.586,4.586,0,0,1-3.388-3.223,10.991,10.991,0,0,0,2.6-7.3A10.906,10.906,0,0,0,29.6,10.6a.73.73,0,0,0-.537-.512,6.072,6.072,0,0,1-4.216-3.361.727.727,0,0,0-1.238-.2c-2.812,3.4-7.524,3.539-7.572,3.541a.73.73,0,0,0-.686.527,10.892,10.892,0,0,0-.391,2.967,11,11,0,0,0,2.6,7.3,4.441,4.441,0,0,1-3.4,3.223c-.628.148-1.233.316-1.844.5q-.552.163-1.074.34L10.206,23.55C13.488,20.142,12.834,18.023,12.082,15.585Zm6.656,6.371a6.044,6.044,0,0,0,7.477-.008,5.884,5.884,0,0,0,2.606,2.9c-.346,2.064-3.164,3.791-6.351,3.791s-6.008-1.719-6.351-3.771A5.779,5.779,0,0,0,18.738,21.956Zm-2.326-8.389a9.718,9.718,0,0,1,.213-2.076,12.541,12.541,0,0,0,7.39-3.258A7.575,7.575,0,0,0,28.3,11.4a9.771,9.771,0,0,1,.233,2.171c0,4.536-2.719,8.225-6.061,8.225S16.412,18.1,16.412,13.567ZM6.033,31.591A4.641,4.641,0,0,1,8.827,27.45a27.1,27.1,0,0,1,3.9-1.465c.584-.174,1.163-.336,1.767-.479.091-.021.177-.055.267-.08.647,2.646,3.856,4.664,7.714,4.664,3.78,0,7.032-2.055,7.706-4.672.053.016.1.037.156.053a1.009,1.009,0,0,0,.111.031c.6.143,1.183.3,1.763.477a27.137,27.137,0,0,1,3.905,1.469,4.643,4.643,0,0,1,2.8,4.146v.434H6.033ZM39.1,46.546H5.839L1.72,33.483h41.5Z" />
                                <path
                                    d="M17.056,40.632c0,1.8,2.744,2.748,5.454,2.748s5.454-.943,5.454-2.748C27.964,37.025,17.056,37.025,17.056,40.632Zm5.454,1.293c-2.639,0-4-.906-4-1.293s1.361-1.293,4-1.293,4,.906,4,1.293S25.149,41.925,22.51,41.925Z" />
                            </g>
                        </svg>
                    </div>
                    <div class="counter-text">
                        <div class="counter h2" data-count="1997"></div>
                        <p>Women</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="counter-box">
                    <div class="counter-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <defs>
                                <linearGradient id="header-shape-gradient4" x1="17.5001" y1="32" x2="17.5001"
                                                y2="2.9711">
                                    <stop offset="0" stop-color="var(--color-stop)" />
                                    <stop offset="1" stop-color="var(--color-bot)" />
                                </linearGradient>
                            </defs>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M4.74949 15.1618C5.21238 15.4631 5.34343 16.0825 5.04219 16.5454C4.55617 17.2923 4.22492 18.1208 4.08106 19H6C6.55228 19 7 19.4477 7 20C7 20.5523 6.55228 21 6 21H3C2.44772 21 2 20.5523 2 20C2 18.3375 2.50107 16.7835 3.36589 15.4545C3.66714 14.9917 4.28659 14.8606 4.74949 15.1618ZM19.2505 15.1618C19.7134 14.8606 20.3329 14.9917 20.6341 15.4545C21.4989 16.7835 22 18.3375 22 20C22 20.5523 21.5523 21 21 21H18C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19H19.9189C19.7751 18.1208 19.4438 17.2923 18.9578 16.5454C18.6566 16.0825 18.7876 15.4631 19.2505 15.1618Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12 4C10.8954 4 10 4.89543 10 6C10 7.10457 10.8954 8 12 8C13.1046 8 14 7.10457 14 6C14 4.89543 13.1046 4 12 4ZM8 6C8 3.79086 9.79086 2 12 2C14.2091 2 16 3.79086 16 6C16 8.20914 14.2091 10 12 10C9.79086 10 8 8.20914 8 6Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.25033 12.3382C5.44015 12.1232 5.71317 12 6.00001 12H18C18.2868 12 18.5599 12.1232 18.7497 12.3382C18.9395 12.5532 19.0279 12.8394 18.9923 13.124L17.9923 21.124C17.9297 21.6245 17.5043 22 17 22H7.00001C6.49568 22 6.07028 21.6245 6.00773 21.124L5.00773 13.124C4.97215 12.8394 5.0605 12.5532 5.25033 12.3382ZM7.13279 14L7.88279 20H16.1172L16.8672 14H7.13279Z" />
                        </svg>
                    </div>
                    <div class="counter-text">
                        <div class="counter h2 counter-pluseicon" data-count="47"></div>
                        <p>Men</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="doctor-love w-100 float-start">
    <div class="container">
        <div class="heading center-heading">
            <h2>Welcome to This <strong>Great invention of</strong> Doctor Love!</h2>
            <div class="heart-line">
                <i class="fas fa-heart"></i>
            </div>
            <p>This theme extends default WordPress profiles. User can edit profile fields, upload photos, add
                favorites,<br> view gifts and read messages, edit privacy settings without even seeing .</p>
        </div>
        <div class="love-calculater w-100 float-start">
            <div class="love-result">
                <svg class="circle d-none d-lg-block" xmlns="http://www.w3.org/2000/svg" width="620" height="300">
                    <defs>
                        <linearGradient id="linearColors1">
                            <stop offset="0%" stop-color="#fa2456" />
                            <stop offset="100%" stop-color="#fa2456" />
                        </linearGradient>
                    </defs>
                    <circle class="circle__path" cy="300" cx="310" r="300" stroke="url(#linearColors1)"></circle>
                </svg>
                <img src="<?=IMG ?>/heart-img.png" alt="heart-img" class="img-fluid d-block d-lg-none">
                <h2 class="" id="resultLabel"> 0%</h2>
            </div>
            <div class="love-calculater-box w-100 float-start">
                <div class="enter-name enter-name1">
                    <label for="nameInput1">Your Name</label>
                    <input type="text" id="nameInput1" placeholder="Full Name" />
                </div>
                <div class="enter-name enter-name2">
                    <label for="nameInput2">Your Crush</label>
                    <input type="text" id="nameInput2" placeholder="Crush Name" />
                </div>
                <div class="calculat-love w-100 float-start">
                    <button class="main-btn" onClick="magicHappens()">Calculate love</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="how-it-work bg-color2 w-100 float-start">
    <div class="container">
        <div class="heading center-heading">
            <h2>How <strong>It</strong> Works</h2>
            <div class="heart-line">
                <i class="fas fa-heart"></i>
            </div>
            <p>This theme extends default WordPress profiles. User can edit profile fields, upload photos, add
                favorites,<br> view gifts and read messages, edit privacy settings without even seeing .</p>
        </div>
        <div class="w-100 float-start">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="counter-box">
                        <div class="counter-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <defs>
                                    <linearGradient id="header-shape-gradient5" x1="17.5001" y1="32" x2="17.5001"
                                                    y2="2.9711">
                                        <stop offset="0" stop-color="var(--color-stop)" />
                                        <stop offset="1" stop-color="var(--color-bot)" />
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M4.74949 15.1618C5.21238 15.4631 5.34343 16.0825 5.04219 16.5454C4.55617 17.2923 4.22492 18.1208 4.08106 19H6C6.55228 19 7 19.4477 7 20C7 20.5523 6.55228 21 6 21H3C2.44772 21 2 20.5523 2 20C2 18.3375 2.50107 16.7835 3.36589 15.4545C3.66714 14.9917 4.28659 14.8606 4.74949 15.1618ZM19.2505 15.1618C19.7134 14.8606 20.3329 14.9917 20.6341 15.4545C21.4989 16.7835 22 18.3375 22 20C22 20.5523 21.5523 21 21 21H18C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19H19.9189C19.7751 18.1208 19.4438 17.2923 18.9578 16.5454C18.6566 16.0825 18.7876 15.4631 19.2505 15.1618Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M12 4C10.8954 4 10 4.89543 10 6C10 7.10457 10.8954 8 12 8C13.1046 8 14 7.10457 14 6C14 4.89543 13.1046 4 12 4ZM8 6C8 3.79086 9.79086 2 12 2C14.2091 2 16 3.79086 16 6C16 8.20914 14.2091 10 12 10C9.79086 10 8 8.20914 8 6Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M5.25033 12.3382C5.44015 12.1232 5.71317 12 6.00001 12H18C18.2868 12 18.5599 12.1232 18.7497 12.3382C18.9395 12.5532 19.0279 12.8394 18.9923 13.124L17.9923 21.124C17.9297 21.6245 17.5043 22 17 22H7.00001C6.49568 22 6.07028 21.6245 6.00773 21.124L5.00773 13.124C4.97215 12.8394 5.0605 12.5532 5.25033 12.3382ZM7.13279 14L7.88279 20H16.1172L16.8672 14H7.13279Z" />
                            </svg>
                            <span>1</span>
                        </div>
                        <div class="counter-text">
                            <h5>Tell us who you are!</h5>
                            <span>Lorem ipsum dolor sit amet,<br> elit, sed do eiusmod.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="counter-box">
                        <div class="counter-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <defs>
                                    <linearGradient id="header-shape-gradient6" x1="17.5001" y1="32" x2="17.5001"
                                                    y2="2.9711">
                                        <stop offset="0" stop-color="var(--color-stop)" />
                                        <stop offset="1" stop-color="var(--color-bot)" />
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M4.74949 15.1618C5.21238 15.4631 5.34343 16.0825 5.04219 16.5454C4.55617 17.2923 4.22492 18.1208 4.08106 19H6C6.55228 19 7 19.4477 7 20C7 20.5523 6.55228 21 6 21H3C2.44772 21 2 20.5523 2 20C2 18.3375 2.50107 16.7835 3.36589 15.4545C3.66714 14.9917 4.28659 14.8606 4.74949 15.1618ZM19.2505 15.1618C19.7134 14.8606 20.3329 14.9917 20.6341 15.4545C21.4989 16.7835 22 18.3375 22 20C22 20.5523 21.5523 21 21 21H18C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19H19.9189C19.7751 18.1208 19.4438 17.2923 18.9578 16.5454C18.6566 16.0825 18.7876 15.4631 19.2505 15.1618Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M12 4C10.8954 4 10 4.89543 10 6C10 7.10457 10.8954 8 12 8C13.1046 8 14 7.10457 14 6C14 4.89543 13.1046 4 12 4ZM8 6C8 3.79086 9.79086 2 12 2C14.2091 2 16 3.79086 16 6C16 8.20914 14.2091 10 12 10C9.79086 10 8 8.20914 8 6Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M5.25033 12.3382C5.44015 12.1232 5.71317 12 6.00001 12H18C18.2868 12 18.5599 12.1232 18.7497 12.3382C18.9395 12.5532 19.0279 12.8394 18.9923 13.124L17.9923 21.124C17.9297 21.6245 17.5043 22 17 22H7.00001C6.49568 22 6.07028 21.6245 6.00773 21.124L5.00773 13.124C4.97215 12.8394 5.0605 12.5532 5.25033 12.3382ZM7.13279 14L7.88279 20H16.1172L16.8672 14H7.13279Z" />
                            </svg>
                            <span>2</span>
                        </div>
                        <div class="counter-text">
                            <h5>Find the right person</h5>
                            <span>Lorem ipsum dolor sit amet,<br> elit, sed do eiusmod.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="counter-box">
                        <div class="counter-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <defs>
                                    <linearGradient id="header-shape-gradient7" x1="17.5001" y1="32" x2="17.5001"
                                                    y2="2.9711">
                                        <stop offset="0" stop-color="var(--color-stop)" />
                                        <stop offset="1" stop-color="var(--color-bot)" />
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M4.74949 15.1618C5.21238 15.4631 5.34343 16.0825 5.04219 16.5454C4.55617 17.2923 4.22492 18.1208 4.08106 19H6C6.55228 19 7 19.4477 7 20C7 20.5523 6.55228 21 6 21H3C2.44772 21 2 20.5523 2 20C2 18.3375 2.50107 16.7835 3.36589 15.4545C3.66714 14.9917 4.28659 14.8606 4.74949 15.1618ZM19.2505 15.1618C19.7134 14.8606 20.3329 14.9917 20.6341 15.4545C21.4989 16.7835 22 18.3375 22 20C22 20.5523 21.5523 21 21 21H18C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19H19.9189C19.7751 18.1208 19.4438 17.2923 18.9578 16.5454C18.6566 16.0825 18.7876 15.4631 19.2505 15.1618Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M12 4C10.8954 4 10 4.89543 10 6C10 7.10457 10.8954 8 12 8C13.1046 8 14 7.10457 14 6C14 4.89543 13.1046 4 12 4ZM8 6C8 3.79086 9.79086 2 12 2C14.2091 2 16 3.79086 16 6C16 8.20914 14.2091 10 12 10C9.79086 10 8 8.20914 8 6Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M5.25033 12.3382C5.44015 12.1232 5.71317 12 6.00001 12H18C18.2868 12 18.5599 12.1232 18.7497 12.3382C18.9395 12.5532 19.0279 12.8394 18.9923 13.124L17.9923 21.124C17.9297 21.6245 17.5043 22 17 22H7.00001C6.49568 22 6.07028 21.6245 6.00773 21.124L5.00773 13.124C4.97215 12.8394 5.0605 12.5532 5.25033 12.3382ZM7.13279 14L7.88279 20H16.1172L16.8672 14H7.13279Z" />
                            </svg>
                            <span>3</span>
                        </div>
                        <div class="counter-text">
                            <h5>Start Dating</h5>
                            <span>Lorem ipsum dolor sit amet,<br> elit, sed do eiusmod.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-customers-slider w-100 float-start">
    <div class="container">
        <div class="heading center-heading">
            <h2>Listen What <strong>are saying our</strong> Customers</h2>
            <div class="heart-line">
                <i class="fas fa-heart"></i>
            </div>
            <p>This theme extends default WordPress profiles. User can edit profile fields, upload photos, add
                favorites,<br> view gifts and read messages, edit privacy settings without even seeing .</p>
        </div>
        <div class="customers-slider w-100 float-start">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="slider-box">
                        <div class="slider-text">
                            <div class="quote-icon">
                                <img src="<?=IMG ?>/quote.png" alt="quote" class="img-fluid">
                            </div>
                            <div class="slider-heading">
                                <h4>Sunita Handge</h4>
                                <a href="javascript:;">( Business )</a>
                            </div>
                            <p>Packages and web page editors now use Lorem Ipsum as their am efault model text
                                yr,and a search.Packages and webpage editors now use . Packages and page editors now
                                use .</p>
                        </div>
                        <div class="slider-img zoomIn">
                            <img src="<?=IMG ?>/slider-img.png" alt="slider-img" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-box">
                        <div class="slider-text">
                            <div class="quote-icon">
                                <img src="<?=IMG ?>/quote.png" alt="quote" class="img-fluid">
                            </div>
                            <div class="slider-heading">
                                <h4>Pooja Suryavanshi</h4>
                                <a href="javascript:;">( Business )</a>
                            </div>
                            <p>Packages and web page editors now use Lorem Ipsum as their am efault model text
                                yr,and a search.Packages and webpage editors now use . Packages and page editors now
                                use .</p>
                        </div>
                        <div class="slider-img zoomIn">
                            <img src="<?=IMG ?>/slider-img1.png" alt="slider-img" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-box">
                        <div class="slider-text">
                            <div class="quote-icon">
                                <img src="<?=IMG ?>/quote.png" alt="quote" class="img-fluid">
                            </div>
                            <div class="slider-heading">
                                <h4>Martha Parmar</h4>
                                <a href="javascript:;">( Business )</a>
                            </div>
                            <p>Packages and web page editors now use Lorem Ipsum as their am efault model text
                                yr,and a search.Packages and webpage editors now use . Packages and page editors now
                                use .</p>
                        </div>
                        <div class="slider-img zoomIn">
                            <img src="<?=IMG ?>/slider-img2.png" alt="slider-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-members-section bg-color1 w-100 float-start">
    <img class="shape1" src="<?=IMG ?>/heartshape.png" alt="img">
    <div class="container">
        <div class="heading center-heading">
            <h2>Awesome <strong>Top</strong> Members</h2>
            <div class="heart-line">
                <i class="fas fa-heart"></i>
            </div>
            <p>This theme extends default WordPress profiles. User can edit profile fields, upload photos, add
                favorites,<br> view gifts and read messages, edit privacy settings without even seeing .</p>
        </div>
        <div class="w-100 float-start">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="members-box">
                        <div class="members-img">
                            <img src="<?=IMG ?>/members-img1.jpg" alt="members-img1" class="img-fluid">
                        </div>
                        <div class="members-text">
                            <a href="profile-single.html">
                                <h6>Sarika Thakur</h6>
                            </a>
                            <span>landon</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="members-box">
                        <div class="members-img">
                            <img src="<?=IMG ?>/members-img2.jpg" alt="members-img2" class="img-fluid">
                        </div>
                        <div class="members-text">
                            <a href="profile-single.html">
                                <h6>Pari Parmar</h6>
                            </a>
                            <span>landon</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="members-box">
                        <div class="members-img">
                            <img src="<?=IMG ?>/members-img3.jpg" alt="members-img3" class="img-fluid">
                        </div>
                        <div class="members-text">
                            <a href="profile-single.html">
                                <h6>Tulshi Jat</h6>
                            </a>
                            <span>landon</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="members-box">
                        <div class="members-img">
                            <img src="<?=IMG ?>/members-img4.jpg" alt="members-img4" class="img-fluid">
                        </div>
                        <div class="members-text">
                            <a href="profile-single.html">
                                <h6>Vijay Chouhan</h6>
                            </a>
                            <span>landon</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="members-box">
                        <div class="members-img">
                            <img src="<?=IMG ?>/members-img5.jpg" alt="members-img1" class="img-fluid">
                        </div>
                        <div class="members-text">
                            <a href="profile-single.html">
                                <h6>Sarika Thakur</h6>
                            </a>
                            <span>landon</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="members-box">
                        <div class="members-img">
                            <img src="<?=IMG ?>/members-img6.jpg" alt="members-img2" class="img-fluid">
                        </div>
                        <div class="members-text">
                            <a href="profile-single.html">
                                <h6>Pari Parmar</h6>
                            </a>
                            <span>landon</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="members-box">
                        <div class="members-img">
                            <img src="<?=IMG ?>/members-img7.jpg" alt="members-img3" class="img-fluid">
                        </div>
                        <div class="members-text">
                            <a href="profile-single.html">
                                <h6>Tulshi Jat</h6>
                            </a>
                            <span>landon</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="members-box">
                        <div class="members-img">
                            <img src="<?=IMG ?>/members-img8.jpg" alt="members-img4" class="img-fluid">
                        </div>
                        <div class="members-text">
                            <a href="profile-single.html">
                                <h6>Vijay Chouhan</h6>
                            </a>
                            <span>landon</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="main-btn-2 mt-4 text-center">
                        <a href="community.html" class="main-btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="how-it-work main-princing-section w-100 float-start">
    <div class="container">
        <div class="heading center-heading">
            <h2>Creative <strong>Princing</strong> Table</h2>
            <div class="heart-line">
                <i class="fas fa-heart"></i>
            </div>
            <p>This theme extends default WordPress profiles. User can edit profile fields, upload photos, add
                favorites,<br> view gifts and read messages, edit privacy settings without even seeing .</p>
        </div>
        <div class="w-100 float-start">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="counter-box">
                        <div class="counter-icon">
                            <h2>$3.99</h2>
                        </div>
                        <div class="counter-text">
                            <h4>Basic</h4>
                            <span>Weekly plan</span>
                            <ul class="table-ul">
                                <li>LifeTime Memabership</li>
                                <li>Profile Security </li>
                                <li>Free Notification</li>
                            </ul>
                            <a href="javascript:;" class="main-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="counter-box">
                        <div class="counter-icon">
                            <h2>$13.99</h2>
                        </div>
                        <div class="counter-text">
                            <h4>Standard</h4>
                            <span>Monthly plan</span>
                            <ul class="table-ul">
                                <li>LifeTime Memabership</li>
                                <li>Profile Security </li>
                                <li>Free Notification</li>
                            </ul>
                            <a href="javascript:;" class="main-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="counter-box">
                        <div class="counter-icon">
                            <h2>$23.99</h2>
                        </div>
                        <div class="counter-text">
                            <h4>Professional</h4>
                            <span>Yearly plan</span>
                            <ul class="table-ul">
                                <li>LifeTime Memabership</li>
                                <li>Profile Security </li>
                                <li>Free Notification</li>
                            </ul>
                            <a href="javascript:;" class="main-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobile-app-section bg-color2 w-100 float-start">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12 order-lg-1">
                <div class="app-content text-center text-lg-start mb-5 mb-lg-0">
                    <div class="heading">
                        <h2>Download <br>
                            <strong>The Ready For Long</strong> Life App
                        </h2>
                    </div>
                    <p>All it takes is 30 seconds to Download. Fast, Simple &
                        Delightful. All it takes is 30 seconds to Download.
                    </p>
                    <ul class="btn-ul justify-content-center justify-content-lg-start">
                        <li>
                            <a href="javascript:;" class="main-btn main-btn-iocn">
									<span class="icon">
										<i class="fab fa-apple"></i>
									</span> APP STORE
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="main-btn main-btn-iocn">
									<span class="icon">
										<i class="fab fa-android"></i>
									</span> PLAY STORE
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 order-lg-12">
                <div class="mobile-img">
                    <img src="<?=IMG ?>/app-img.png" alt="app-img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog w-100 float-start">
    <div class="container">
        <div class="heading center-heading">
            <h2>Sweet <strong>Stories From Our</strong> Lovers</h2>
            <div class="heart-line">
                <i class="fas fa-heart"></i>
            </div>
            <p>This theme extends default WordPress profiles. User can edit profile fields, upload photos, add
                favorites,<br> view gifts and read messages, edit privacy settings without even seeing .</p>
        </div>
        <div class="w-100 float-start">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog-box text-center">
                        <div class="blog-img">
                            <img src="<?=IMG ?>/blog-box-img1.jpg" alt="blog-box-img1" class="img-fluid">
                        </div>
                        <div class="blog-text">
                            <ul class="tag-list">
                                <li><a href="javascript:;"><span><i class="fas fa-tags"></i></span> By Admin</a>
                                </li>
                                <li><a href="javascript:;"><span><i class="far fa-calendar-alt"></i></span>
                                        Aug.18.2022</a></li>
                            </ul>
                            <a href="blog-single.html" class="h4">Love Page Names For Instagram</a>
                            <p>This theme extends default WordPress profiles. User can edit fields, upload photos.
                            </p>
                            <a href="javascript:;" class="main-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog-box text-center">
                        <div class="blog-img">
                            <img src="<?=IMG ?>/blog-box-img2.jpg" alt="blog-box-img2" class="img-fluid">
                        </div>
                        <div class="blog-text">
                            <ul class="tag-list">
                                <li><a href="javascript:;"><span><i class="fas fa-tags"></i></span> By Admin</a>
                                </li>
                                <li><a href="javascript:;"><span><i class="far fa-calendar-alt"></i></span>
                                        Aug.18.2022</a></li>
                            </ul>
                            <a href="blog-single.html" class="h4">Unique Love Blog Name Ideas</a>
                            <p>This theme extends default WordPress profiles. User can edit fields, upload photos.
                            </p>
                            <a href="javascript:;" class="main-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog-box text-center">
                        <div class="blog-img">
                            <img src="<?=IMG ?>/blog-box-img3.jpg" alt="blog-box-img3" class="img-fluid">
                        </div>
                        <div class="blog-text">
                            <ul class="tag-list">
                                <li><a href="javascript:;"><span><i class="fas fa-tags"></i></span> By Admin</a>
                                </li>
                                <li><a href="javascript:;"><span><i class="far fa-calendar-alt"></i></span>
                                        Aug.18.2022</a></li>
                            </ul>
                            <a href="blog-single.html" class="h4">Webcam chat with girls</a>
                            <p>This theme extends default WordPress profiles. User can edit fields, upload photos.
                            </p>
                            <a href="javascript:;" class="main-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="w-100 float-start main-search">
        <div class="container">
            <div class="heading center-heading heading-white">
                <h2>Subscribe <strong>With</strong> Us</h2>
                <p>Crewneck Heather Grey Sweatshirt Made</p>
            </div>
            <div class="search-box">
                <input type="text" name="search" placeholder="Enter Your Email">
                <button type="button" class="main-btn main-btn-iocn">
                    <span class="d-none-btn">Subscribe</span>
                    <span class="icon">
							<i class="fas fa-paper-plane"></i>
						</span>
                </button>
            </div>
        </div>
    </div>
<?php
require "parts/footer.php";
?>
