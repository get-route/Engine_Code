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
                            <div class="col-lg-4 service-menu-item" id="flush-headingOne">
                                <button  type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                    <a href="#auto">   <img src="{{asset('frontend/img/service-icon-03.png')}}" alt="номер двигателя по автомобилю">
                                    <h3>По автомобилю</h3></a>
                                </button>
                            </div>
                            <div class="col-lg-4 service-menu-item" id="flush-headingTwo">
                                <button class="collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                    <a href="#model-engine">
                                    <img src="{{asset('frontend/img/service-icon-04.png')}}" alt="номер двигателя по модели силового агрегата">
                                    <h3>По марке</h3>
                                        </a>
                                </button>
                            </div>
                            <div class="col-lg-4 service-menu-item" id="flush-headingThree">
                                <button class=" collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                    <a href="#vin-code">
                                    <img src="{{asset('frontend/img/service-icon-01.png')}}" alt="найти номер двигателя по вин коду авто">
                                   <h3> По вин коду</h3>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">

                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">

                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                                <h4>Выберите модель своего авто</h4>
                                                <p>Выберите необходимую модель своего автомобиля и получите данные расположения номера двигателя. В описании к автомобилю можно будет увидеть дополнительную информацию.</p>
                                            <div class="ticks-list"><span><i class="fa fa-check"></i> Характеристики авто</span>
                                                <span><i class="fa fa-check"></i> Мощность и модель двигателя</span> <span><i
                                                        class="fa fa-check"></i> Расположение номера</span>
                                                    <span id="auto"><i class="fa fa-check"></i> Подробную характеристику автомобиля</span> </div>


                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="right-image">
                                                <img src="{{asset('frontend/img/services-image.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>

                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="accordion-body">

                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                            <h4>Задайте модель своего двигателя</h4>
                                            <p>Вы можете просто выбрать нужную модель Вашего двигателя и просмотреть интересующую информацию касательно характеристики и расположений необходимых идентификационных данных</p>
                                            <div class="ticks-list"><span><i class="fa fa-check"></i> Мощности силового агрегата</span>
                                                <span><i class="fa fa-check"></i> Допустимой нагрузки</span> <span><i
                                                        class="fa fa-check"></i> Параметров диагностики</span>
                                                <span id="model-engine"><i class="fa fa-check"></i> Отзывов автовладельцев</span> </div>


                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="right-image">
                                                <img src="{{asset('frontend/img/services-image-02.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="accordion-body">

                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                            <h4>Укажите ВинКод для проверки</h4>
                                            <p>Параметры автомобиля также можно узнать по винкоду. Для получения всей имеющейся информации Вам попросту необходимо будет его ввести в соответствующее поле. После распознования будет доступна общирная информация</p>
                                            <div class="ticks-list"><span><i class="fa fa-check"></i>Страна производства</span>
                                                <span><i class="fa fa-check"></i> Год выпуска</span> <span><i
                                                        class="fa fa-check"></i>Каталожная модель</span>
                                                <span id="vin-code"><i class="fa fa-check"></i>Характеристика автомобиля</span> </div>


                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="right-image">
                                                <img src="{{asset('frontend/img/services-image-03.jpg')}}" alt="">
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
                            <p>Наш портал нацелен собрать воедино всю имеющуюся информацию касательно расположения и характеристики конкретных двигателей для тех или иных автомобильных марок.</p>
                            <p>Мы постоянно дополняем наш каталог, а также стараемся вовремя отвечать на возникшие в процессе вопросы.</p>
                            <p>Надемся, что поможем Вам быстро и точно определить необходимые места, а также расшифровать полученные данные о автомобиле и его двигателе в частности.</p>
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
                    <h4>Последние модели <em>двигателей</em></h4>
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
                    <h4>Популярные <em>автомобили</em></h4>
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
