@section('title','Расположение номера двигателя - где искать, как выглядит онлайн')
@section('description','Сервис поиска номера двигателя для конкретной марки мотора и модели автомобиля. Расшифровка данных по Винкоду и список возможных вариантов нахождения номера для Вашего автомобиля онлайн.')
@section('block',$advert[0]['block']['block4'])
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
<div id="services" class="services section" >
    <div id="app">
        <searcher></searcher>
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

