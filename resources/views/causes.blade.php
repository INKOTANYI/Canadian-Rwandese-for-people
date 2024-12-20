<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Charitab - Helping & Charity HTML5 Template" />
    <meta name="keywords" content="campaign, charity, church, donate, donations, foundation, fund, fundraising," />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>Canadian Rwandese Foundation of People With Disabilities</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/dist/css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="assets/dist/css/javascript-plugins-bundle.css" rel="stylesheet" />

    <!-- CSS | menuzord megamenu skins -->
    <link href="assets/dist/js/menuzord/css/menuzord.css" rel="stylesheet" />

    <!-- CSS | timeline -->
    <link href="assets/dist/js/timeline-cp-responsive-vertical/timeline-cp-responsive-vertical.css" rel="stylesheet"
        type="text/css">

    <!-- CSS | Main style file -->
    <link href="assets/dist/css/style-main.css" rel="stylesheet" type="text/css">
    <link id="menuzord-menu-skins" href="assets/dist/js/menuzord/css/skins/menuzord-rounded-boxed.css"
        rel="stylesheet" />

    <!-- CSS | Responsive media queries -->
    <link href="assets/dist/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

    <!-- CSS | Theme Color -->
    <link href="assets/dist/css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="assets/dist/js/jquery.js"></script>
    <script src="assets/dist/js/bootstrap.min.js"></script>
    <script src="assets/dist/js/javascript-plugins-bundle.js"></script>
    <script src="assets/dist/js/menuzord/js/menuzord.js"></script>

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="assets/dist/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="assets/dist/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="assets/dist/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="assets/dist/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/dist/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="tm-enable-navbar-scrolltofixed tm-enable-navbar-always-visible-on-scroll">
    <div id="wrapper" class="clearfix">
        <!-- Header -->
        <header id="header" class="header header-layout-type-header-2rows">
            <div class="header-top ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
                            <ul class="element contact-info">
                                <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel:
                                    +1(780) 999-4052</li>
                                <li class="contact-email"><i class="fa fa-envelope-o font-icon sm-display-block"></i>
                                    crfdisability@gmail.com/li>
                                <li class="contact-address"><i class="fa fa-map-o font-icon sm-display-block"></i> 121
                                    119 - 5510 Schonsee Drive NW Edmonton AB, Canada T5Z 0N9
                                    Alberta</li>
                            </ul>
                        </div>
                        <div
                            class="col-xl-auto ml-xl-auto header-top-right align-self-center text-center text-xl-right">

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed green">
                    <div class="menuzord-container header-nav-container green ">
                        <div class="container position-relative">
                            <div class="row">
                                <div class="col">
                                    <div class="row header-nav-col-row">
                                        <div class="col-sm-auto align-self-center">
                                            <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
                                                <img class="logo-default logo-1x" src="images/rwandamobility.jpg"
                                                    alt="Logo">
                                                <img class="logo-default logo-2x retina" src="images/rwandamobility.jpg"
                                                    alt="Logo">
                                            </a>
                                        </div>
                                        <div class="col-sm-auto ml-auto pr-0 align-self-center">
                                            <nav id="top-primary-nav" class="menuzord green" data-effect="fade"
                                                data-animation="none" data-align="right">
                                                <ul id="main-nav" class="menuzord-menu">
                                                    <li class="active"><a href="{{ route('home') }}">Home</a>

                                                    </li>
                                                    <li><a href="{{ route('about-us') }}">About Us</a>

                                                    </li>
                                                    <li><a href="{{ route('contact-us') }}">Contact Us</a>

                                                    </li>
                                                    <li><a href="{{ route('events') }}">Events</a>

                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                        <a href="#">Donate</a>

                                                    </li>
                                                    {{-- <li><a href="page-contact.html">Contact</a></li> --}}
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: home -->
            <section class="page-title divider layer-overlay overlay-dark-8 section-typo-light"
                data-tm-bg-img="images/bg/bg11.jpg">
                <div class="container pt-90 pb-90">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="title text-white">Causes Carousel</h2>
                                <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                                    <div class="breadcrumbs">
                                        <span class="trail-item trail-begin">
                                            <a href="{{ route('home') }}"><span>Home</span></a>
                                        </span>
                                        <span><i class="fa fa-angle-right"></i></span>
                                        <span><i class="fa fa-angle-right"></i></span>
                                        <span itemscope itemtype="http://schema.org/ListItem"
                                            class="trail-item trail-end active"><span>Causes</span></span>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our-Causes -->
            <section>
                <div class="container pb-80">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div
                                    class="tm-sc tm-sc-charitable-campaigns tm-sc-charitable-campaigns-carousel owl-dots-light-skin">
                                    <!-- Isotope Gallery Grid -->
                                    <div class="owl-carousel owl-theme tm-owl-carousel-3col" data-nav="true"
                                        data-dots="true" data-autoplay="true" data-loop="true" data-duration="6000"
                                        data-margin="30">
                                        <!-- the loop -->
                                        <div class="tm-carousel-item food water">
                                            <div
                                                class="charitable-campaign post-15433 campaign type-campaign status-publish has-post-thumbnail hentry campaign_category-food campaign_category-water campaign-has-goal campaign-has-end-date">
                                                <div class="campaign-inner">
                                                    <div class="campaign-thumbnail">
                                                        <a href="#"><img width="672" height="448"
                                                                src="images/causes/1.jpg"
                                                                class="img-fullwidth wp-post-image"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="campaign-content">
                                                        <h4 class="campaign-title">
                                                            <a href="#">Sponsor a Child</a>
                                                        </h4>
                                                        <div class="campaign-meta">
                                                        </div>
                                                        <div class="campaign-description">
                                                            Lorem ipsum dolor sit amet, consect adipisicing elit.
                                                            Praesent quos sit.Lorem ipsum dolor sit amet, consect
                                                            adipisicing elit. Praesent quos sit.
                                                        </div>
                                                        <div class="tm-sc tm-sc-progress-bar progress-bar-default charitable-progress-bar"
                                                            data-percent="80" data-unit-left="$" data-unit-right=""
                                                            data-bar-height="" data-barcolor="bg-theme-colored1">
                                                            <div class="progress-holder">
                                                                <div class="progress-content"><span
                                                                        class="symbol-left">$</span><span
                                                                        class="value">80</span><span
                                                                        class="symbol-right"></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="campaign-donation-stats">
                                                            <div class="donation-raised"><span
                                                                    class="progress-title">Raised:</span> <span
                                                                    class="amount">&#036;3,500.00</span></div>
                                                            <div class="donation-goal"><span
                                                                    class="progress-title">Goal:</span> <span
                                                                    class="amount goal-amount">&#036;7,500.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="campaigns-btn">
                                                            <a href="#"
                                                                class="btn btn-theme-colored1 btn-xs">View Details</a>
                                                            <a href="#" class="btn btn-dark btn-xs">Donate
                                                                Now</a>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tm-carousel-item food water">
                                            <div
                                                class="charitable-campaign post-15432 campaign type-campaign status-publish has-post-thumbnail hentry campaign_category-food campaign_category-water campaign-has-goal campaign-has-end-date">
                                                <div class="campaign-inner">
                                                    <div class="campaign-thumbnail">
                                                        <a href="#">
                                                            <img width="672" height="448"
                                                                src="images/causes/7.jpg"
                                                                class="img-fullwidth wp-post-image"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="campaign-content">
                                                        <h4 class="campaign-title">
                                                            <a href="#">Help Senior Citizens</a>
                                                        </h4>
                                                        <div class="campaign-meta">
                                                        </div>
                                                        <div class="campaign-description">
                                                            Lorem ipsum dolor sit amet, consect adipisicing elit.
                                                            Praesent quos sit.Lorem ipsum dolor sit amet, consect
                                                            adipisicing elit. Praesent quos sit.
                                                        </div>
                                                        <div class="tm-sc tm-sc-progress-bar progress-bar-default charitable-progress-bar"
                                                            data-percent="73" data-unit-left="$" data-unit-right=""
                                                            data-bar-height="" data-barcolor="bg-theme-colored1">
                                                            <div class="progress-holder">
                                                                <div class="progress-content"><span
                                                                        class="symbol-left">$</span><span
                                                                        class="value">73</span><span
                                                                        class="symbol-right"></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="campaign-donation-stats">
                                                            <div class="donation-raised"><span
                                                                    class="progress-title">Raised:</span> <span
                                                                    class="amount">&#036;4,500.00</span></div>
                                                            <div class="donation-goal"><span
                                                                    class="progress-title">Goal:</span> <span
                                                                    class="amount goal-amount">&#036;8,600.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="campaigns-btn">
                                                            <a href="#"
                                                                class="btn btn-theme-colored1 btn-xs">View Details</a>
                                                            <a href="#" class="btn btn-dark btn-xs">Donate
                                                                Now</a>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tm-carousel-item environment water">
                                            <div
                                                class="charitable-campaign post-15431 campaign type-campaign status-publish has-post-thumbnail hentry campaign_category-environment campaign_category-water campaign-has-goal campaign-is-endless">
                                                <div class="campaign-inner">
                                                    <div class="campaign-thumbnail">
                                                        <a href="#"><img width="672" height="448"
                                                                src="images/causes/3.jpg"
                                                                class="img-fullwidth wp-post-image"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="campaign-content">
                                                        <h4 class="campaign-title">
                                                            <a href="#">Help rebuild Nepal</a>
                                                        </h4>
                                                        <div class="campaign-meta">
                                                        </div>
                                                        <div class="campaign-description">
                                                            Lorem ipsum dolor sit amet, consect adipisicing elit.
                                                            Praesent quos sit.Lorem ipsum dolor sit amet, consect
                                                            adipisicing elit. Praesent quos sit.
                                                        </div>
                                                        <div class="tm-sc tm-sc-progress-bar progress-bar-default charitable-progress-bar"
                                                            data-percent="85" data-unit-left="$" data-unit-right=""
                                                            data-bar-height="" data-barcolor="bg-theme-colored1">
                                                            <div class="progress-holder">
                                                                <div class="progress-content"><span
                                                                        class="symbol-left">$</span><span
                                                                        class="value">85</span><span
                                                                        class="symbol-right"></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="campaign-donation-stats">
                                                            <div class="donation-raised"><span
                                                                    class="progress-title">Raised:</span> <span
                                                                    class="amount">&#036;4,000.00</span></div>
                                                            <div class="donation-goal"><span
                                                                    class="progress-title">Goal:</span> <span
                                                                    class="amount goal-amount">&#036;5,600.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="campaigns-btn">
                                                            <a href="#"
                                                                class="btn btn-theme-colored1 btn-xs">View Details</a>
                                                            <a href="#" class="btn btn-dark btn-xs">Donate
                                                                Now</a>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tm-carousel-item food water">
                                            <div
                                                class="charitable-campaign post-15430 campaign type-campaign status-publish has-post-thumbnail hentry campaign_category-food campaign_category-water campaign-has-goal campaign-has-end-date">
                                                <div class="campaign-inner">
                                                    <div class="campaign-thumbnail">
                                                        <a href="#"><img width="672" height="448"
                                                                src="images/causes/4.jpg"
                                                                class="img-fullwidth wp-post-image"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="campaign-content">
                                                        <h4 class="campaign-title">
                                                            <a href="#">Build School For Poor</a>
                                                        </h4>
                                                        <div class="campaign-meta">
                                                        </div>
                                                        <div class="campaign-description">
                                                            Lorem ipsum dolor sit amet, consect adipisicing elit.
                                                            Praesent quos sit.Lorem ipsum dolor sit amet, consect
                                                            adipisicing elit. Praesent quos sit.
                                                        </div>
                                                        <div class="tm-sc tm-sc-progress-bar progress-bar-default charitable-progress-bar"
                                                            data-percent="53" data-unit-left="$" data-unit-right=""
                                                            data-bar-height="" data-barcolor="bg-theme-colored1">
                                                            <div class="progress-holder">
                                                                <div class="progress-content"><span
                                                                        class="symbol-left">$</span><span
                                                                        class="value">53</span><span
                                                                        class="symbol-right"></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="campaign-donation-stats">
                                                            <div class="donation-raised"><span
                                                                    class="progress-title">Raised:</span> <span
                                                                    class="amount">&#036;1,000.00</span></div>
                                                            <div class="donation-goal"><span
                                                                    class="progress-title">Goal:</span> <span
                                                                    class="amount goal-amount">&#036;7,500.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="campaigns-btn">
                                                            <a href="#"
                                                                class="btn btn-theme-colored1 btn-xs">View Details</a>
                                                            <a href="#" class="btn btn-dark btn-xs">Donate
                                                                Now</a>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tm-carousel-item food water">
                                            <div
                                                class="charitable-campaign post-15430 campaign type-campaign status-publish has-post-thumbnail hentry campaign_category-food campaign_category-water campaign-has-goal campaign-has-end-date">
                                                <div class="campaign-inner">
                                                    <div class="campaign-thumbnail">
                                                        <a href="#"><img width="672" height="448"
                                                                src="images/causes/5.jpg"
                                                                class="img-fullwidth wp-post-image"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="campaign-content">
                                                        <h4 class="campaign-title">
                                                            <a href="#"> Home For Homeless</a>
                                                        </h4>
                                                        <div class="campaign-meta">
                                                        </div>
                                                        <div class="campaign-description">
                                                            Lorem ipsum dolor sit amet, consect adipisicing elit.
                                                            Praesent quos sit.Lorem ipsum dolor sit amet, consect
                                                            adipisicing elit. Praesent quos sit.
                                                        </div>
                                                        <div class="tm-sc tm-sc-progress-bar progress-bar-default charitable-progress-bar"
                                                            data-percent="89" data-unit-left="$" data-unit-right=""
                                                            data-bar-height="" data-barcolor="bg-theme-colored1">
                                                            <div class="progress-holder">
                                                                <div class="progress-content"><span
                                                                        class="symbol-left">$</span><span
                                                                        class="value">89</span><span
                                                                        class="symbol-right"></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="campaign-donation-stats">
                                                            <div class="donation-raised"><span
                                                                    class="progress-title">Raised:</span> <span
                                                                    class="amount">&#036;1,000.00</span></div>
                                                            <div class="donation-goal"><span
                                                                    class="progress-title">Goal:</span> <span
                                                                    class="amount goal-amount">&#036;7,500.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="campaigns-btn">
                                                            <a href="#"
                                                                class="btn btn-theme-colored1 btn-xs">View Details</a>
                                                            <a href="#" class="btn btn-dark btn-xs">Donate
                                                                Now</a>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tm-carousel-item food water">
                                            <div
                                                class="charitable-campaign post-15430 campaign type-campaign status-publish has-post-thumbnail hentry campaign_category-food campaign_category-water campaign-has-goal campaign-has-end-date">
                                                <div class="campaign-inner">
                                                    <div class="campaign-thumbnail">
                                                        <a href="#"><img width="672" height="448"
                                                                src="images/causes/6.jpg"
                                                                class="img-fullwidth wp-post-image"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="campaign-content">
                                                        <h4 class="campaign-title">
                                                            <a href="#">Donate For Refugee</a>
                                                        </h4>
                                                        <div class="campaign-meta">
                                                        </div>
                                                        <div class="campaign-description">
                                                            Lorem ipsum dolor sit amet, consect adipisicing elit.
                                                            Praesent quos sit.Lorem ipsum dolor sit amet, consect
                                                            adipisicing elit. Praesent quos sit.
                                                        </div>
                                                        <div class="tm-sc tm-sc-progress-bar progress-bar-default charitable-progress-bar"
                                                            data-percent="56" data-unit-left="$" data-unit-right=""
                                                            data-bar-height="" data-barcolor="bg-theme-colored1">
                                                            <div class="progress-holder">
                                                                <div class="progress-content"><span
                                                                        class="symbol-left">$</span><span
                                                                        class="value">56</span><span
                                                                        class="symbol-right"></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="campaign-donation-stats">
                                                            <div class="donation-raised"><span
                                                                    class="progress-title">Raised:</span> <span
                                                                    class="amount">&#036;1,000.00</span></div>
                                                            <div class="donation-goal"><span
                                                                    class="progress-title">Goal:</span> <span
                                                                    class="amount goal-amount">&#036;7,500.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="campaigns-btn">
                                                            <a href="#"
                                                                class="btn btn-theme-colored1 btn-xs">View Details</a>
                                                            <a href="#" class="btn btn-dark btn-xs">Donate
                                                                Now</a>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of the loop -->
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our-Work -->
            {{-- <section data-tm-bg-color="#f8f4f0">
                <div class="container pb-80">
                    <div class="section-title text-center mb-40">
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <h2 class="title text-uppercase mt-0"><span class="">What We Did</span> <span
                                        class="text-theme-colored1">Last Year</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem
                                    obcaecati consectetur adipisicing</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-sm-6">
                                <div
                                    class="tm-sc tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive icon-position-icon-left mb-30">
                                    <a class="icon icon-type-image  icon-default">
                                        <img src="images/icon/girl.png" alt="Image"></a>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mt-0">
                                            85770 Women were Benefited and Empowered
                                        </h5>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem
                                                voluptatem obcaecati consectetur adipisicing</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div
                                    class="tm-sc tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive icon-position-icon-left">
                                    <a class="icon icon-type-image  icon-default">
                                        <img src="images/icon/piggy-bank.png" alt="Image"></a>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mt-0">
                                            Scholarship Support was Provided to 150 Less Privileged Girls for Higher
                                            Education
                                        </h5>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem
                                                voluptatem obcaecati consectetur adipisicing</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div
                                    class="tm-sc tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive icon-position-icon-left mb-30">
                                    <a class="icon icon-type-image  icon-default">
                                        <img src="images/icon/vaccine.png" alt="Image"></a>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mt-0">
                                            703,026 Girls Supported Before, During and After Emergencies
                                        </h5>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem
                                                voluptatem obcaecati consectetur adipisicing</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div
                                    class="tm-sc tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive icon-position-icon-left">
                                    <a class="icon icon-type-image  icon-default">
                                        <img src="images/icon/house.png" alt="Image"></a>
                                    <div class="icon-text">
                                        <h5 class="icon-box-title mt-0">
                                            98650 Women and Girls were Provided Better water and sanitation
                                        </h5>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem
                                                voluptatem obcaecati consectetur adipisicing</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
        <!-- end main-content -->

        <!-- Footer -->
        <footer id="footer" class="footer">
            <div class="footer-widget-area">
                <div class="container pt-90 pb-60">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class=" split-nav-menu clearfix widget widget-contact-info clearfix">
                                <div
                                    class="tm-widget tm-widget-contact-info contact-info contact-info-style1  contact-icon-theme-colored1">
                                    <div class="thumb">
                                        <img alt="Logo" src="images/rwandamobility.jpg">
                                    </div>
                                    <div class="description">(CRFPD) is a non-profit
                                        organization founded in 2017 and
                                        incorporated in the Government of Alberta, Canada
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="widget widget_nav_menu">
                                <h4 class="widget-title ">Useful Links</h4>
                                <div class="menu-quick-links-container">
                                    <ul class="menu">
                                        <li id="menu-item-16307"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16307">
                                            <a href="{{ route('about-us') }}">About Us</a>
                                        </li>
                                        <li id="menu-item-16308"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16308">
                                            <a href="{{ route('contact-us') }}">Contact Us</a>
                                        </li>

                                        <li id="menu-item-16310"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16310">
                                            <a href="#">Donate</a>
                                        </li>
                                        <li id="menu-item-16311"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16311">
                                            <a href="{{ route('galery') }}">Galery</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class=" split-nav-menu clearfix widget widget-blog-list clearfix">
                                <h4 class="widget-title ">Latest News</h4>
                                <div class="tm-widget tm-widget-blog-list ">
                                    <!-- the loop -->
                                    <article class="post media-post clearfix"> <a class="post-thumb"
                                            href="#"><img width="100" height="70"
                                                src="images/blog/3.jpg" class="" alt="" /></a>
                                        <div class="post-right">
                                            <h5 class="post-title"> <a href="#"> Water for poor children </a>
                                            </h5>
                                            <span class="post-date">
                                                <time class="entry-date" datetime="2019-05-15T06:10:26+00:00">April
                                                    15, 2019</time>
                                            </span>
                                        </div>
                                    </article>
                                    <article class="post media-post clearfix"> <a class="post-thumb"
                                            href="#"><img width="100" height="70"
                                                src="images/blog/4.jpg" class="" alt="" /></a>
                                        <div class="post-right">
                                            <h5 class="post-title"> <a href="#"> School For Poor </a> </h5>
                                            <span class="post-date">
                                                <time class="entry-date" datetime="2019-07-15T06:10:26+00:00">June 15,
                                                    2019</time>
                                            </span>
                                        </div>
                                    </article>
                                    <article class="post media-post clearfix"> <a class="post-thumb"
                                            href="#"><img width="100" height="70"
                                                src="images/blog/5.jpg" class="" alt="" /></a>
                                        <div class="post-right">
                                            <h5 class="post-title"> <a href="#"> Shelter For Homeless </a> </h5>
                                            <span class="post-date">
                                                <time class="entry-date" datetime="2019-09-15T06:10:26+00:00">November
                                                    15, 2019</time>
                                            </span>
                                        </div>
                                    </article>
                                    <!-- end of the loop -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class=" split-nav-menu clearfix widget widget-opening-hours-compressed clearfix">
                                <h4 class="widget-title ">Opening Hours</h4>
                                <ul
                                    class="tm-widget tm-widget-opening-hours tm-widget-opening-hours-compressed opening-hours border-dark">
                                    <li class="clearfix"> <span>Monday - Tuesday</span>
                                        <div class="value">9.00 - 17.00</div>
                                    </li>
                                    <li class="clearfix"> <span>Wednesday</span>
                                        <div class="value">9.00 - 16.00</div>
                                    </li>
                                    <li class="clearfix"> <span>Thursday - Friday</span>
                                        <div class="value">9.00 - 16.00</div>
                                    </li>
                                    <li class="clearfix"> <span>Saturday</span>
                                        <div class="value">9.00 - 16.00</div>
                                    </li>
                                    <li class="clearfix"> <span>Sunday</span>
                                        <div class="value">Closed</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
                    <div class="container">
                        <div class="row pt-20 pb-20">
                            <div class="col-sm-6">
                                <div class="footer-paragraph">
                                    © 2024 CRFPD. All Rights Reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="assets/dist/js/custom.js"></script>

</body>

</html>
