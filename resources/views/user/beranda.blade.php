<!DOCTYPE html>
<html lang="en">

<head>

    @include('user.template.css')

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">
        <!--Start Preloader -->

        <!--End Preloader -->

        <!--Start Top bar area -->
        <section class="top-bar-area">
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <p>Welcome to Factory & Industrial buisness</p>
                    </div>
                    <div class="pull-right">
                        <p><i class="fa fa-clock-o"></i>Monday - friday : 8:00 AM to 7:00 Pm</p>
                    </div>
                </div>

            </div>
        </section>
        <!--End Top bar area -->

        <!--Start header area-->
        @include('user.template.header')
        <!--End mainmenu area-->

        <!--Start rev slider wrapper-->
        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>
                    <li data-transition="slidingoverlayleft">
                        <img src="images/slides/2.jpg" alt="" width="1920" height="880"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="right" data-hoffset="15" data-y="center"
                            data-voffset="-50" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <h1>Provide Solution <br>for Industries plan </h1>
                                <p>They'll have to make the best of things its an uphill climb.<br> The weather started
                                    getting was tossed. </p>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="390" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr1" href="#">About Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="180" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr2" href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li data-transition="slidingoverlayright">
                        <img src="images/slides/3.jpg" alt="" width="1920" height="550"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="-50" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <h1>We help Industries<br>innovate and grow.</h1>
                                <p>They'll have to make the best of things its an uphill climb.<br> The weather started
                                    getting was tossed. </p>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr1" href="#">About Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="227" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr2" href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-transition="slidingoverlayleft">
                        <img src="images/slides/1.jpg" alt="" width="1920" height="880"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="-50" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <h1>Welcome to Factory & <br>Industrial Buisness </h1>
                                <p>They'll have to make the best of things its an uphill climb.<br> The weather started
                                    getting was tossed. </p>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr1" href="#">About Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="227" data-y="center"
                            data-voffset="110" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr2" href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </section>
        <!--End rev slider wrapper-->


        <section class="about-us sec-padd-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">

                        <figure class="about-img">
                            <img src="images/resource/1.png" alt="about titan builders photo">
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-text">
                            <h2>
                                about our <span class="thm-color">Factory & industries</span>
                            </h2>
                            <div class="text">
                                <p>Thank you for being a friend. Travelled down the road and back again. Your heart is
                                    true you're a pal and a confidant. It's time to put on makeup. It's time to dress up
                                    right.They're all together ooky the Addams Family doin' it our way. There's nothing
                                    we wont try. Never heard the word impossible. This time there's no stopping us.</p>
                            </div>
                            <div class="fact-counter">
                                <ul>
                                    <li class="single-fact-counter">
                                        <div class="icon-holder"><span class="flaticon-social"></span></div>
                                        <span class="timer" data-from="1" data-to="2456" data-speed="5000"
                                            data-refresh-interval="50">2456</span>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <h3>Engineers & Workers</h3>
                                    </li>
                                    <li class="single-fact-counter">
                                        <div class="icon-holder"><span class="flaticon-landscape"></span></div>
                                        <span class="timer" data-from="1" data-to="640" data-speed="5000"
                                            data-refresh-interval="50">640</span>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <h3>Factory in Worldwide</h3>
                                    </li>
                                    <li class="single-fact-counter">
                                        <div class="icon-holder"><span class="flaticon-innovation"></span></div>
                                        <span class="timer" data-from="1" data-to="3250" data-speed="5000"
                                            data-refresh-interval="50">3250</span>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <h3>Projects Completed</h3>
                                    </li>
                                </ul>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>


        <section class="our-services">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="section-title">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-12 font-20">
                        <p>We have built an enviable reputation in consumer goods, heavy industry, high-tech,
                            <br>manufacturing, medical, recreational vehicle, and transportation sectors.
                        </p><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="single-service.html"><img src="images/service/1.jpg"
                                        alt="Awesome Image"></a>
                            </figure>
                            <a href="single-service.html">
                                <h4>Agricultural Engineering</h4>
                            </a>
                            <p>We develop and design new procedures, tools <br>
                                systems for agricultural products environments. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="single-service.html"><img src="images/service/2.jpg"
                                        alt="Awesome Image"></a>
                            </figure>
                            <a href="single-service.html">
                                <h4>Chemical Research Engineering</h4>
                            </a>
                            <p>Chemical Research expertise in producing and <br>
                                manipulating chemicals to energy properties.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="single-service.html"><img src="images/service/3.jpg"
                                        alt="Awesome Image"></a>
                            </figure>
                            <a href="single-service.html">
                                <h4>Material Science and Engineering</h4>
                            </a>
                            <p>Materials Engineering should include scientific and <br>
                                engineering strength relationships of materials. </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="#single-service.html"><img src="images/service/4.jpg"
                                        alt="Awesome Image"></a>
                            </figure>
                            <a href="#single-service.html">
                                <h4>Mechanical Engineering</h4>
                            </a>
                            <p>Creating a dynamic company for the continuous <br>
                                exploration and develop opportunities. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="#single-service.html"><img src="images/service/5.jpg"
                                        alt="Awesome Image"></a>
                            </figure>
                            <a href="#single-service.html">
                                <h4>Petroleum and Gas</h4>
                            </a>
                            <p>Petroleum Engineers are concerned with the <br>
                                exploration, discovery and production.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-our-service">
                            <figure class="img-box">
                                <a href="#single-service.html"><img src="images/service/6.jpg"
                                        alt="Awesome Image"></a>
                            </figure>
                            <a href="#single-service.html">
                                <h4>Power and Energy</h4>
                            </a>
                            <p>Ensuring high reliability and optimal performance <br>of
                                rotating power equipment.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="latest-project sec-padd" style="background-image: url(images/background/5.jpg);">
            <div class="container">
                <div class="section-title">
                    <h2>Latest Projects</h2>
                </div>
                <div class="latest-project-carousel">
                    <div class="item">
                        <div class="single-project">
                            <figure class="imghvr-shutter-in-out-horiz">
                                <img src="images/project/p1.jpg" alt="Awesome Image" />
                                <figcaption>
                                    <div class="content">
                                        <a href="single-project.html">
                                            <h4>PETROLEUM GAS</h4>
                                        </a>
                                        <p>Chemical</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-latest-project-carousel">
                            <div class="single-project">
                                <figure class="imghvr-shutter-in-out-horiz">
                                    <img src="images/project/p2.jpg" alt="Awesome Image" />
                                    <figcaption>
                                        <div class="content">
                                            <a href="single-project.html">
                                                <h4>MULTI SPRING PUSH</h4>
                                            </a>
                                            <p>Mechanical</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div><!-- /.single-latest-project-carousel -->
                    </div>
                    <div class="item">
                        <div class="single-latest-project-carousel">
                            <div class="single-project">
                                <figure class="imghvr-shutter-in-out-horiz">
                                    <img src="images/project/p3.jpg" alt="Awesome Image" />
                                    <figcaption>
                                        <div class="content">
                                            <a href="single-project.html">
                                                <h4>STORAGE SYSTEM</h4>
                                            </a>
                                            <p>Power Energy</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-latest-project-carousel">
                            <div class="single-project">
                                <figure class="imghvr-shutter-in-out-horiz">
                                    <img src="images/project/p4.jpg" alt="Awesome Image" />
                                    <figcaption>
                                        <div class="content">
                                            <a href="single-project.html">
                                                <h4>MENUFACTURING</h4>
                                            </a>
                                            <p>Agricultural</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="blog-section sec-padd2">
            <div class="container">
                <div class="section-title">
                    <h2>latest news</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <figure class="img-holder">
                                <a href="blog-details.html"><img src="images/blog/1.jpg" alt="News"></a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-details.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="blog-details.html">
                                    <h4>MATERIALS & MANUFACTURING </h4>
                                </a>
                                <div class="post-meta">by fletcher | 14 Comments | 21 Feb</div>
                                <div class="text">
                                    <p>Except to obtain some advantage from it? But who has any right to find to enjoy a
                                        pleasure.</p>
                                </div>
                                <div class="link">
                                    <a href="blog-details.html" class="default_link">Read More <i
                                            class="fa fa-angle-right"></i></a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <figure class="img-holder">
                                <a href="blog-details.html"><img src="images/blog/2.jpg" alt="News"></a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-details.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="blog-details.html">
                                    <h4>COMMERCIAL AND REAL PROJECTS</h4>
                                </a>
                                <div class="post-meta">by Richards | 22 Comments | 17 Apr</div>
                                <div class="text">
                                    <p>Great pleasure to take a trivial example, which of us undertakes laborious.</p>
                                </div>
                                <div class="link">
                                    <a href="blog-details.html" class="default_link">Read More <i
                                            class="fa fa-angle-right"></i></a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <figure class="img-holder">
                                <a href="blog-details.html"><img src="images/blog/3.jpg" alt="News"></a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-details.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <a href="blog-details.html">
                                    <h4>MATERIALS FOR THE ECONOMY</h4>
                                </a>
                                <div class="post-meta">by Vincent | 16 Comments | 14 June</div>
                                <div class="text">
                                    <p>Pleasure and praising pain was born and I will give you a complete account.</p>
                                </div>
                                <div class="link">
                                    <a href="blog-details.html" class="default_link">Read More <i
                                            class="fa fa-angle-right"></i></a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="call-back sec-padd2" style="background-image: url(images/background/4.jpg);">
            <div class="container">

                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="section-title">
                            <h2>Request a Call Back</h2>
                        </div>
                        <h4>Have You Any Question About Us?</h4>
                        <br>
                        <div class="text">
                            <p>Any kind of business solution and consultion hesitate to contact with us for customer
                                support. We are love to hear from you</p><br>
                            <p><span>Phone & Email:</span> For any information contact with us through our <a
                                    href="#"> Email</a> and you can also contact with directe by call us in this
                                number <span>(+880) 1723801729</span></p><br>
                            <p><span>Office Hours:</span> We are alwyes open excpet saturday & Sunday from
                                <span>10:00am</span> to <span> 8:00pm</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="contact-form-area">
                            <div class="contact-form">
                                <form id="contact-form" name="contact_form" class="default-form"
                                    action="inc/sendmail.php" method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="form_name" value=""
                                                placeholder="Your Name*" required="" aria-required="true">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="form_email" value=""
                                                placeholder="Your Mail*" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="form_phone" value=""
                                                placeholder="Phone">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="form_subject" value=""
                                                placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="form_message" placeholder="Your Message.." required="" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="">
                                            <button class="thm-btn bg-clr1" type="submit"
                                                data-loading-text="Please wait...">send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="brand-logo sec-padd">
            <div class="container">
                <ul class="brand-carousel">
                    <li><a href="#"><img src="images/brand/1.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/brand/2.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/brand/3.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/brand/4.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/brand/5.jpg" alt=""></a></li>
                </ul>
            </div>
        </section>





        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
        <div class="prealoader"></div>

        <!-- main jQuery -->
        @include('user.template.js')



    </div>
</body>

</html>
