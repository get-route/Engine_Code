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

        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
@yield('menu')
</header>
<!-- ***** Header Area End ***** -->
<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading ">
                    <h4>Найти где номер <em>двигателя</em> онлайн</h4>
                    <p>Выберите критерии поиска по по которых хотели бы узнать расположение идентификационных данных</p>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="container">

                        <div class="row service-menu text-center">
                            <h3 class="col-lg-4 service-menu-item" id="flush-headingOne">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                    <img src="{{asset('frontend/img/service-icon-03.png')}}" alt="номер двигателя по автомобилю">
                                    <p>По автомобилю</p>
                                </button>
                            </h3>
                            <h3 class="col-lg-4 service-menu-item" id="flush-headingTwo">
                                <button class="collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                    <img src="{{asset('frontend/img/service-icon-04.png')}}" alt="номер двигателя по модели силового агрегата">
                                    <p>По марке</p>
                                </button>
                            </h3>
                            <h3 class="col-lg-4 service-menu-item" id="flush-headingThree">
                                <button class=" collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                    <img src="{{asset('frontend/img/service-icon-01.png')}}" alt="найти номер двигателя по вин коду авто">
                                   <p> По вин коду</p>
                                </button>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                1
                            </div>
                        </div>

                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                2
                            </div>
                        </div>

                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                3
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
                            <div class="section-heading ">
                                <h6>Почему именно AiRall?</h6>
                                <h4>Кому поможет наш <em>сервис</em></h4>
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

<hr class="hr-shadow">
<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading ">
                    <h4>Модели <em>двигателей</em></h4>
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
<hr class="hr-shadow">
<div id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 " >
                <div class="section-heading">
                    <h4>Модели <em>автомобилей</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-6 " >
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="hr-shadow">
<footer class="footer">
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
