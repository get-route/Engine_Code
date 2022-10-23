@section('title','Расположение номера двигателя - где искать, как выглядит онлайн')
@section('description','Сервис поиска номера двигателя для конкретной марки мотора и модели автомобиля. Расшифровка данных по Винкоду и список возможных вариантов нахождения номера для Вашего автомобиля онлайн.')
@include('frontend.layout.menu')
@include('frontend.layout.footer')
@include('frontend.layout.head')
    <!DOCTYPE html>
<html lang="ru">

<head>
    @yield('head')
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
                    <h1>Найти где номер <em>двигателя</em> онлайн</h1>
                    <p>Выберите критерии поиска по по которых хотели бы узнать расположение идентификационных данных</p>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">
<div id="app">

</div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="container">

                        <div class="row service-menu text-center">
                            <div class="col-lg-4 service-menu-item" id="flush-headingOne">
                                <button type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne" >
                                    <a href="#auto"> <img src="{{asset('frontend/img/service-icon-03.png')}}" alt="номер двигателя по автомобилю">
                                    <h2>По автомобилю</h2></a>
                                </button>
                            </div>
                            <div class="col-lg-4 service-menu-item" id="flush-headingTwo">
                                <button class="collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                    <a href="#model-engine">
                                    <img src="{{asset('frontend/img/service-icon-04.png')}}" alt="номер двигателя по модели силового агрегата">
                                    <h2>По марке</h2>
                                        </a>
                                </button>
                            </div>
                            <div class="col-lg-4 service-menu-item" id="flush-headingThree">
                                <button class=" collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                    <a href="#vin-code">
                                    <img src="{{asset('frontend/img/service-icon-01.png')}}" alt="найти номер двигателя по вин коду авто">
                                   <h2> По вин коду</h2>
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
                                                <h3>Выберите модель своего авто</h3>
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
                                            <h3>Задайте модель своего двигателя</h3>
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
                                            <h3>Укажите ВинКод для проверки</h3>
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
                                <h2 id="about">Почему именно AiRall?</h2>
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
<section class="random_auto">
    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                    <div class="section-heading">
                        <h3 id="engines">Популярные <em>двигатели</em></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid fadeIn" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        @foreach( $random_engine as $rand_engines)
                            <div class="item">
                                <a href="{{route('index')}}/{{$rand_engines->slug}}">
                                    <div class="portfolio-item">
                                        <div class="thumb">
                                            <img src="{{asset('frontend/img/random_engine.jpg')}}" alt="Популярные модели двигателей {{$rand_engines->name}}">
                                        </div>
                                        <div class="down-content">
                                            <h4>{{$rand_engines->name}}</h4>
                                            <span>{{$rand_engines->updated_at->format('d-m-Y')}}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-shadow">
</section>
<section id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" >
                <div class="section-heading">
                    <h3 id="automobile">Популярные <em>автомобили</em></h3>
                </div>
            </div>
            <div class="col-lg-6 " >
                <div class="blog-post">
                    <div class="thumb">
                        <iframe
                            class="video"
                            width="100%"
                            height=350px
                            src="//www.youtube.com/embed/GI1Ym3RS2TY"
                            srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=//www.youtube.com/embed/GI1Ym3RS2TY?autoplay=1><img src=//img.youtube.com/vi/GI1Ym3RS2TY/hqdefault.jpg alt='характеристики и номера расположения двигателей' class='video img-fluid'><span>▶</span></a>"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            title="Видео-отзыв"
                        ></iframe>
                    </div>
                    <div class="down-content">
                        <span class="category">Видео</span>
                        <h3 id="video">Видео по поиску номера двигателя </h3
                        <p>Видеоинструкция по поиску и устранению возможных неисправностей при идентификации номера двигателя </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="blog-posts">
                    <div class="row">
                        @foreach($random_model as $rand_models)
                            <div class="col-lg-12">
                                <div class="post-item">

                                    <div class="right-content">
                                        <span class="category">{{$rand_models->updated_at->format('d-m-Y')}}</span>
                                        <a href="{{route('index')}}/car/{{$rand_models->url}}"><h4>{{$rand_models->name}}</h4></a>
                                        <p>Характеристика, номер мотора и дополнительные сведения для {{$rand_models->name}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
@yield('footer')
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/imagesloaded.js')}}"></script>
</footer>

</body>
</html>
