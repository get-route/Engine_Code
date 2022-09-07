@include('frontend.layout.menu')
@include('frontend.layout.footer')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Сайт по поиску номеров двигателей">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{asset('frontend/img/favicon.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/frontend/css/bootstrap.min.css',
    'resources/frontend/css/fontawesome.css',
    'resources/frontend/css/templatemo-digimedia-v1.css',
    'resources/frontend/css/owl.css',
    ])
    <title>Где находится номер двигателя: поиск, расположение, посмотреть</title>

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky ">
@yield('menu')
</header>
<!-- ***** Header Area End ***** -->
<div class="main-banner fadeIn" id="top" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text " data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Найти номер своего двигателя онлайн</h2>
                                    <p>Наш сервис позволяет Вам определить необходимое расположение, модель и номер двигателя онлайн.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-first-button scroll-to-section">
                                        <a href="#contact">Найти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image " >
                            <img src="{{asset('frontend/img/slider-dec.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading " >
                    <h4>Найти номер <em>двигателя</em> онлайн</h4>
                    <p>Выберите критерии по которых хотели бы узнать номер своего двигателя</p>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu">
                                    <div>
                                        <div class="thumb active">
                                            <span class="icon"><img src="{{asset('frontend/img/service-icon-03.png')}}" alt=""></span>
                                            По автомобилю
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="{{asset('frontend/img/service-icon-04.png')}}" alt=""></span>
                                            По марке
                                        </div>
                                    </div>
                                    <div class="last-thumb">
                                        <div class="thumb">
                                            <span class="icon"><img src="{{asset('frontend/img/service-icon-01.png')}}" alt=""></span>
                                            По вин коду
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <ul class="nacc">
                                    <li class="active">
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="left-text">
                                                            <h4>SEO Analysis &amp; Daily Reports</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                dover lipsum lorem and the others.</p>
                                                            <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="right-image">
                                                            <img src="{{asset('frontend/img/services-image.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="left-text">
                                                            <h4>Healthy Food &amp; Life</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                dover lipsum lorem and the others.</p>
                                                            <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="right-image">
                                                            <img src="{{asset('frontend/img/services-image-02.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="left-text">
                                                            <h4>Car Re-search &amp; Transport</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                dover lipsum lorem and the others.</p>
                                                            <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="right-image">
                                                            <img src="{{asset('frontend/img/services-image-03.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="left-text">
                                                            <h4>Online Shopping &amp; Tracking ID</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                dover lipsum lorem and the others.</p>
                                                            <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="right-image">
                                                            <img src="{{asset('frontend/img/services-image-04.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="left-text">
                                                            <h4>Enjoy &amp; Travel</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                dover lipsum lorem and the others.</p>
                                                            <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 align-self-center">
                                                        <div class="right-image">
                                                            <img src="{{asset('frontend/img/services-image.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about" class="about section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-left-image  " >
                            <img src="{{asset('frontend/img/about-dec.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center  " >
                        <div class="about-right-content">
                            <div class="section-heading">
                                <h6>About Us</h6>
                                <h4>Who is DigiMedia <em>Agency</em></h4>
                                <div class="line-dec"></div>
                            </div>
                            <p>We hope this DigiMedia template is useful for your work. You can use this template for any purpose. You may <a rel="nofollow" href="http://paypal.me/templatemo" target="_blank">contribute a little amount</a> via PayPal to <a href="https://templatemo.com/contact" target="_blank">support TemplateMo</a> in creating new templates regularly.</p>
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="skill-item first-skill-item fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                        <div class="progress" data-percentage="90">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                                            <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                                            <div class="progress-value">
                                                <div>
                                                    90%<br>
                                                    <span>Coding</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="skill-item second-skill-item fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                        <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                                            <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                                            <div class="progress-value">
                                                <div>
                                                    80%<br>
                                                    <span>Photoshop</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="skill-item third-skill-item fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                        <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                                            <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                                            <div class="progress-value">
                                                <div>
                                                    80%<br>
                                                    <span>Animation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading ">
                    <h6>Our Portofolio</h6>
                    <h4>See Our Recent <em>Projects</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fadeIn" >
        <div class="row">
            <div class="col-lg-12">
                <div class="loop owl-carousel">
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/img/portfolio-01.jpg')}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Website Builder</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/img/portfolio-01.jpg')}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Website Builder</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/img/portfolio-02.jpg')}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Website Builder</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/img/portfolio-03.jpg')}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Website Builder</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/img/portfolio-04.jpg')}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Website Builder</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 " >
                <div class="section-heading">
                    <h6>Recent News</h6>
                    <h4>Check Our Blog <em>Posts</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-6 show-up fadeInUp" >
                <div class="blog-post">
                    <div class="thumb">
                        <a href="#"><img src="{{asset('frontend/img/blog-post-01.jpg')}}" alt=""></a>
                    </div>
                    <div class="down-content">
                        <span class="category">SEO Analysis</span>
                        <span class="date">03 August 2021</span>
                        <a href="#"><h4>Lorem Ipsum Dolor Sit Amet, Consectetur Adelore
                                Eiusmod Tempor Incididunt</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers itii eiumod deis tempor incididunt ut labore.</p>
                        <span class="author"><img src="{{asset('frontend/img/author-post.jpg')}}" alt="">By: Andrea Mentuzi</span>
                        <div class="border-first-button"><a href="#">Discover More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="post-item">
                                <div class="thumb">
                                    <a href="#"><img src="{{asset('frontend/img/blog-post-02.jpg')}}" alt=""></a>
                                </div>
                                <div class="right-content">
                                    <span class="category">SEO Analysis</span>
                                    <span class="date">24 September 2021</span>
                                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="post-item">
                                <div class="thumb">
                                    <a href="#"><img src="{{asset('frontend/img/blog-post-03.jpg')}}" alt=""></a>
                                </div>
                                <div class="right-content">
                                    <span class="category">SEO Analysis</span>
                                    <span class="date">24 September 2021</span>
                                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="post-item last-post-item">
                                <div class="thumb">
                                    <a href="#"><img src="{{asset('frontend/img/blog-post-04.jpg')}}" alt=""></a>
                                </div>
                                <div class="right-content">
                                    <span class="category">SEO Analysis</span>
                                    <span class="date">24 September 2021</span>
                                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
@yield('footer')
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/imagesloaded.js')}}"></script>

    @vite([
    'resources/frontend/js/bootstrap.bundle.min.js',
    'resources/frontend/js/owl-carousel.js',
    'resources/frontend/js/custom.js',
    ])
</footer>

</body>
</html>
