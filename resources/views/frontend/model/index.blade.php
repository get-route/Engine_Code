@section('title',"$models_data->name - где находится номер двигателя, проверка мотора")
@section('description','Где расположен номер двигателя на '. $models_data->name.'. Как и где найти его на дизеле и бензине. Параметры мотора '. $models_data->name.'. Проверка при постановке на учет по каталожному номеру.')
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
                <h1 class="text-center">Где найти номер двигателя на {{$models_data->name}}</h1>
                <hr class="hr-shadow">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Варианты расположения номера
                            мотора {{$models_data->name}}</li>
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
                    <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="#params">Про двигатель</a></div>
                    <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="#nomer">Где номер</a></div>
                    <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="#video">Видео</a></div>
                    <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="#comments">Отзывы владельцев</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Модификации</th>
                        <th scope="col"></th>
                        <th scope="col">Характеристика</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($engines_model as $engine_auto)
                        <tr>
                            <th scope="row">{{$engine_auto->id}}</th>
                            <td>{{$engine_auto->name}}</td>
                            <td><img src="{{asset('frontend/img/brake.png')}}"
                                     alt="параметры двигателя {{$engine_auto->id}} и номер" class="img_char"></td>
                            <td><a href="{{route('index')}}/{{$engine_auto->slug}}" target="_blank">Посмотреть</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="photos">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{asset("frontend/img/models/$img_model_arr[0]")}}" class="img_engine"
                     alt="Фото модели {{$models_data->name}} и расположение номера двигателя онлайн">
                <p class="text-right">Публикация от : 20.12.2012</p>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    @foreach($img_model_arr as $images)
                        <div class="col-lg-3">
                            <img src="{{asset("frontend/img/models/$images")}}" class="img_engine_thumbnail"
                                 alt="Внешний вид и поиск номера модели {{$models_data->name}}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="characteristic">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <div class="section-heading">
                    <h2>Где следует искать номер двигателя <em>{{$models_data->name}} в первую очередь</em></h2>
                    <div id="params" class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">
                {!!$models_data->press_release!!}
            </div>
        </div>

    </div>
</section>
<section class="random_auto">
    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h3>Популярные <em>модели</em> авто</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid fadeIn">
            <div class="row">

                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        @foreach($random_model as $models)
                            <div class="item">
                                <a href="{{route('index')}}/car/{{$models->url}}">
                                    <div class="portfolio-item">
                                        <div class="thumb">
                                            <img
                                                src="{{asset("frontend/img/models/default.jpg")}}"
                                                alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4>{{$models->name}}</h4>
                                            <span>{{$models->updated_at->format('d-m-Y')}}</span>
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
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h3>Модификации <em>моторов</em></h3>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="blog-post">
                    <div class="thumb">
                        <iframe
                            class="video"
                            width="100%"
                            height=350px
                            src="//www.youtube.com/embed/F38XGcervic"
                            srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=//www.youtube.com/embed/F38XGcervic?autoplay=1><img src=//img.youtube.com/vi/F38XGcervic/hqdefault.jpg alt='найти номер двигателя' class='video img-fluid'><span>▶</span></a>"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            title="Видео-отзыв"
                        ></iframe>
                    </div>
                    <div class="down-content">
                        <span class="category">Видео</span>
                        <h3 id="video">Видео по поиску номера двигателя {{$engine_auto->name}}</h3>
                        <p>Подробная инструкция по поиску и тому как находить номер для
                            двигателей {{$engine_auto->name}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="blog-posts">
                    <div class="row">
                        @foreach($random_engine as $engines)
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="right-content">
                                        <span class="category">{{$engines->updated_at->format('d-m-Y')}}</span>
                                        <a href="{{route('index')}}/{{$engines->slug}}"><h4>{{$engines->name}}</h4></a>
                                        <p>Характеристики и основные модели автомобилей для
                                            двигателя {{$engines->name}}</p>
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
<section class="nomer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2 id="nomer">Где расположен <em>номер</em> на двигателе {{$models_data->name}}</h2>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                {!!$models_data->description!!}
            </div>
        </div>
    </div>
</section>
<section class="characteristic" id="app">
    <div class="container my-5 py-5 text-dark">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8 ">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h4 id="comments">Отзывы владельцев <em>{{$models_data->name}}</em></h4>
                    </div>
                </div>
                @foreach($comments as $comment)
                    <div class="card mb-3 col-lg-12">
                        <div class="card-body">
                            <div class="col-lg-12 text-center">
                                <img class="img_char " src="{{asset('frontend/img/comments.png')}}"/>
                            </div>
                            <div class="d-flex flex-start">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="text-primary fw-bold mb-0">
                                            {{$comment->name}}
                                            <span class="text-dark ms-2"> {{$comment->comment}}</span>
                                        </h5>
                                        <p class="mb-0">{{$comment->updated_at->format('d-m-Y')}}</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="small mb-0" style="color: #aaa;">
                                            <a href="#form"  class="link-grey">Ответить</a> •
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($comments_parent as $comments_reply)
                        @if($comments_reply->parent_id == $comment->id)
                            <div class="card mb-3 col-lg-8 ">
                                <div class="card-body">
                                    <div class="col-lg-12 text-center">
                                        <img class="img_char " src="{{asset('frontend/img/comments.png')}}"/>
                                    </div>
                                    <div class="d-flex flex-start">
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h5 class="text-primary fw-bold mb-0">
                                                    {{$comments_reply->name}}
                                                    <span class="text-dark ms-2"> {{$comments_reply->comment}}</span>
                                                </h5>
                                                <p class="mb-0">{{$comments_reply->updated_at->format('d-m-Y')}}</p>
                                            </div>
                                            <div id="app">
                                                <reply-button :url_model="{{$comments_reply->url_model}}" :parent_id="{{$comments_reply->parent_id}}"></reply-button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>


        </div>

    </div>
</section>
<footer class="footer">
    @yield('footer')
</footer>
</body>
</html>


