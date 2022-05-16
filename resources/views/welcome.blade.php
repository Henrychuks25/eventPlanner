<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="home1">
    <!--Preloader area start here-->
    <div class="loadding-page">
        <div class="cssload-box-loading"></div>
    </div>
    <!--Preloader area end here-->

    <!--Header Start-->
    <header id="rs-header" class="rs-header fullwidth-header">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="main-menu">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="logo-area">
                                <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <!-- <div id="logo-sticky" class="text-center">
                                <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                            </div> -->
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                    <!-- Home -->
                                    <li class="current-menu-item current_page_item menu-item-has-children rs-mega-menu mega-rs"> <a href="#" class="home">Home</a>
                                        <ul class="mega-menu home_mega">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="index.html">Home One</a> </li>
                                                            <li><a href="index2.html">Home Two</a> </li>
                                                            <li><a href="index3.html">Home Three</a></li>
                                                            <li><a href="index4.html">Home Four</a> </li>
                                                            <li class="active"><a href="index5.html">Home Five</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="index-onepage.html">Home1 (Onepage)</a> </li>
                                                            <li><a href="index2-onepage.html">Home2 (Onepage)</a> </li>
                                                            <li><a href="index3-onepage.html">Home3 (Onepage)</a></li>
                                                            <li><a href="index4-onepage.html">Home4 (Onepage)</a> </li>
                                                            <li><a href="index5-onepage.html">Home5 (Onepage)</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Home -->

                                    <li class="menu-item-has-children"><a href="schedule.html">Schedule</a>
                                        <ul class="sub-menu">
                                            <li><a href="schedule.html">Schedule One</a></li>
                                            <li><a href="schedule2.html">Schedule Two</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="sponsors.html">Sponsors</a></li>

                                    <li class="menu-item-has-children"> <a href="#">Speakers</a>
                                        <ul class="sub-menu">
                                            <li><a href="speakers.html">Speakers One</a></li>
                                            <li><a href="speakers2.html">Speakers Two</a></li>
                                            <li><a href="speakers3.html">Speakers Three</a></li>
                                            <li><a href="speakers4.html">Speakers Four</a></li>
                                            <li><a href="speakers-single.html">Speakers Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li> <a href="about.html">About</a></li>
                                            <li><a href="#">Events</a>
                                                <ul class="sub-menu">
                                                    <li><a href="upcoming-event.html">Events</a></li>
                                                    <li><a href="events-details.html">Events Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="#">Shop</a>
                                                <ul class="sub-menu right-menu">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="venues.html">Our Venues</a></li>
                                            <li><a href="price.html">Our Pricing</a></li>
                                            <li><a href="registration.html">Registration</a></li>
                                            <li><a href="error-404.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"> <a href="#">News</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="blog-left.html">Blog Left</a></li>
                                            <li><a href="blog-right.html">Blog Right</a></li>
                                            <li><a href="blog-details.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="buy-tickets">
                                <a href="#" class="primary-btn" data-animation-in="lightSpeedIn" data-animation-out="animate-out">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .container-fullwidth -->
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->

    <!-- Slider Area Start -->
    <div id="rs-slider" class="rs-slider-banner">
        <div id="home-banner">
            <!-- Item 1 -->
            <div class="item active">
                <img src="images/banner/1.jpg" alt="" />
                <div class="slide-content text-center">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">
                                    Discover cutting-edge event
                                </h1>

                                <div class="countdown-section">
                                    <div id="countdown-3"></div>
                                </div>

                                <a href="#" class="primary-btn mr-30" data-animation-in="lightSpeedIn" data-animation-out="animate-out">Book Your Seat</a>
                                <a href="about.html" class="secondary-btn" data-animation-in="lightSpeedIn" data-animation-out="animate-out">View Schedule</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- #home-banner -->
    </div>
    <!-- Slider Area End -->


    <!-- About Us Start -->
    <div id="rs-about" class="rs-about section-image sec-spacer">
        <div class="container">
            <div class="sec-title text-center">
                <span>Welcome to Eventsia</span>
                <h2>About The Event Organizer</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-des plr-70 text-center">
                        <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                        <a class="primary-btn" href="about.html">Read more</a>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div>
    <!-- About Us End -->

    <!-- Join Our Events Start-->
    <div class="join-our-events section-image gray-color sec-spacer">
        <div class="container">
            <div class="sec-title text-center">
                <span>Join Our Event</span>
                <h2>why you should attend event?</h2>
            </div>
            <div class="row choose-list center-box text-center">
                <!-- choose item start -->
                <div class="col-lg-4">
                    <div class="choose-item rs-animation-hover">
                        <i class="icofont icofont-learn rs-animation-scale-up"></i>
                        <h3 class="choose-title">Learn From Others</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the try's standard dummy</p>
                    </div>
                </div>
                <!-- choose item end -->

                <!-- choose item start -->
                <div class="col-lg-4">
                    <div class="choose-item rs-animation-hover">
                        <i class="icofont icofont-users-social rs-animation-scale-up"></i>
                        <h3 class="choose-title">Improve Your Skills</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the try's standard dummy</p>
                    </div>
                </div>
                <!-- choose item end -->

                <!-- choose item start -->
                <div class="col-lg-4">
                    <div class="choose-item rs-animation-hover">
                        <i class="icofont icofont-recycle rs-animation-scale-up"></i>
                        <h3 class="choose-title">Finding Clients</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the try's standard dummy</p>
                    </div>
                </div>
                <!-- choose item end -->
            </div>
        </div>
    </div>
    <!-- Join events End -->

    <!-- Our Event Schedule Start -->
    <div id="rs-events-schedule" class="rs-events-schedule rs-events-schedule1 section-image sec-spacer">
        <div class="container">
            <div class="sec-title text-center">
                <span>Schedule</span>
                <h2>Our Event Schedule</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="events-schedule-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav eventday-list">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#sunday">Sunday <span>28 June, 2018</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#monday">Monday<span>20 June, 2018</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tuesday">Tuesday<span>15 June, 2018</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#friday">Friday<span>10 June, 2018</span></a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="events-schedule-contents tab-content">

                            <!-- schedule day1 start -->
                            <div class="tab-pane events-shedule-des active" id="sunday">
                                <div class="events-shedule-subitmes">
                                    <ul class="nav eventday-sublist gray-color">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#room1">Hall Room - 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#room2">Hall Room - 2</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#room3">Hall Room - 3</a>
                                        </li>
                                    </ul>
                                    <div class="events-subinner">
                                        <!--Hall room 1 start-->
                                        <div class="tab-pane events-shedule-subdes active show fade" id="room1">
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">10.00 am - 05.00 pm</span>
                                                            <h3 class="event-title">Demonstration Friday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">09.00 am - 04.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 1 end-->

                                        <!--Hall room 2 start-->
                                        <div class="tab-pane events-shedule-subdes fade" id="room2">
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/6.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">09.00 am - 04.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">10.00 am - 05.00 pm</span>
                                                            <h3 class="event-title">Demonstration Friday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 2 end-->

                                        <!--Hall room 3 start-->
                                        <div class="tab-pane events-shedule-subdes fade" id="room3">
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Friday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 3 end-->
                                    </div>
                                </div>
                            </div>
                            <!-- schedule day1 end -->

                            <!-- schedule day2 start -->
                            <div class="tab-pane events-shedule-des fade" id="monday">
                                <div class="events-shedule-subitmes">
                                    <ul class="nav eventday-sublist gray-color">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#room4">Hall Room - 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#room5">Hall Room - 2</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#room6">Hall Room - 3</a>
                                        </li>
                                    </ul>
                                    <div class="events-subinner">
                                        <!--Hall room 1 start-->
                                        <div class="tab-pane events-shedule-subdes active show fade" id="room4">
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">10.00 am - 05.00 pm</span>
                                                            <h3 class="event-title">Demonstration Friday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">09.00 am - 04.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 1 end-->

                                        <!--Hall room 2 start-->
                                        <div class="tab-pane events-shedule-subdes fade" id="room5">

                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">07.00 am - 02.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 2 end-->

                                        <!--Hall room 3 start-->
                                        <div class="tab-pane events-shedule-subdes fade" id="room6">
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Friday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 3 end-->
                                    </div>
                                </div>
                            </div>
                            <!-- schedule day2 end -->

                            <!-- schedule day3 start -->
                            <div class="tab-pane events-shedule-des fade" id="tuesday">
                                <div class="events-shedule-subitmes">
                                    <ul class="nav eventday-sublist gray-color">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#room7">Hall Room - 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#room8">Hall Room - 2</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#room9">Hall Room - 3</a>
                                        </li>
                                    </ul>
                                    <div class="events-subinner">
                                        <!--Hall room 1 start-->
                                        <div class="tab-pane events-shedule-subdes active show fade" id="room7">
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">09.00 am - 04.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">10.00 am - 05.00 pm</span>
                                                            <h3 class="event-title">Demonstration Friday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 1 end-->

                                        <!--Hall room 2 start-->
                                        <div class="tab-pane events-shedule-subdes fade" id="room8">

                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">07.00 am - 02.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 2 end-->

                                        <!--Hall room 3 start-->
                                        <div class="tab-pane events-shedule-subdes fade" id="room9">
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Friday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 3 end-->
                                    </div>
                                </div>
                            </div>
                            <!-- schedule day3 end -->

                            <!-- schedule day4 start -->
                            <div class="tab-pane events-shedule-des fade" id="friday">
                                <div class="events-shedule-subitmes">
                                    <ul class="nav eventday-sublist gray-color">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#room10">Hall Room - 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#room11">Hall Room - 2</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#room12">Hall Room - 3</a>
                                        </li>
                                    </ul>
                                    <div class="events-subinner">
                                        <!--Hall room 1 start-->
                                        <div class="tab-pane events-shedule-subdes  active show fade" id="room10">
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">10.00 am - 05.00 pm</span>
                                                            <h3 class="event-title">Demonstration Friday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">09.00 am - 04.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 1 end-->

                                        <!--Hall room 2 start-->
                                        <div class="tab-pane events-shedule-subdes fade" id="room11">
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">07.00 am - 02.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 2 end-->

                                        <!--Hall room 3 start-->
                                        <div class="tab-pane events-shedule-subdes fade" id="room12">
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/1.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Rubrash Caprio</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Sunday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/3.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Mahabub Alam</h4>
                                                            <span class="author-position">CEO & Founder</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Tuesday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-items">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <div class="event-author">
                                                            <img src="images/testimonial/5.jpg" alt="">
                                                            <span class="author-cty"><i class="icofont icofont-radio-mic"></i>Speaker</span>
                                                            <h4>Masud Rana</h4>
                                                            <span class="author-position">Web Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="event-shedule-info">
                                                            <span class="meta-date">08.00 am - 03.00 pm</span>
                                                            <h3 class="event-title">Demonstration Friday 2018</h3>
                                                            <p class="event-des">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi dent, similique sunt in culpa.</p>
                                                            <div class="share-section2">
                                                                <div class="event-btn">
                                                                    <a class="primary-btn" href="events-details.html"> View Details</a>
                                                                </div>
                                                                <div class="social-shareicons">
                                                                    <span class="share-title"> You Can Share It : </span>
                                                                    <ul class="share-link">
                                                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hall room 3 end-->
                                    </div>
                                </div>
                            </div>
                            <!-- schedule day4 end -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Event Schedule End -->

    <!-- Team Start -->
    <div id="rs-team" class="rs-team transparent-team fullwidth-team gray-color pt-100 pb-70">
        <div class="container">
            <div class="sec-title text-center">
                <span>Speakers</span>
                <h2>Best Event Speakers</h2>
            </div>
            <div class="row margin-0">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/team/team1.jpg" alt="team Image" />
                            <div class="normal-text">
                                <h4 class="team-name">Seroun Pawor</h4>
                                <span class="subtitle">CEO & Founder</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="share-icons">
                                        <div class="border"></div>
                                        <ul class="team-social icons-1">
                                            <li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            </li>
                                        </ul>

                                        <ul class="team-social icons-2">
                                            <li><a href="#" class="social-icon"><i class="fa fa-skype"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a href="speakers-single.html">Seroun Pawor</a>
                                        </h4>
                                        <span class="postion">CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/team/team2.jpg" alt="team Image" />
                            <div class="normal-text">
                                <h4 class="team-name">Mariono Rose</h4>
                                <span class="subtitle">CEO & Founder</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="share-icons">
                                        <div class="border"></div>
                                        <ul class="team-social icons-1">
                                            <li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            </li>
                                        </ul>

                                        <ul class="team-social icons-2">
                                            <li><a href="#" class="social-icon"><i class="fa fa-skype"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a href="speakers-single.html">Mariono Rose</a>
                                        </h4>
                                        <span class="postion">CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/team/team3.jpg" alt="team Image" />
                            <div class="normal-text">
                                <h4 class="team-name">Stiven Smith</h4>
                                <span class="subtitle">CEO & Founder</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="share-icons">
                                        <div class="border"></div>
                                        <ul class="team-social icons-1">
                                            <li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            </li>
                                        </ul>

                                        <ul class="team-social icons-2">
                                            <li><a href="#" class="social-icon"><i class="fa fa-skype"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a href="speakers-single.html">Stiven Smith</a>
                                        </h4>
                                        <span class="postion">CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/team/team4.jpg" alt="team Image" />
                            <div class="normal-text">
                                <h4 class="team-name">Hose Morinho</h4>
                                <span class="subtitle">CEO & Founder</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="share-icons">
                                        <div class="border"></div>
                                        <ul class="team-social icons-1">
                                            <li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            </li>
                                        </ul>

                                        <ul class="team-social icons-2">
                                            <li><a href="#" class="social-icon"><i class="fa fa-skype"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a href="speakers-single.html">Hose Morinho</a>
                                        </h4>
                                        <span class="postion">CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/team/team5.jpg" alt="team Image" />
                            <div class="normal-text">
                                <h4 class="team-name">Rihana kery</h4>
                                <span class="subtitle">CEO & Founder</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="share-icons">
                                        <div class="border"></div>
                                        <ul class="team-social icons-1">
                                            <li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            </li>
                                        </ul>

                                        <ul class="team-social icons-2">
                                            <li><a href="#" class="social-icon"><i class="fa fa-skype"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a href="speakers-single.html">Rihana kery</a>
                                        </h4>
                                        <span class="postion">CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/team/team6.jpg" alt="team Image" />
                            <div class="normal-text">
                                <h4 class="team-name">Siymon catich</h4>
                                <span class="subtitle">CEO & Founder</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <div class="share-icons">
                                        <div class="border"></div>
                                        <ul class="team-social icons-1">
                                            <li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            </li>
                                        </ul>

                                        <ul class="team-social icons-2">
                                            <li><a href="#" class="social-icon"><i class="fa fa-skype"></i></a>
                                            </li>
                                            <li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-details">
                                        <h4 class="team-name">
                                            <a href="speakers-single.html">Siymon catich</a>
                                        </h4>
                                        <span class="postion">CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container-fullwidth -->
    </div>
    <!-- Team End -->

    <!-- Pricing Table Style Ten -->
    <div id="price-table-section" class="price-table-section section-image sec-spacer">
        <div class="container">
            <div class="sec-title text-center">
                <span>Price Table</span>
                <h2>Our Event Price List</h2>
            </div>
            <div class="price-table style-one">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="cl-pricetable-wrap price-1">
                            <div class="top">
                                <div class="cl-header">
                                    <h3>Silver</h3>
                                    <span>$150</span>
                                </div>
                            </div>
                            <div class="featured">
                                <ul>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> Unlimited Bandwidth</li>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> 256MB Memory</li>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> 256MB Memory</li>
                                    <li><i class="feature_icon fa fa-times" aria-hidden="true"></i> Welcome Reception</li>
                                    <li><i class="feature_icon fa fa-times" aria-hidden="true"></i> President’s Reception</li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <div class="cl-footer">
                                    <a href="#" class="btn-table btn-1 hvr-sweep-to-right">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="cl-pricetable-wrap price-2 popular_plan">
                            <div class="top">
                                <div class="cl-header">
                                    <h3>Gold</h3>
                                    <span>$150</span>
                                </div>
                            </div>
                            <div class="featured">
                                <ul>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> Unlimited Bandwidth</li>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> 1 Website</li>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> 1 Domain</li>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> 256MB Memory</li>
                                    <li><i class="feature_icon fa fa-times" aria-hidden="true"></i> Unlimited subdomains</li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <div class="cl-footer">
                                    <a href="#" class="btn-table btn-1 hvr-sweep-to-right">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="cl-pricetable-wrap price-3">
                            <div class="top">
                                <div class="cl-header">
                                    <h3>Platinam</h3>
                                    <span>$150</span>
                                </div>
                            </div>
                            <div class="featured">
                                <ul>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> Unlimited Bandwidth</li>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> 24/7 Support</li>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> 20 Email Accounts</li>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> Welcome Reception</li>
                                    <li><i class="feature_icon fa fa-check" aria-hidden="true"></i> Unlimited subdomains</li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <div class="cl-footer">
                                    <a href="#" class="btn-table btn-1 hvr-sweep-to-right">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Table Style Ten -->

    <!-- Testimonial Start -->
    <section id="rs-testimonial2" class="rs-testimonial2 sec-spacer gray-color">
        <div class="container">
            <div class="sec-title text-center">
                <span>Testimonials</span>
                <h2>Our Client Says</h2>
            </div>

            <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="false" data-md-device-dots="true">

                <div class="single-testimonials text-center">
                    <div class="testimonial-content">
                        <img src="images/testimonial/1.jpg" alt="Client Image">
                        <p><i class="fa fa-quote-left"></i> Amazing plugin and top class support, as I’m a beginner, Luke helped me above and beyond and was more than patient, his responses were quick and he has a genuine care for you to enjoy and move forward plugin!</p>

                        <ul class="cl-author-info">
                            <li>Victor Valdes</li>
                            <li>CEO & Founder</li>
                        </ul>
                    </div>
                </div><!-- .single-testimonials -->

                <div class="single-testimonials text-center">
                    <div class="testimonial-content">
                        <img src="images/testimonial/2.jpg" alt="Client Image">
                        <p><i class="fa fa-quote-left"></i> Amazing plugin and top class support, as I’m a beginner, Luke helped me above and beyond and was more than patient, his responses were quick and he has a genuine care for you to enjoy and move forward plugin!</p>

                        <ul class="cl-author-info">
                            <li>David Punk</li>
                            <li>Senior Developer</li>
                        </ul>
                    </div>
                </div><!-- .single-testimonials -->

                <div class="single-testimonials text-center">
                    <div class="testimonial-content">
                        <img src="images/testimonial/3.jpg" alt="Client Image">
                        <p><i class="fa fa-quote-left"></i> Amazing plugin and top class support, as I’m a beginner, Luke helped me above and beyond and was more than patient, his responses were quick and he has a genuine care for you to enjoy and move forward plugin!</p>

                        <ul class="cl-author-info">
                            <li>Victor Valdes</li>
                            <li>CEO & Founder</li>
                        </ul>
                    </div>
                </div><!-- .single-testimonials -->

                <div class="single-testimonials text-center">
                    <div class="testimonial-content">
                        <img src="images/testimonial/4.jpg" alt="Client Image">
                        <p><i class="fa fa-quote-left"></i> Amazing plugin and top class support, as I’m a beginner, Luke helped me above and beyond and was more than patient, his responses were quick and he has a genuine care for you to enjoy and move forward plugin!</p>

                        <ul class="cl-author-info">
                            <li>David Punk</li>
                            <li>Senior Developer</li>
                        </ul>
                    </div>
                </div><!-- .single-testimonials -->

            </div>
        </div><!-- .container -->
    </section>   <!-- Testimonial Start -->


    <!-- Our Event Sponsors Start -->
    <div id="our-event-sponsors" class="our-event-sponsors sec-spacer">
        <div class="container">
            <div class="sec-title text-center">
                <span>Sponsors</span>
                <h2>Our Event Sponsors</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="sponsors-list">
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration=".2s" data-wow-delay="600ms"><a href="#"><img src="images/partner/1.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay="600ms"><a href="#"><img src="images/partner/2.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".6s" data-wow-delay="600ms"><a href="#"><img src="images/partner/3.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay="600ms"><a href="#"><img src="images/partner/4.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".10s" data-wow-delay="600ms"><a href="#"><img src="images/partner/5.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".2s" data-wow-delay="600ms"><a href="#"><img src="images/partner/6.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay="600ms"><a href="#"><img src="images/partner/7.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".6s" data-wow-delay="600ms"><a href="#"><img src="images/partner/8.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay="600ms"><a href="#"><img src="images/partner/9.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".10s" data-wow-delay="600ms"><a href="#"><img src="images/partner/10.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".10s" data-wow-delay="600ms"><a href="#"><img src="images/partner/2.png" alt=""></a></li>
                            <li class="wow fadeInUp" data-wow-duration=".10s" data-wow-delay="600ms"><a href="#"><img src="images/partner/6.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="readmore-btn text-center wow fadeInUp" data-wow-duration=".4s" data-wow-delay="600ms">
                        <a class="primary-btn" href="sponsors.html">Beacome a sponsor </a>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div>
    <!-- Our Event Sponsors End -->

    <!-- Blog Start -->
    <div id="rs-blog" class="rs-blog sec-spacer gray-color">
        <div class="container">
            <div class="sec-title text-center">
                <span>Blog Post</span>
                <h2>Our Latest Blog News</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="images/blog/1.jpg" alt="" /></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-date">28 June 2017</div>
                                <h4 class="blog-title"><a href="blog-details.html">Social Media Tools to Boost Your Event Marketing</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissi mos ducimus qui blanditiis praesentium volup tatum deleniti atque</p>
                                <a class="readmore-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div><!-- .blog-item -->

                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="images/blog/2.jpg" alt="" /></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-date">28 June 2017</div>
                                <h4 class="blog-title"><a href="blog-details.html">Event design is much more than a pretty venue</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissi mos ducimus qui blanditiis praesentium volup tatum deleniti atque</p>
                                <a class="readmore-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div><!-- .blog-item -->

                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="images/blog/3.jpg" alt="" /></a>
                            </div>
                            <div class="blog-details">
                                <div class="blog-date">28 June 2017</div>
                                <h4 class="blog-title"><a href="blog-details.html">Social Media Tools to Boost Your Event Marketing</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissi mos ducimus qui blanditiis praesentium volup tatum deleniti atque</p>
                                <a class="readmore-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div><!-- .blog-item -->
                    </div>
                </div><!-- .row -->
            </div>
        </div><!-- .container -->
    </div>
    <!-- Blog End -->

    <!-- Contact Start -->
    <section id="rs-footer" class="rs-footer white-bg multi-footer">
        <div class="container">
            <div class="footer-content-box">
                <div class="footer-logo text-center">
                    <a href="#"><img src="images/logo-black.png" alt=""></a>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="content-grid">
                            <h4 class="title">Address</h4>
                            <p class="some-text">503 Old Buffalo Street <br>
                                Northwest #205, New York-3087</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content-grid">
                            <h4 class="title">Contacts</h4>
                            <a class="contact-link" href="#">+2390-875-2235</a>
                            <br>
                            <a class="contact-link" href="#">infoname@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content-grid text-left">
                            <h4 class="title">Subscribe</h4>
                            <div class="form-inner">
                                <input type="email" name="email" id="sign-up" placeholder="Your Email Address">
                                <button type="submit"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyrigh text-center">
                <p>&copy; 2018 Your Company. All Rights Reserved. Designed By <a href="#">RS Theme</a></p>
                <div class="social-links">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="#"><i class="fa fa-skype"></i></a></li>

                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>

                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- modernizr js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="js/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- slick.min js -->
    <script src="js/slick.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- magnific popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- rsmenu js -->
    <script src="js/rsmenu-main.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- contact form js -->
    <script src="js/contact.form.js"></script>
    <!-- timer-coutr js -->
    <script src="js/jquery.time-to.min.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
    </body>

</html>
