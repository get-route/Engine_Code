@section('title','Двигатель '.$engines_data->name.' - расположение номера, где смотреть, как выбит, каталожные данные')
@section('description','Характеристика каталожных данных мотора '.$engines_data->name.'. Где находится номер двигателя '.$engines_data->name.'. Как найти и проверить его онлайн.')
@section('block',$advert_engine[0]['block']['block4'])
@include('frontend.layout.menu')
@include('frontend.layout.footer')
@include('frontend.layout.head')
    <!DOCTYPE html>
<html lang="ru">

<head>
    @yield('head')
</head>

<body>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    @yield('menu')
</header>
<!-- ***** Header Area End ***** -->
<section class="header-content">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 text-center">
                <h1 class="text-center">Двигатель {{$engines_data->name}} - расположение номера и модель</h1>
                <div class="col-lg-12">
                    {!!($advert_engine[0]['block']['block1'])!!}
                </div>
                <hr class="hr-shadow">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Номер и характеристики двигателя {{$engines_data->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="params">
    <div class="container">
        <div class="row" id="params">
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="#params">Характеристики</a> </div>
                <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="#modeng">Популярные двигатели</a> </div>
                <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="#video">Видео</a> </div>
                <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="#comments">Отзывы</a> </div>
            </div>


            <div class="col-lg-12">
                <img src="{{asset('frontend/img/engine-default.jpg')}}" class="img_engine" alt="">
                <p class="text-right">Публикация от :  {{$engines_data->updated_at->format('d-m-Y')}}</p>
            </div>
        </div>
            <div class="col-lg-8">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Позиция в каталоге (#)</th>
                        <th scope="col">На каких моделях</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Где номер</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{$automobiles->models_id}}</th>
                        <td>{{$automobiles->name}}</td>
                        <td><img src="{{asset('frontend/img/brake.png')}}" alt="фото МОДЕЛЬ АВТО" class="img_char"></td>
                        <td><a href="{{route('index')}}/car/{{$automobiles->url}}" target="_blank">Найти</a></td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="characteristic">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center " >
                <div class="section-heading">
                    <h2 id="params">Параметры двигателя <em>{{$engines_data->name}}</em></h2>
                    <div class="col-lg-12">
                        {!!($advert_engine[0]['block']['block2'])!!}
                    </div>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>

        <div class="row">
            @if(is_object($engines_data->specs))
            @foreach($engines_data->specs as $key=>$value)
            <div class="col-lg-4 table-character">
                    <div class="col-lg-10">


                        {{$value}}

                        <hr class="hr-shadow">
                    </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
<section class="random_auto">
    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                    <div class="section-heading">
                        <h3 id="modeng">Популярные <em>двигатели</em></h3>
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
                    <h3>Популярные <em>автомобили</em></h3>
                    <div class="col-lg-12">
                        {!!($advert_engine[0]['block']['block3'])!!}
                    </div>
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
                        <h3 id="video">Видео по поиску номера двигателя {{$engines_data->name}}</h3
                        <p>Видеоинструкция по поиску и устранению возможных неисправностей при идентификации номера двигателя {{$engines_data->name}}</p>
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
    <section class="characteristic">
        <div class="container my-5 py-5 text-dark" id="app">
            <comments-engine :models="{{json_encode($engines_data->name)}}" :comments="{{json_encode($comments)}}" :comparent="{{json_encode($comments_parent)}}" :url="{{json_encode($engines_data->slug)}}" :idmodel="{{json_encode($engines_data->id)}}"></comments-engine>
        </div>
    </section>
<footer class="footer">
    @yield('footer')
</footer>
</body>
</html>
