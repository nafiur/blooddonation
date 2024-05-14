<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Donation Management System</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front_page/assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front_page/assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front_page/assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('front_page/assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Blood Donation Management System." />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/icofont/icofont.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/tiny-slider/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('front_page/assets/css/style.css') }}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url({{ asset('front_page/assets/images/loader.png') }});"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__inner">
                    <p class="topbar-one__info">Wellcome To <span> Blood Donation Management System !</span></p><!-- /.topbar-one__text -->
                    <div class="topbar-one__social">
                        <p class="topbar-one__social__text">Visit our social pages:</p>
                        <a href="https://facebook.com/" style="--accent-color: #ff5528;">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://twitter.com/" style="--accent-color: #ffa415;">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="https://vimeo.com/" style="--accent-color: #8139e7;">
                            <i class="fab fa-vimeo-v" aria-hidden="true"></i>
                            <span class="sr-only">vimeo</span>
                        </a>
                        <a href="https://pinterest.com/" style="--accent-color: #44c895;">
                            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                            <span class="sr-only">Pinterest</span>
                        </a>
                    </div><!-- /.topbar-one__social -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container -->
            <div class="topbar-one__bottom">
                <div class="container">
                    <div class="topbar-one__bottom__inner">
                        <div class="topbar-one__bottom__logo">
                            <a href="index.html">
                                <img src="{{ asset('front_page/assets/images/logo-dark.png') }}" alt="Blood Donation Management System" width="223">
                            </a>
                        </div><!-- /.main-header__logo -->
                        <div class="topbar-one__bottom__right">
                            <div class="topbar-one__bottom__info" style="--accent-color: #ffa415;">
                                <div class="topbar-one__bottom__info__icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="topbar-one__bottom__info__content">
                                    <h5 class="topbar-one__bottom__info__text"><a href="tel:+0449123452">+0(449) 123 452</a></h5>
                                    <p class="topbar-one__bottom__info__title">Requesting a Call:</p>
                                </div>
                            </div><!-- /.topbar-one__info -->
                            <div class="topbar-one__bottom__info" style="--accent-color: #ff5528;">
                                <div class="topbar-one__bottom__info__icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="topbar-one__bottom__info__content">
                                    <h5 class="topbar-one__bottom__info__text"><a href="mailto:info@email.com">info@email.com</a></h5>
                                    <p class="topbar-one__bottom__info__title">Your E-mail</p>
                                </div>
                            </div><!-- /.topbar-one__info -->
                            <div class="topbar-one__bottom__info" style="--accent-color: #8139e7;">
                                <div class="topbar-one__bottom__info__icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="topbar-one__bottom__info__content">
                                    <h5 class="topbar-one__bottom__info__text">23/29 St Road</h5>
                                    <p class="topbar-one__bottom__info__title">Melbourne,London</p>
                                </div>
                            </div><!-- /.topbar-one__info -->
                        </div>
                    </div>
                </div>
                <div class="topbar-one__bottom__button">
                    <img src="{{ asset('front_page/assets/images/shapes/arrow-1.png') }}" alt="Blood Donation Management System">
                    <a href="donate.html" class="btn"><span><i class="icofont-heart"></i>Donate Now</span></a>
                </div>
            </div><!-- /.middle-one -->
        </div><!-- /.topbar-one -->


        <header class="main-header sticky-header sticky-header--normal">
            <div class="container">
                <div class="main-header__inner">
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li class="megamenu megamenu-clickable megamenu-clickable--toggler">
                                <a href="index.html">Demos</a>
                                <ul>
                                    <li>
                                        <div class="megamenu-popup">
                                            <a href="#" class="megamenu-clickable--close"><span class="icon-close"></span></a>
                                            <!-- /.megamenu-clickable--close -->
                                            <div class="megamenu-popup__content">
                                                <div class="demo-one">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-6 col-lg-4">
                                                                <div class="demo-one__card">
                                                                    <div class="demo-one__image">
                                                                        <img src="{{ asset('front_page/assets/images/landing/home-1.jpg') }}" alt="">
                                                                        <div class="demo-one__btns">
                                                                            <a href="index.html" class="btn demo-one__btn">
                                                                                <span>Multi Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                            <a href="index-one-page.html" class="btn demo-one__btn">
                                                                                <span>One Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                            <a href="index-dark.html" class="btn demo-one__btn">
                                                                                <span>Dark Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                        </div><!-- /.demo-one__btns -->
                                                                    </div><!-- /.demo-one__image -->
                                                                    <div class="demo-one__content">
                                                                        <h3 class="demo-one__title">
                                                                            <a href="index.html">Home Page 01</a>
                                                                        </h3><!-- /.demo-one__title -->
                                                                    </div><!-- /.demo-one__content -->
                                                                </div><!-- /.demo-one__card -->
                                                            </div><!-- /.col-md-6 col-lg-3 -->
                                                            <div class="col-md-6 col-lg-4">
                                                                <div class="demo-one__card">
                                                                    <div class="demo-one__image">
                                                                        <img src="{{ asset('front_page/assets/images/landing/home-2.jpg') }}" alt="">
                                                                        <div class="demo-one__btns">
                                                                            <a href="index-2.html" class="btn demo-one__btn">
                                                                                <span>Multi Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                            <a href="index-2-one-page.html" class="btn demo-one__btn">
                                                                                <span>One Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                            <a href="index-2-dark.html" class="btn demo-one__btn">
                                                                                <span>Dark Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                        </div><!-- /.demo-one__btns -->
                                                                    </div><!-- /.demo-one__image -->
                                                                    <div class="demo-one__content">
                                                                        <h3 class="demo-one__title">
                                                                            <a href="index-2.html">Home Page 02</a>
                                                                        </h3><!-- /.demo-one__title -->
                                                                    </div><!-- /.demo-one__content -->
                                                                </div><!-- /.demo-one__card -->
                                                            </div><!-- /.col-md-6 col-lg-3 -->
                                                            <div class="col-md-6 col-lg-4">
                                                                <div class="demo-one__card">
                                                                    <div class="demo-one__image">
                                                                        <img src="{{ asset('front_page/assets/images/landing/home-3.jpg') }}" alt="">
                                                                        <div class="demo-one__btns">
                                                                            <a href="index-3.html" class="btn demo-one__btn">
                                                                                <span>Multi Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                            <a href="index-3-one-page.html" class="btn demo-one__btn">
                                                                                <span>One Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                            <a href="index-3-dark.html" class="btn demo-one__btn">
                                                                                <span>Dark Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                        </div><!-- /.demo-one__btns -->
                                                                    </div><!-- /.demo-one__image -->
                                                                    <div class="demo-one__content">
                                                                        <h3 class="demo-one__title">
                                                                            <a href="index-3.html">Home Page 03</a>
                                                                        </h3><!-- /.demo-one__title -->
                                                                    </div><!-- /.demo-one__content -->
                                                                </div><!-- /.demo-one__card -->
                                                            </div><!-- /.col-md-6 col-lg-3 -->
                                                            <div class="col-md-6 col-lg-4">
                                                                <div class="demo-one__card">
                                                                    <div class="demo-one__image">
                                                                        <img src="{{ asset('front_page/assets/images/landing/home-4.jpg') }}" alt="">
                                                                        <div class="demo-one__btns">
                                                                            <a href="index-4.html" class="btn demo-one__btn">
                                                                                <span>Multi Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                            <a href="index-4-one-page.html" class="btn demo-one__btn">
                                                                                <span>One Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                            <a href="index-4-dark.html" class="btn demo-one__btn">
                                                                                <span>Dark Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                        </div><!-- /.demo-one__btns -->
                                                                    </div><!-- /.demo-one__image -->
                                                                    <div class="demo-one__content">
                                                                        <h3 class="demo-one__title">
                                                                            <a href="index-4.html">Home Page 04</a>
                                                                        </h3><!-- /.demo-one__title -->
                                                                    </div><!-- /.demo-one__content -->
                                                                </div><!-- /.demo-one__card -->
                                                            </div><!-- /.col-md-6 col-lg-3 -->
                                                            <div class="col-md-6 col-lg-4">
                                                                <div class="demo-one__card">
                                                                    <div class="demo-one__image">
                                                                        <img src="{{ asset('front_page/assets/images/landing/home-boxed.jpg') }}" alt="">
                                                                        <div class="demo-one__btns">
                                                                            <a href="index-boxed.html" class="btn demo-one__btn">
                                                                                <span>View Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                        </div><!-- /.demo-one__btns -->
                                                                    </div><!-- /.demo-one__image -->
                                                                    <div class="demo-one__content">
                                                                        <h3 class="demo-one__title">
                                                                            <a href="index-boxed.html">Home Boxed</a>
                                                                        </h3><!-- /.demo-one__title -->
                                                                    </div><!-- /.demo-one__content -->
                                                                </div><!-- /.demo-one__card -->
                                                            </div><!-- /.col-md-6 col-lg-3 -->
                                                            <div class="col-md-6 col-lg-4">
                                                                <div class="demo-one__card">
                                                                    <div class="demo-one__image">
                                                                        <img src="{{ asset('front_page/assets/images/landing/home-rtl.jpg') }}" alt="">
                                                                        <div class="demo-one__btns">
                                                                            <a href="index-rtl.html#googtrans(en%7car)" class="btn demo-one__btn">
                                                                                <span>View Page</span>
                                                                            </a><!-- /.thm-btn demo-one__btn -->
                                                                        </div><!-- /.demo-one__btns -->
                                                                    </div><!-- /.demo-one__image -->
                                                                    <div class="demo-one__content">
                                                                        <h3 class="demo-one__title">
                                                                            <a href="index-rtl.html#googtrans(en%7car)">Home RTL</a>
                                                                        </h3><!-- /.demo-one__title -->
                                                                    </div><!-- /.demo-one__content -->
                                                                </div><!-- /.demo-one__card -->
                                                            </div><!-- /.col-md-6 col-lg-3 -->
                                                        </div><!-- /.row -->
                                                    </div><!-- /.container -->
                                                </div><!-- /.demos-one -->
                                            </div><!-- /.megamenu-popup__content -->
                                        </div><!-- /.megamenu-popup -->
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Pages</a>
                                <ul>
                                    <li class="dropdown">
                                        <a href="#">Events</a>
                                        <ul>
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="events-carousel.html">Events Carousel</a></li>
                                            <li><a href="event-details.html">Events Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Volunteer</a>
                                        <ul>
                                            <li><a href="team.html">Our Volunteer</a></li>
                                            <li><a href="team-carousel.html">Volunteer Carousel</a></li>
                                            <li><a href="team-details.html">Volunteer Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="become-a-volunteer.html">Become A Volunteer</a></li>
                                    <li><a href="reviews.html">Testimonials</a></li>
                                    <li><a href="reviews-carousel.html">Testimonials Carousel</a></li>
                                    <li><a href="packages.html">Pricing</a></li>
                                    <li><a href="packages-carousel.html">Pricing Carousel</a></li>
                                    <li>
                                        <a href="gallery.html">Gallery</a>
                                        <ul>
                                            <li><a href="gallery.html">Gallery masonry</a></li>
                                            <li><a href="gallery-filter.html">Gallery filter</a></li>
                                            <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                            <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Donations</a>
                                <ul class="sub-menu">
                                    <li class="dropdown">
                                        <a href="#">Donations Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="donations-one.html">Donations 01</a></li>
                                            <li><a href="donations-two.html">Donations 02</a></li>
                                            <li><a href="donations-three.html">Donations 03</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Donations Carousel</a>
                                        <ul class="sub-menu">
                                            <li><a href="donations-four.html">Donations 01</a></li>
                                            <li><a href="donations-five.html">Donations 02</a></li>
                                            <li><a href="donations-six.html">Donations 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="donations-details.html">Donations Details</a></li>
                                    <li><a href="donate.html">Donate Now</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="dropdown">
                                        <a href="#">Products</a>
                                        <ul class="sub-menu">
                                            <li><a href="products.html">No Sidebar</a></li>
                                            <li><a href="products-left.html">Left Sidebar</a></li>
                                            <li><a href="products-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="products-carousel.html">Products Carousel</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">News</a>
                                <ul class="sub-menu">
                                    <li class="dropdown">
                                        <a href="#">News grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid.html">No sidebar</a></li>
                                            <li><a href="blog-grid-left.html">Left sidebar</a></li>
                                            <li><a href="blog-grid-right.html">Right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">News list</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list.html">No Sidebar</a></li>
                                            <li><a href="blog-list-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-list-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-carousel.html">News carousel</a></li>
                                    <li class="dropdown">
                                        <a href="#">News details</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-details.html">No Sidebar</a></li>
                                            <li><a href="blog-details-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-details-right.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <a href="#" class="search-toggler main-header__search">
                            <i class="icon-magnifying-glass" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a><!-- /.search-toggler -->
                        <a href="cart.html" class="main-header__cart">
                            <i class="icon-shopping-cart" aria-hidden="true"></i>
                            <span class="main-header__cart__count">02</span>
                            <span class="sr-only">Cart</span>
                        </a><!-- /.search-toggler -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->
        <!-- main-slider-start -->
        <section class="main-slider-one">
            <div class="main-slider-one__carousel careox-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": false,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": true,
		"margin": 0
	    }'>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url({{ asset('front_page/assets/images/backgrounds/slider-1-1.jpg') }});"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle class='circle0 steap' cx="50%" cy="55%" r="5.2%" />
                            <circle class='circle1 steap' cx="50%" cy="55%" r="15.6%" />
                            <circle class='circle2 steap' cx="50%" cy="55%" r="26%" />
                            <circle class='circle3 steap' cx="50%" cy="55%" r="36.4%" />
                            <circle class='circle4 steap' cx="50%" cy="55%" r="46.8%" />
                            <circle class='circle5 steap' cx="50%" cy="55%" r="57%" />
                            <circle class='circle6 steap' cx="50%" cy="55%" r="67.7%" />
                            <circle class='circle7 steap' cx="50%" cy="55%" r="78.1%" />
                            <circle class='circle8 steap' cx="50%" cy="55%" r="88.5%" />
                            <circle class='circle9 steap' cx="50%" cy="55%" r="100%" />
                        </svg>
                        <div class="main-slider-one__shape-one"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-1.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__shape-two"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-2.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__shape-three"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-3.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__shape-four"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-4.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__layer" style="background-image: url({{ asset('front_page/assets/images/shapes/slider-1-layer-bg.png') }});">
                            <div class="main-slider-one__layer__inner">
                                <img src="{{ asset('front_page/assets/images/backgrounds/slider-1-layer-1.jpg') }}" alt="Blood Donation Management System">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <div class="main-slider-one__image">
                                            <img src="{{ asset('front_page/assets/images/shapes/slider-1-arrow.png') }}" alt="Blood Donation Management System">
                                            <img src="{{ asset('front_page/assets/images/shapes/slider-1-hand.png') }}" alt="Blood Donation Management System">
                                        </div>
                                        <!-- slider-sub-title -->
                                        <h2 class="main-slider-one__title">Give Child Poor <br>Gift Helping Now.</h2><!-- slider-title -->
                                        <p class="main-slider-one__text">
                                            Poor can only be as strong as our people & because of team<br> have designed game changing products.
                                        </p><!-- slider-text -->
                                        <div class="main-slider-one__btn">
                                            <a href="about.html" class="btn"><span>Discover more</span></a><!-- slider-btn -->
                                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                <i class="icofont-ui-play"></i>
                                                <span class="ripple"></span>
                                            </a><!-- slider-video -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url({{ asset('front_page/assets/images/backgrounds/slider-1-1.jpg') }});"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle class='circle0 steap' cx="50%" cy="55%" r="5.2%" />
                            <circle class='circle1 steap' cx="50%" cy="55%" r="15.6%" />
                            <circle class='circle2 steap' cx="50%" cy="55%" r="26%" />
                            <circle class='circle3 steap' cx="50%" cy="55%" r="36.4%" />
                            <circle class='circle4 steap' cx="50%" cy="55%" r="46.8%" />
                            <circle class='circle5 steap' cx="50%" cy="55%" r="57%" />
                            <circle class='circle6 steap' cx="50%" cy="55%" r="67.7%" />
                            <circle class='circle7 steap' cx="50%" cy="55%" r="78.1%" />
                            <circle class='circle8 steap' cx="50%" cy="55%" r="88.5%" />
                            <circle class='circle9 steap' cx="50%" cy="55%" r="100%" />
                        </svg>
                        <div class="main-slider-one__shape-one"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-1.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__shape-two"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-2.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__shape-three"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-3.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__shape-four"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-4.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__layer" style="background-image: url({{ asset('front_page/assets/images/shapes/slider-1-layer-bg.png') }});">
                            <div class="main-slider-one__layer__inner">
                                <img src="{{ asset('front_page/assets/images/backgrounds/slider-1-layer-2.jpg') }}" alt="Blood Donation Management System">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <div class="main-slider-one__image">
                                            <img src="{{ asset('front_page/assets/images/shapes/slider-1-arrow.png') }}" alt="Blood Donation Management System">
                                            <img src="{{ asset('front_page/assets/images/shapes/slider-1-hand.png') }}" alt="Blood Donation Management System">
                                        </div>
                                        <!-- slider-sub-title -->
                                        <h2 class="main-slider-one__title">Give Child Poor <br>Gift Helping Now.</h2><!-- slider-title -->
                                        <p class="main-slider-one__text">
                                            Poor can only be as strong as our people & because of team<br> have designed game changing products.
                                        </p><!-- slider-text -->
                                        <div class="main-slider-one__btn">
                                            <a href="about.html" class="btn"><span>Discover more</span></a><!-- slider-btn -->
                                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                <i class="icofont-ui-play"></i>
                                                <span class="ripple"></span>
                                            </a><!-- slider-video -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url({{ asset('front_page/assets/images/backgrounds/slider-1-1.jpg') }});"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle class='circle0 steap' cx="50%" cy="55%" r="5.2%" />
                            <circle class='circle1 steap' cx="50%" cy="55%" r="15.6%" />
                            <circle class='circle2 steap' cx="50%" cy="55%" r="26%" />
                            <circle class='circle3 steap' cx="50%" cy="55%" r="36.4%" />
                            <circle class='circle4 steap' cx="50%" cy="55%" r="46.8%" />
                            <circle class='circle5 steap' cx="50%" cy="55%" r="57%" />
                            <circle class='circle6 steap' cx="50%" cy="55%" r="67.7%" />
                            <circle class='circle7 steap' cx="50%" cy="55%" r="78.1%" />
                            <circle class='circle8 steap' cx="50%" cy="55%" r="88.5%" />
                            <circle class='circle9 steap' cx="50%" cy="55%" r="100%" />
                        </svg>
                        <div class="main-slider-one__shape-one"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-1.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__shape-two"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-2.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__shape-three"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-3.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__shape-four"><img src="{{ asset('front_page/assets/images/shapes/slider-1-shape-4.png') }}" alt="Blood Donation Management System"></div>
                        <div class="main-slider-one__layer" style="background-image: url({{ asset('front_page/') }}assets/images/shapes/slider-1-layer-bg.png);">
                            <div class="main-slider-one__layer__inner">
                                <img src="{{ asset('front_page/assets/images/backgrounds/slider-1-layer-3.jpg') }}" alt="Blood Donation Management System">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <div class="main-slider-one__image">
                                            <img src="{{ asset('front_page/assets/images/shapes/slider-1-arrow.png') }}" alt="Blood Donation Management System">
                                            <img src="{{ asset('front_page/assets/images/shapes/slider-1-hand.png') }}" alt="Blood Donation Management System">
                                        </div>
                                        <!-- slider-sub-title -->
                                        <h2 class="main-slider-one__title">Give Child Poor <br>Gift Helping Now.</h2><!-- slider-title -->
                                        <p class="main-slider-one__text">
                                            Poor can only be as strong as our people & because of team<br> have designed game changing products.
                                        </p><!-- slider-text -->
                                        <div class="main-slider-one__btn">
                                            <a href="about.html" class="btn"><span>Discover more</span></a><!-- slider-btn -->
                                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                <i class="icofont-ui-play"></i>
                                                <span class="ripple"></span>
                                            </a><!-- slider-video -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-slider-end -->

        <section class="cta-one">
            <div class="container-fluid">
                <div class="cta-one__shape-middle" style="background-image: url({{ asset('front_page/assets/images/shapes/cta-1-shape-2.png') }});"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-one__content" style="background-image: url({{ asset('front_page/assets/images/backgrounds/cta-bg-1-1.jpg') }});">
                            <h3 class="cta-one__title">Become Volunteer</h3>
                            <p class="cta-one__text">Lorem ipsum dolor sit amet, conse dtetur adipi sicing <br>elitare many variations.</p>
                            <a href="contact.html" class="btn"><span>See More</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cta-one__content cta-one__content--right" style="background-image: url({{ asset('front_page/assets/images/backgrounds/cta-bg-1-2.jpg') }});">
                            <h3 class="cta-one__title">Join Us Volunteer</h3>
                            <p class="cta-one__text">Lorem ipsum dolor sit amet, conse dtetur adipi sicing <br>elitare many variations.</p>
                            <a href="contact.html" class="btn"><span>See More</span></a>
                            <div class="cta-one__content__shape" style="background-image: url({{ asset('front_page/assets/images/shapes/cta-1-shape-1.png') }});"></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section><!-- /.cta-one -->

        <section class="about-one">
            <div class="about-one__shape"><img src="{{ asset('front_page/assets/images/shapes/about-1-shape-4.png') }}" alt="Blood Donation Management System"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__image wow fadeInLeft" data-wow-delay="100ms">
                            <div class="about-one__image__one">
                                <img src="{{ asset('front_page/assets/images/resources/about-1-1.jpg') }}" alt="Blood Donation Management System">
                            </div>
                            <div class="about-one__image__two">
                                <img src="{{ asset('front_page/assets/images/resources/about-1-2.jpg') }}" alt="Blood Donation Management System">
                                <div class="about-one__image__video">
                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                        <i class="icofont-ui-play"></i></a>Always Support Us!
                                </div>
                            </div>
                            <div class="about-one__image__shape-one"><img src="{{ asset('front_page/assets/images/shapes/about-1-shape-1.png') }}" alt="Blood Donation Management System"></div>
                            <div class="about-one__image__shape-two"><img src="{{ asset('front_page/assets/images/shapes/about-1-shape-2.png') }}" alt="Blood Donation Management System"></div>
                            <div class="about-one__image__shape-three"><img src="{{ asset('front_page/assets/images/shapes/about-1-shape-3.png') }}" alt="Blood Donation Management System"></div>
                        </div><!-- /.about__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="about-one__content">
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>OUR ABOUT US</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">We Believe This Lifes About Give For Poor People.</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="about-one__content__text">
                                Poor address a range of simply application and infrastructure this of passages of available, but
                                the majority have suffered poor alteration in some form.
                            </p>
                            <div class="row gutter-y-30">
                                <div class="col-md-6">
                                    <div class="about-one__content__box" style="--accent-color: #ffa415;">
                                        <div class="about-one__content__box__top">
                                            <div class="about-one__content__box__icon"><span class="icon-zakat"></span></div>
                                            <h5 class="about-one__content__box__title">Treatment Help</h5>
                                        </div>
                                        <p class="about-one__content__box__text"><span class="about-one__content__box__text__icon"><i class="icofont-check-circled"></i></span>No matter what you you have.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-one__content__box" style="--accent-color: #ff5528;">
                                        <div class="about-one__content__box__top">
                                            <div class="about-one__content__box__icon"><span class="icon-charity"></span></div>
                                            <h5 class="about-one__content__box__title">Help Raising</h5>
                                        </div>
                                        <p class="about-one__content__box__text"><span class="about-one__content__box__text__icon"><i class="icofont-check-circled"></i></span>No matter what you you have.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-one__content__border"></div>
                            <ul class="about-one__content__list">
                                <li>
                                    <span class="about-one__content__list__icon"><i class="icofont-check-circled"></i></span>
                                    We help companies develop powerful corporate social <a href="about.html">Responsibility,</a>
                                </li>
                                <li>
                                    <span class="about-one__content__list__icon"><i class="icofont-check-circled"></i></span>
                                    Helped fund 3,265 Project powerful corporate poor.
                                </li>
                            </ul>
                            <a href="about.html" class="btn"><span>About More</span></a>
                        </div><!-- /.about__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="about-one__text wow fadeInUp"><span>#</span> We Give Donations Poor People Impact on Someone’s Life. <a href="donation.html" class="btn"><span>Donate Now</span></a></div>
            </div><!-- /.container -->
        </section><!-- /.about-one -->

        <section class="funfact-one">
            <div class="container wow fadeInUp">
                <ul class="list-unstyled funfact-one__list">
                    <li class="funfact-one__item count-box" style="--accent-color: #ffa415;">
                        <div class="funfact-one__icon">
                            <i class="icon-charity-two"></i>
                        </div><!-- /.funfact-one__icon -->
                        <div class="funfact-one__content">
                            <h3 class="funfact-one__count"><span class="count-text" data-stop="232" data-speed="1500"></span>K</h3>
                            <!-- /.funfact-one__count -->
                            <p class="funfact-one__text">Poor Educate</p><!-- /.funfact-one__text -->
                        </div><!-- /.funfact-one__content -->
                    </li><!-- /.funfact-one__item -->
                    <li class="funfact-one__item count-box" style="--accent-color: #ff5528;">
                        <div class="funfact-one__icon">
                            <i class="icon-zakat"></i>
                        </div><!-- /.funfact-one__icon -->
                        <div class="funfact-one__content">
                            <h3 class="funfact-one__count"><span class="count-text" data-stop="99" data-speed="1500"></span>M+</h3>
                            <!-- /.funfact-one__count -->
                            <p class="funfact-one__text">Donate now</p><!-- /.funfact-one__text -->
                        </div><!-- /.funfact-one__content -->
                    </li><!-- /.funfact-one__item -->
                    <li class="funfact-one__item count-box" style="--accent-color: #8139e7;">
                        <div class="funfact-one__icon">
                            <i class="icon-interactions"></i>
                        </div><!-- /.funfact-one__icon -->
                        <div class="funfact-one__content">
                            <h3 class="funfact-one__count"><span class="count-text" data-stop="132" data-speed="1500"></span>K</h3>
                            <!-- /.funfact-one__count -->
                            <p class="funfact-one__text">Clients Help</p><!-- /.funfact-one__text -->
                        </div><!-- /.funfact-one__content -->
                    </li><!-- /.funfact-one__item -->
                    <li class="funfact-one__item count-box" style="--accent-color: #44c895;">
                        <div class="funfact-one__icon">
                            <i class="icon-multiple-users-silhouette"></i>
                        </div><!-- /.funfact-one__icon -->
                        <div class="funfact-one__content">
                            <h3 class="funfact-one__count"><span class="count-text" data-stop="35" data-speed="1500"></span>K+</h3>
                            <!-- /.funfact-one__count -->
                            <p class="funfact-one__text">Team Support</p><!-- /.funfact-one__text -->
                        </div><!-- /.funfact-one__content -->
                    </li><!-- /.funfact-one__item -->
                </ul><!-- /.list-unstyled funfact-one__list -->
            </div><!-- /.container -->
        </section><!-- /.funfact-one -->

        <!-- Service Start -->
        <section class="service-one">
            <div class="service-one__shape-one" style="background-image: url({{ asset('front_page/assets/images/shapes/service-bg-shape-1.png') }});"></div>
            <div class="service-one__shape-two" style="background-image: url({{ asset('front_page/assets/images/shapes/service-bg-shape-2.png') }});"></div>
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>OUR BEST SERVICE</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">We Help Poor This Lifes <br>Service Now</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="service-one__item text-center" style="--accent-color: #ffa415;">
                            <div class="service-one__item__icon">
                                <span class="icon-generous"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-one__item__title">Fund Raised</h3><!-- /.service-title -->
                            <p class="service-one__item__text">
                                With schools closed in NSW and Victoria, and childcare workers in places.
                            </p><!-- /.service-title -->
                            <div class="service-one__item__rm">
                                <a href="about.html">Read More</a>
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-one__item text-center" style="--accent-color: #ff5528;">
                            <div class="service-one__item__icon">
                                <span class="icon-zakat"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-one__item__title">Treatment Help</h3><!-- /.service-title -->
                            <p class="service-one__item__text">
                                With schools closed in NSW and Victoria, and childcare workers in places.
                            </p><!-- /.service-title -->
                            <div class="service-one__item__rm">
                                <a href="about.html">Read More</a>
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="service-one__item text-center" style="--accent-color: #8139e7;">
                            <div class="service-one__item__icon">
                                <span class="icon-zakat-two"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-one__item__title">Hand Children</h3><!-- /.service-title -->
                            <p class="service-one__item__text">
                                With schools closed in NSW and Victoria, and childcare workers in places.
                            </p><!-- /.service-title -->
                            <div class="service-one__item__rm">
                                <a href="about.html">Read More</a>
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="service-one__item text-center" style="--accent-color: #44c895;">
                            <div class="service-one__item__icon">
                                <span class="icon-charity-three"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-one__item__title">Inspire Help</h3><!-- /.service-title -->
                            <p class="service-one__item__text">
                                With schools closed in NSW and Victoria, and childcare workers in places.
                            </p><!-- /.service-title -->
                            <div class="service-one__item__rm">
                                <a href="about.html">Read More</a>
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->

        <section class="donations-one">
            <div class="container">
                <div class="sec-title text-left">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Our Popular Causes</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">Help & Donate Now Find <br>The Popular Cause</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="donations-one__carousel careox-owl__carousel owl-carousel" data-owl-options='{
			"items": 1,
			"margin": 30,
			"loop": false,
			"smartSpeed": 700,
			"nav": true,
			"navText": ["<span class=\"icon-up-arrow-two\"></span>","<span class=\"icon-down-arrow-two\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"500": {
					"items": 2
				},
				"992": {
					"items": 3
				}
			}
			}'>
                    <div class="item">
                        <div class="donations-one__item" style="--accent-color: #ffa415;">
                            <div class="donations-one__item__image">
                                <img src="{{ asset('front_page/assets/images/donation/donation-1-1.jpg') }}" alt="Blood Donation Management System">
                                <a href="donation-details.html" class="donations-one__item__image__link"></a>
                                <div class="donations-one__item__category">Poor</div>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a href="donation-details.html">We Can Aenean Poor leo Nec This Rnare.</a></h3>
                                <p class="donations-one__item__text">We poor standard chunk ofI nibh velit auctor aliquet sollic tudin.</p>
                                <a class="donations-one__item__rm" href="donation-details.html"><i class="icon-right-arrow"></i></a>
                            </div>
                            <div class="donations-one__item__bottom">
                                <div class="donations-one__item__bottom__shape" style="background-image: url({{ asset('front_page/assets/images/shapes/d-shape-1.png') }});"></div>
                                <div class="donations-one__item__bottom__progress">
                                    <div class="donations-one__item__bottom__progress__inner count-bar" data-percent="85%">
                                        <div class="donations-one__item__bottom__progress__number count-text">85%</div>
                                    </div>
                                </div><!-- /.progress-box -->
                                <div class="donations-one__item__bottom__text">
                                    <span>$23,000 Goals</span>
                                    <span>$9,000 Donate</span>
                                </div>
                            </div><!-- /.donations-one__item__bottom -->
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="donations-one__item" style="--accent-color: #ff5528;">
                            <div class="donations-one__item__image">
                                <img src="{{ asset('front_page/assets/images/donation/donation-1-2.jpg') }}" alt="Blood Donation Management System">
                                <a href="donation-details.html" class="donations-one__item__image__link"></a>
                                <div class="donations-one__item__category">Raised</div>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a href="donation-details.html">Get Poor Money Strang People Acutor.</a></h3>
                                <p class="donations-one__item__text">We poor standard chunk ofI nibh velit auctor aliquet sollic tudin.</p>
                                <a class="donations-one__item__rm" href="donation-details.html"><i class="icon-right-arrow"></i></a>
                            </div>
                            <div class="donations-one__item__bottom">
                                <div class="donations-one__item__bottom__shape" style="background-image: url({{ asset('front_page/assets/images/shapes/d-shape-2.png') }});"></div>
                                <div class="donations-one__item__bottom__progress">
                                    <div class="donations-one__item__bottom__progress__inner count-bar" data-percent="80%">
                                        <div class="donations-one__item__bottom__progress__number count-text">80%</div>
                                    </div>
                                </div><!-- /.progress-box -->
                                <div class="donations-one__item__bottom__text">
                                    <span>$13,000 Goals</span>
                                    <span>$5,000 Donate</span>
                                </div>
                            </div><!-- /.donations-one__item__bottom -->
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="donations-one__item" style="--accent-color: #8742e8;">
                            <div class="donations-one__item__image">
                                <img src="{{ asset('front_page/assets/images/donation/donation-1-3.jpg') }}" alt="Blood Donation Management System">
                                <a href="donation-details.html" class="donations-one__item__image__link"></a>
                                <div class="donations-one__item__category">Medical</div>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a href="donation-details.html">Medical Health or People React Acutor.</a></h3>
                                <p class="donations-one__item__text">We poor standard chunk ofI nibh velit auctor aliquet sollic tudin.</p>
                                <a class="donations-one__item__rm" href="donation-details.html"><i class="icon-right-arrow"></i></a>
                            </div>
                            <div class="donations-one__item__bottom">
                                <div class="donations-one__item__bottom__shape" style="background-image: url({{ asset('front_page/assets/images/shapes/d-shape-3.png') }});"></div>
                                <div class="donations-one__item__bottom__progress">
                                    <div class="donations-one__item__bottom__progress__inner count-bar" data-percent="62%">
                                        <div class="donations-one__item__bottom__progress__number count-text">62%</div>
                                    </div>
                                </div><!-- /.progress-box -->
                                <div class="donations-one__item__bottom__text">
                                    <span>$89,000 Goals</span>
                                    <span>$6,000 Donate</span>
                                </div>
                            </div><!-- /.donations-one__item__bottom -->
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="donations-one__item" style="--accent-color: #44c895;">
                            <div class="donations-one__item__image">
                                <img src="{{ asset('front_page/assets/images/donation/donation-1-4.jpg') }}" alt="Blood Donation Management System">
                                <a href="donation-details.html" class="donations-one__item__image__link"></a>
                                <div class="donations-one__item__category">Education</div>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a href="donation-details.html">Let’s education for children good life.</a></h3>
                                <p class="donations-one__item__text">We poor standard chunk ofI nibh velit auctor aliquet sollic tudin.</p>
                                <a class="donations-one__item__rm" href="donation-details.html"><i class="icon-right-arrow"></i></a>
                            </div>
                            <div class="donations-one__item__bottom">
                                <div class="donations-one__item__bottom__shape" style="background-image: url({{ asset('front_page/assets/images/shapes/d-shape-4.png') }});"></div>
                                <div class="donations-one__item__bottom__progress">
                                    <div class="donations-one__item__bottom__progress__inner count-bar" data-percent="72%">
                                        <div class="donations-one__item__bottom__progress__number count-text">72%</div>
                                    </div>
                                </div><!-- /.progress-box -->
                                <div class="donations-one__item__bottom__text">
                                    <span>$29,000 Goals</span>
                                    <span>$7,000 Donate</span>
                                </div>
                            </div><!-- /.donations-one__item__bottom -->
                        </div>
                    </div><!-- /.item -->
                </div><!-- /.donations-one__slider -->
            </div>
        </section>

        <section class="video-one">
            <div class="video-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url({{ asset('front_page/assets/images/backgrounds/video-bg-1-1.jpg') }});"></div> <!-- /.video-one__bg -->
            <div class="video-one__shape-one" style="background-image: url({{ asset('front_page/assets/images/shapes/video-shape-1.png') }});"></div><!-- /.video-one__shape -->
            <div class="video-one__shape-two" style="background-image: url({{ asset('front_page/assets/images/shapes/video-shape-2.png') }});"></div><!-- /.video-one__shape -->
            <div class="container">
                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                    <i class="icon-play-button"></i>
                    <i class="ripple"></i>
                </a>
                <h5 class="video-one__sub-title">Video Here to Support</h5>
                <h2 class="video-one__title">We Help Poor This Lifes Service</h2><!-- /.video-one__title -->
                <p class="video-one__text">Lorem ipsum dolor sit amet, conse dtetur adipi sicing <br>elitare many variations.</p><!-- /.video-one__text -->
                <a href="about.html" class="btn"><span>Discover More</span></a>
            </div><!-- /.container -->
        </section><!-- /.video-one -->

        <!-- Feature Start -->
        <section class="feature-one">
            <div class="feature-one__bg" style="background-image: url({{ asset('front_page/assets/images/shapes/feature-bg-1.png') }});"></div>
            <div class="container">
                <div class="feature-one__shape" style="background-image: url({{ asset('front_page/assets/images/shapes/feature-1-shape-arrow.png') }});"></div>
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="feature-one__item" style="--accent-color: #ffa415;">
                            <div class="feature-one__item__inner">
                                <div class="feature-one__item__shape" style="background-image: url({{ asset('front_page/assets/images/shapes/feature-1-shape.png') }});"></div>
                                <div class="feature-one__item__icon"><span class="icon-zakat"></span></div>
                                <h3 class="feature-one__item__title">Treatment Help</h3>
                                <p class="feature-one__item__text">No matter what have.</p>
                                <div class="feature-one__item__number"></div>
                                <a href="about.html" class="feature-one__item__rm"><span class="icon-up-arrow-two"></span></a>
                            </div>
                        </div><!-- feature-item -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__item feature-one__item--reverse" style="--accent-color: #fc5528;">
                            <div class="feature-one__item__inner">
                                <div class="feature-one__item__shape" style="background-image: url({{ asset('front_page/assets/images/shapes/feature-1-shape.png') }});"></div>
                                <div class="feature-one__item__icon"><span class="icon-charity-two"></span></div>
                                <h3 class="feature-one__item__title">Charity Donate</h3>
                                <p class="feature-one__item__text">No matter what have.</p>
                                <div class="feature-one__item__number"></div>
                                <a href="about.html" class="feature-one__item__rm"><span class="icon-up-arrow-two"></span></a>
                            </div>
                        </div><!-- feature-item -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-one__item" style="--accent-color: #8139e7;">
                            <div class="feature-one__item__inner">
                                <div class="feature-one__item__shape" style="background-image: url({{ asset('front_page/assets/images/shapes/feature-1-shape.png') }});"></div>
                                <div class="feature-one__item__icon"><span class="icon-generous"></span></div>
                                <h3 class="feature-one__item__title">Money Raised</h3>
                                <p class="feature-one__item__text">No matter what have.</p>
                                <div class="feature-one__item__number"></div>
                                <a href="about.html" class="feature-one__item__rm"><span class="icon-up-arrow-two"></span></a>
                            </div>
                        </div><!-- feature-item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature End -->

        <section class="team-one">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Our Expert Team</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">Meet The Team Member</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="team-one__carousel careox-owl__carousel careox-owl__carousel--with-shadow careox-owl__carousel--basic-nav owl-carousel" data-owl-options='{
			"items": 1,
			"margin": 30,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"500": {
					"items": 2
				},
				"992": {
					"items": 3
				},
				"1200": {
					"items": 4
				}
			}
			}'>
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms' style='--accent-color: #ffa415;'>
                            <div class="team-card__image">
                                <img src="{{ asset('front_page/assets/images/team/team-1-1.jpg') }}" alt="Bern Dorey">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <h3 class="team-card__title">
                                    <a href="team-details.html">Bern Dorey</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                                <div class="team-card__hover">
                                    <span class="team-card__hover__btn"></span>
                                    <div class="team-card__hover__social">
                                        <a href="https://facebook.com/" style="--accent-color: #ffa415;">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://twitter.com/" style="--accent-color: #fc5528;">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://pinterest.com/" style="--accent-color: #8139e7;">
                                            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                            <span class="sr-only">Pinterest</span>
                                        </a>
                                        <a href="https://instagram.com/" style="--accent-color: #44c895;">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms' style='--accent-color: #fc5528;'>
                            <div class="team-card__image">
                                <img src="{{ asset('front_page/assets/images/team/team-1-2.jpg') }}" alt="John Hines">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <h3 class="team-card__title">
                                    <a href="team-details.html">John Hines</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Manager</p><!-- /.team-card__designation -->
                                <div class="team-card__hover">
                                    <span class="team-card__hover__btn"></span>
                                    <div class="team-card__hover__social">
                                        <a href="https://facebook.com/" style="--accent-color: #ffa415;">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://twitter.com/" style="--accent-color: #fc5528;">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://pinterest.com/" style="--accent-color: #8139e7;">
                                            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                            <span class="sr-only">Pinterest</span>
                                        </a>
                                        <a href="https://instagram.com/" style="--accent-color: #44c895;">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms' style='--accent-color: #8139e7;'>
                            <div class="team-card__image">
                                <img src="{{ asset('front_page/assets/images/team/team-1-3.jpg') }}" alt="Jason Bower">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <h3 class="team-card__title">
                                    <a href="team-details.html">Jason Bower</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Volunter</p><!-- /.team-card__designation -->
                                <div class="team-card__hover">
                                    <span class="team-card__hover__btn"></span>
                                    <div class="team-card__hover__social">
                                        <a href="https://facebook.com/" style="--accent-color: #ffa415;">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://twitter.com/" style="--accent-color: #fc5528;">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://pinterest.com/" style="--accent-color: #8139e7;">
                                            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                            <span class="sr-only">Pinterest</span>
                                        </a>
                                        <a href="https://instagram.com/" style="--accent-color: #44c895;">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms' style='--accent-color: #44c895;'>
                            <div class="team-card__image">
                                <img src="{{ asset('front_page/assets/images/team/team-1-4.jpg') }}" alt="Phillip Haris">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <h3 class="team-card__title">
                                    <a href="team-details.html">Phillip Haris</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Volunter</p><!-- /.team-card__designation -->
                                <div class="team-card__hover">
                                    <span class="team-card__hover__btn"></span>
                                    <div class="team-card__hover__social">
                                        <a href="https://facebook.com/" style="--accent-color: #ffa415;">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://twitter.com/" style="--accent-color: #fc5528;">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://pinterest.com/" style="--accent-color: #8139e7;">
                                            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                            <span class="sr-only">Pinterest</span>
                                        </a>
                                        <a href="https://instagram.com/" style="--accent-color: #44c895;">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one -->

        <div class="client-carousel ">
            <div class="container">
                <div class="client-carousel__one careox-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1
                },
                "360":{
                    "items":2
                },
                "575":{
                    "items":3
                },
                "768":{
                    "items":3
                },
                "992":{
                    "items": 4
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('front_page/assets/images/resources/brand-1-1.png') }}" alt="Blood Donation Management System">
                        <img class="client-carousel__one__item__hover" src="{{ asset('front_page/assets/images/resources/brand-1-1-hover.png') }}" alt="Blood Donation Management System">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('front_page/assets/images/resources/brand-1-1.png') }}" alt="Blood Donation Management System">
                        <img class="client-carousel__one__item__hover" src="{{ asset('front_page/assets/images/resources/brand-1-1-hover.png') }}" alt="Blood Donation Management System">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('front_page/assets/images/resources/brand-1-1.png') }}" alt="Blood Donation Management System">
                        <img class="client-carousel__one__item__hover" src="{{ asset('front_page/assets/images/resources/brand-1-1-hover.png') }}" alt="Blood Donation Management System">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('front_page/assets/images/resources/brand-1-1.png') }}" alt="Blood Donation Management System">
                        <img class="client-carousel__one__item__hover" src="{{ asset('front_page/assets/images/resources/brand-1-1-hover.png') }}" alt="Blood Donation Management System">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('front_page/assets/images/resources/brand-1-1.png') }}" alt="Blood Donation Management System">
                        <img class="client-carousel__one__item__hover" src="{{ asset('front_page/assets/images/resources/brand-1-1-hover.png') }}" alt="Blood Donation Management System">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('front_page/assets/images/resources/brand-1-1.png') }}" alt="Blood Donation Management System">
                        <img class="client-carousel__one__item__hover" src="{{ asset('front_page/assets/images/resources/brand-1-1-hover.png') }}" alt="Blood Donation Management System">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('front_page/assets/images/resources/brand-1-1.png') }}" alt="Blood Donation Management System">
                        <img class="client-carousel__one__item__hover" src="{{ asset('front_page/assets/images/resources/brand-1-1-hover.png') }}" alt="Blood Donation Management System">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('front_page/assets/images/resources/brand-1-1.png') }}" alt="Blood Donation Management System">
                        <img class="client-carousel__one__item__hover" src="{{ asset('front_page/assets/images/resources/brand-1-1-hover.png') }}" alt="Blood Donation Management System">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('front_page/assets/images/resources/brand-1-1.png') }}" alt="Blood Donation Management System">
                        <img class="client-carousel__one__item__hover" src="{{ asset('front_page/assets/images/resources/brand-1-1-hover.png') }}" alt="Blood Donation Management System">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset('front_page/assets/images/resources/brand-1-1.png') }}" alt="Blood Donation Management System">
                        <img class="client-carousel__one__item__hover" src="{{ asset('front_page/assets/images/resources/brand-1-1-hover.png') }}" alt="Blood Donation Management System">
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <section class="testimonials-one">
            <div class="testimonials-one__bg" style="background-image: url({{ asset('front_page/assets/images/shapes/testimonial-bg-1.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Our testimonials</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">What They’re Talking <br>About Company?</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="testimonials-one__text">
                            Poor address a range of simply application and infrastructure this<br> of passages of available,
                            but the majority have suffered poor<br> alteration in some form.
                        </p>
                        <ul class="testimonials-one__image careox-slick__carousel" data-slick-options='{
					"slidesToShow": 3,
					"slidesToScroll": 1,
					"autoplay": true,
					"centerMode": true,
					"asNavFor": ".testimonials-one__carousel",
					"focusOnSelect": true,
					"dots": false,
					"centerPadding": 0,
					"arrows": true,
					"nextArrow": "<button class=\"next\"><i class=\"icon-right-arrow-two1\"></i></button>",
            		"prevArrow": "<button class=\"prev\"><i class=\"icon-right-arrow-two\"></i></button>"
					}'>
                            <!-- Testimonial Item -->
                            <li role="presentation">
                                <div class="testimonials-one__image__item" style="--accent-color: #ffa415;"><img src='{{ asset('front_page/assets/images/resources/testi-1-1.jpg') }}' alt='Blood Donation Management System'></div>
                            </li>
                            <!-- Testimonial Item -->
                            <!-- Testimonial Item -->
                            <li role="presentation">
                                <div class="testimonials-one__image__item" style="--accent-color: #fc5528;"><img src='{{ asset('front_page/assets/images/resources/testi-1-2.jpg') }}' alt='Blood Donation Management System'></div>
                            </li>
                            <!-- Testimonial Item -->
                            <!-- Testimonial Item -->
                            <li role="presentation">
                                <div class="testimonials-one__image__item" style="--accent-color: #8139e7;"><img src='{{ asset('front_page/assets/images/resources/testi-1-3.jpg') }}' alt='Blood Donation Management System'></div>
                            </li>
                            <!-- Testimonial Item -->
                            <!-- Testimonial Item -->
                            <li role="presentation">
                                <div class="testimonials-one__image__item" style="--accent-color: #44c895;"><img src='{{ asset('front_page/assets/images/resources/testi-1-4.jpg') }}' alt='Blood Donation Management System'></div>
                            </li>
                            <!-- Testimonial Item -->
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonials-one__wrapper" style="background-image: url({{ asset('front_page/assets/images/resources/testimonail-1-bg.jpg') }});">
                            <div class="testimonials-one__carousel careox-slick__carousel" data-slick-options='{
						"slidesToShow": 2,
						"slidesToScroll": 1,
						"vertical": true,
						"asNavFor": ".testimonials-one__image",
						"autoplay": true,
						"dots": false,
						"centerPadding": 0,
						"arrows": false,
						"responsive": [
							{
								"breakpoint": 992,
								"settings": {
									"slidesToShow": 1,
									"vertical": false,
									"slidesToScroll": 1
								}
							}
						]
						}'>
                                <div class="item">
                                    <div class="testimonials-card @@extraClassName" style='--accent-color: #ffa415;'>
                                        <div class="testimonials-card__image">
                                            <img src="{{ asset('front_page/assets/images/resources/testi-1-1.jpg') }}" alt="Jack Turpin">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div><!-- /.testimonials-card__rating -->
                                        <div class="testimonials-card__content">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or
                                        </div><!-- /.testimonials-card__content -->
                                        <h3 class="testimonials-card__name">
                                            Jack Turpin
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Founder</p><!-- /.testimonials-card__designation -->
                                        <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                                    </div><!-- /.testimonials-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-card @@extraClassName" style='--accent-color: #fc5528;'>
                                        <div class="testimonials-card__image">
                                            <img src="{{ asset('front_page/assets/images/resources/testi-1-2.jpg') }}" alt="Jasmin Weiss">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div><!-- /.testimonials-card__rating -->
                                        <div class="testimonials-card__content">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or
                                        </div><!-- /.testimonials-card__content -->
                                        <h3 class="testimonials-card__name">
                                            Jasmin Weiss
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Co Founder</p><!-- /.testimonials-card__designation -->
                                        <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                                    </div><!-- /.testimonials-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-card @@extraClassName" style='--accent-color: #8139e7;'>
                                        <div class="testimonials-card__image">
                                            <img src="{{ asset('front_page/assets/images/resources/testi-1-3.jpg') }}" alt="David Cooper">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div><!-- /.testimonials-card__rating -->
                                        <div class="testimonials-card__content">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or
                                        </div><!-- /.testimonials-card__content -->
                                        <h3 class="testimonials-card__name">
                                            David Cooper
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Reviwer</p><!-- /.testimonials-card__designation -->
                                        <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                                    </div><!-- /.testimonials-card -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-card @@extraClassName" style='--accent-color: #44c895;'>
                                        <div class="testimonials-card__image">
                                            <img src="{{ asset('front_page/assets/images/resources/testi-1-4.jpg') }}" alt="Mark Smith">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div><!-- /.testimonials-card__rating -->
                                        <div class="testimonials-card__content">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or
                                        </div><!-- /.testimonials-card__content -->
                                        <h3 class="testimonials-card__name">
                                            Mark Smith
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Reviwer</p><!-- /.testimonials-card__designation -->
                                        <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                                    </div><!-- /.testimonials-card -->
                                </div><!-- /.item -->
                            </div><!-- /.testimonials-one__carousel -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->

        <section class="donate-one">
            <div class="donate-one__bg" style="background-image: url({{ asset('front_page/assets/images/backgrounds/donate-bg-1.jpg') }});"></div>
            <div class="donate-one__image wow fadeInLeft">
                <img src="{{ asset('front_page/assets/images/resources/donate-1-1.png') }}" alt="Blood Donation Management System">
            </div>
        </section>
        <section class="donate-info">
            <div class="donate-info__shape" style="background-image: url({{ asset('front_page/assets/images/resources/donate-info-shape.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="donate-info__left" style="background-image: url({{ asset('front_page/assets/images/backgrounds/donate-info-bg.jpg') }});">
                            <div class="donate-info__left__icon"><span class="icon-charity-two"></span></div>
                            <h5 class="donate-info__left__title">Donate Now</h5>
                            <p class="donate-info__left__text">24/7 Support</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="donate-info__area" style="background-image: url({{ asset('front_page/assets/images/shapes/donate-area-bg.jpg') }});">
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>OUR Donate Now</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">Get Inspire Donate Help <br>Change a life.</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <div class="donate-info__area__date"><i class="icofont-ui-calendar"></i>02 Sep 2024</div>
                            <div class="donate-info__area__progress">
                                <div class="donate-info__area__progress__bar">
                                    <div class="donate-info__area__progress__inner count-bar" data-percent="85%">
                                        <div class="donate-info__area__progress__number count-text">85%</div>
                                    </div>
                                </div><!-- /.progress-box -->
                                <div class="donate-info__area__progress__text">
                                    <span>$23,000 Goals</span>
                                    <span>$9,000 Donate</span>
                                </div>
                            </div><!-- /.donations-one__item__bottom -->
                            <form action="#" class="donate-info__form">
                                <div class="donate-info__form__top">
                                    <div class="donate-info__form__amount">
                                        <span class="donate-info__form__amount__sign">$</span>
                                        <input type="text" value="200" name="donate_amount" id="donate_amount" placeholder="Amount" class="donate-info__form__amount__input">
                                    </div><!-- /.donate-info__form__amount__box -->
                                    <div class="donate-info__form__buttons">
                                        <button type="button" class="donate-info__form__buttons__item">$<span class="donate-info__form__buttons__amount">100</span></button>
                                        <button type="button" class="donate-info__form__buttons__item active">$<span class="donate-info__form__buttons__amount">200</span></button>
                                        <button type="button" class="donate-info__form__buttons__item">$<span class="donate-info__form__buttons__amount">300</span></button>
                                        <button type="button" class="donate-info__form__buttons__item">Custom</button>
                                    </div><!-- /.donate-info__form__amount__buttons -->
                                </div>
                                <div class="donate-info__form__submit">
                                    <button type="submit" class="btn"><span>Donate Now</span></button>
                                    <img src="{{ asset('front_page/assets/images/shapes/donate-arrow.png') }}" alt="Blood Donation Management System">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-one">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>News & articles</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">We Articles From Blog <br>News and Story</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-lg-5">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms' style='--accent-color: #ffa415;'>
                            <div class="blog-card__image">
                                <img src="{{ asset('front_page/assets/images/blog/blog-1-1.jpg') }}" alt="We Can Aenean Poor to Help This People in Needleo Blog.">
                                <img src="{{ asset('front_page/assets/images/blog/blog-1-1.jpg') }}" alt="We Can Aenean Poor to Help This People in Needleo Blog.">
                                <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">We Can Aenean Poor to Help This People in Needleo Blog.</span>
                                    <!-- /.sr-only --></a>
                                <div class="blog-card__date"><i class="icofont-ui-calendar"></i>02 Sep 2024</div><!-- /.blog-card__date -->
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="blog-list-right.html"><img src="{{ asset('front_page/assets/images/blog/blog-author-1-1.jpg') }}" alt="Blood Donation Management System">Admin: Lorat</a></li>
                                    <li><a href="blog-details-right.html"><i class="icofont-comment"></i>Comment (5)</a></li>
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title"><a href="blog-details-right.html">We Can Aenean Poor to Help This People in Needleo Blog.</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">
                                    We poor standard chunk nibh velit majority suffered alteration in some form aliquet sollic tudin.
                                </p><!-- /.blog-card__text -->
                                <a href="blog-details-right.html" class="blog-card__link">
                                    <span class="blog-card__link__front"><span class="icofont-double-right"></span></span>
                                    <span class="blog-card__link__back"><span class="icofont-double-right"></span>Read More</span>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="col-lg-7">
                        <div class="blog-card blog-card--reverse wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms' style='--accent-color: #ff5528;'>
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="blog-list-right.html"><img src="{{ asset('front_page/assets/images/blog/blog-author-1-1.jpg') }}" alt="Blood Donation Management System">Admin: Lorat</a></li>
                                    <li><a href="blog-details-right.html"><i class="icofont-comment"></i>Comment (5)</a></li>
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title"><a href="blog-details-right.html">Our Donation is Hope for Poor Childrens.</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">
                                    We poor standard chunk ofI nibh velit auctor aliquet sollic tudin.
                                </p><!-- /.blog-card__text -->
                                <a href="blog-details-right.html" class="blog-card__link">
                                    <span class="blog-card__link__front"><span class="icofont-double-right"></span></span>
                                    <span class="blog-card__link__back"><span class="icofont-double-right"></span>Read More</span>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__image">
                                <img src="{{ asset('front_page/assets/images/blog/blog-1-2.jpg') }}" alt="Our Donation is Hope for Poor Childrens.">
                                <img src="{{ asset('front_page/assets/images/blog/blog-1-2.jpg') }}" alt="Our Donation is Hope for Poor Childrens.">
                                <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Our Donation is Hope for Poor Childrens.</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                        </div><!-- /.blog-card -->
                        <div class="blog-card blog-card--reverse wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='150ms' style='--accent-color: #8139e7;'>
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="blog-list-right.html"><img src="{{ asset('front_page/assets/images/blog/blog-author-1-1.jpg') }}" alt="Blood Donation Management System">Admin: Lorat</a></li>
                                    <li><a href="blog-details-right.html"><i class="icofont-comment"></i>Comment (5)</a></li>
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title"><a href="blog-details-right.html">Help This People in Needleo Blog.</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">
                                    We poor standard chunk ofI nibh velit auctor aliquet sollic tudin.
                                </p><!-- /.blog-card__text -->
                                <a href="blog-details-right.html" class="blog-card__link">
                                    <span class="blog-card__link__front"><span class="icofont-double-right"></span></span>
                                    <span class="blog-card__link__back"><span class="icofont-double-right"></span>Read More</span>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__image">
                                <img src="{{ asset('front_page/assets/images/blog/blog-1-3.jpg') }}" alt="Help This People in Needleo Blog.">
                                <img src="{{ asset('front_page/assets/images/blog/blog-1-3.jpg') }}" alt="Help This People in Needleo Blog.">
                                <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Help This People in Needleo Blog.</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-one--page -->

        <section class="info">
            <div class="container">
                <ul class="info__wrapper">
                    <li style="--accent-color: #ffa415;">
                        <div class="info__icon"><span class="icofont-phone"></span></div>
                        <div class="info__content">
                            <h5 class="info__title">Call Me</h5>
                            <p class="info__text"><a href="tel:+0449123452">+0(449) 123 452</a></p>
                        </div>
                    </li>
                    <li style="--accent-color: #ff5528;">
                        <div class="info__icon"><span class="icofont-envelope"></span></div>
                        <div class="info__content">
                            <h5 class="info__title">Email</h5>
                            <p class="info__text"><a href="mailto:help@company.com">help@company.com</a></p>
                        </div>
                    </li>
                    <li style="--accent-color: #8139e7;">
                        <div class="info__icon"><span class="icofont-location-pin"></span></div>
                        <div class="info__content">
                            <h5 class="info__title">Address</h5>
                            <p class="info__text"><a href="https://www.google.com/maps"> 2nd Street, Boston</a></p>
                        </div>
                    </li>
                </ul>
            </div><!-- /.container -->
        </section><!-- /.info -->
        <section class="contact-map">
            <div class="container-fluid">
                <div class="google-map google-map__contact">
                    <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__contact" allowfullscreen></iframe>
                </div>
                <!-- /.google-map -->
            </div><!-- /.container-fluid -->
        </section><!-- /.contact-map -->

        <footer class="main-footer background-black">
            <div class="main-footer__bg background-black" style="background-image: url({{ asset('front_page/assets/images/backgrounds/footer-bg-1-1.jpg') }});"></div>
            <!-- /.main-footer__bg -->
            <div class="container">
                <div class="main-footer__top">
                    <div class="row">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="main-footer__top__left">
                                <div class="main-footer__top__left__icon"><i class="icon-messages"></i></div>
                                <h5 class="main-footer__top__left__title">Our Newslatter</h5>
                                <p class="main-footer__top__left__text">We are dolor sit amet csectetur</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <form action="#" data-url="MAILCHIMP_FORM_URL" class="main-footer__newsletter mc-form">
                                <input type="text" name="EMAIL" placeholder="Enter email address">
                                <button type="submit" class="fas fa-paper-plane">
                                    <span class="sr-only">submit</span><!-- /.sr-only -->
                                </button>
                            </form><!-- /.footer-widget__newsletter mc-form -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        </div>
                    </div>
                </div>
            </div><!-- /.main-footer__top -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget footer-widget--about">
                            <a href="index.html" class="footer-widget__logo">
                                <img src="{{ asset('front_page/assets/images/logo-light.png') }}" width="223" alt="Blood Donation Management System">
                            </a>
                            <p class="footer-widget__text">
                                We help businesses maximize their online presence with a personalized approach to digital marketing.
                            </p>
                            <div class="footer-widget__box">
                                <div class="footer-widget__box__icon"><i class="icon-phone-call"></i></div>
                                <p class="footer-widget__box__text">Hotline 24/7 <a href="tel:+99954642569">(+99) 95464 2569</a></p>
                            </div>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-2 wow fadeInUp" data-wow-delay="150ms">
                        <div class="footer-widget footer-widget--links">
                            <h2 class="footer-widget__title">Service</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="donate-right.html">Give Donation</a></li>
                                <li><a href="donate-right.html">Education Support</a></li>
                                <li><a href="events-list.html">Our Campaign</a></li>
                                <li><a href="events-list.html">Our Campaign</a></li>
                                <li><a href="events-list.html">Our Campaign</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget footer-widget--links-two">
                            <h2 class="footer-widget__title">Quick Link</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="blog-list.html">Our News</a></li>
                                <li><a href="events-list.html">Our Campaign</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="250ms">
                        <div class="footer-widget footer-widget--contact">
                            <h2 class="footer-widget__title">Contact Info</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__info">
                                <li style="--accent-color: #ffa415;">
                                    <span class="footer-widget__info__icon"><i class="icofont-clock-time"></i></span>
                                    Open Hours of Government: Mon - Fri: 8.00 am. - 6.00 pm.
                                </li>
                                <li style="--accent-color: #ff5528;">
                                    <span class="footer-widget__info__icon"><i class="icofont-location-pin"></i></span>
                                    13/A, Miranda Halim City .
                                </li>
                                <li style="--accent-color: #8139e7;">
                                    <span class="footer-widget__info__icon"><i class="icofont-email"></i></span>
                                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                </li>
                            </ul><!-- /.list-unstyled -->
                            <div class="footer-widget__social">
                                <a href="https://facebook.com/" style="--accent-color: #ffa415;">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://twitter.com/" style="--accent-color: #fc5528;">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="https://pinterest.com/" style="--accent-color: #8139e7;">
                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                    <span class="sr-only">Pinterest</span>
                                </a>
                                <a href="https://instagram.com/" style="--accent-color: #44c895;">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </div><!-- /.footer-widget__social -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="main-footer__bottom wow fadeInUp" data-wow-delay="300ms">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright">
                            &copy; Copyright <span class="dynamic-year"></span> by Blood Donation Management System.
                        </p>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('front_page/assets/images/logo-light.png') }}" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://facebook.com/" style="--accent-color: #ffa415;">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/" style="--accent-color: #fc5528;">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://pinterest.com/" style="--accent-color: #8139e7;">
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <span class="sr-only">Pinterest</span>
                </a>
                <a href="https://instagram.com/" style="--accent-color: #44c895;">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="btn">
                    <span><i class="icon-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    <!-- Sidebar One Start -->
    <aside class="sidebar-one">
        <div class="sidebar-one__overlay"></div><!-- /.siderbar-ovarlay -->
        <div class="sidebar-one__content">
            <div class="sidebar-one__close"><i class="icofont-close-line"></i></div><!-- /.siderbar-close -->
            <div class="sidebar-one__logo">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('front_page/assets/images/logo-light.png') }}" alt="Blood Donation Management System" width="223"></a>
            </div><!-- /.sidebar-one__logo-box -->
            <p class="sidebar-one__text">
                Mauris ut enim sit amet lacus ornare ullamcor. Praesent placerat nequ
                puru rhoncu tincidunt odio ultrices. Sed feugiat feugiat felis.
            </p>
            <h4 class="sidebar-one__title">Contact Info:</h4>
            <ul class="sidebar-one__info">
                <li>
                    <span class="fas fa-map-marker-alt"></span>
                    85 Ketch Harbour RoadBensalem, PA 19020
                </li>
                <li>
                    <span class="fas fa-envelope"></span>
                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                </li>
                <li>
                    <span class="fas fa-phone-alt"></span>
                    <a href="tel:09969569535">099 695 695 35</a>
                </li>
            </ul>
            <div class="sidebar-one__social">
                <a href="https://facebook.com/" style="--accent-color: #ffa415;">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/" style="--accent-color: #fc5528;">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://pinterest.com/" style="--accent-color: #8139e7;">
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <span class="sr-only">Pinterest</span>
                </a>
                <a href="https://instagram.com/" style="--accent-color: #44c895;">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /sidebar-one__socila -->
            <h4 class="sidebar-one__title">Newsletter:</h4>
            <form action="#" data-url="MAILCHIMP_FORM_URL" class="sidebar-one__newsletter mc-form">
                <input type="text" name="EMAIL" placeholder="Email address">
                <button type="submit" class="fas fa-paper-plane">
                    <span class="sr-only">submit</span><!-- /.sr-only -->
                </button>
            </form><!-- /.footer-widget__newsletter mc-form -->
        </div><!-- /.sidebar__content -->
    </aside>
    <!-- Sidebar One Start -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="{{ asset('front_page/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/slick/slick.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
    <!-- gsap js -->
    <script src="{{ asset('front_page/assets/vendors/gsap/gsap.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/gsap/scrolltrigger.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/gsap/splittext.min.js') }}"></script>
    <script src="{{ asset('front_page/assets/vendors/gsap/split.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('front_page/assets/js/script.js') }}"></script>
</body>
</html>
