@section('title','Двигатель Nan - расположение номера, где смотреть, как выбит, каталожные данные')
@section('description','Характеристика каталожных данных мотора Nan. Где находится номер двигателя Nan. Как найти и проверить его онлайн.')
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
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item"><a href="#">Номер двигателя 753</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Опель Астра</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-12 text-center">
                <h1 class="text-center">Двигатель Nan - расположение номера и модель</h1>
                <p class="text-right">Публикация от :  20.12.2012</p>
            </div>


        </div>
    </div>
</section>
<section class="params">
    <div class="container">
        <div class="row" id="params">
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="./#params">Характеристики</a> </div>
                <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="./#modeng">Авто</a> </div>
                <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="./#video">Видео</a> </div>
                <div class="col-lg-12 mb-2"><a class="btn btn-secondary" href="./#comments">Комментарии</a> </div>
            </div>
            <div class="col-lg-12">
                <img src="{{asset('frontend/img/engine-default.jpg')}}" class="img_engine" alt="">
            </div>
        </div>
<div class="col-lg-8">dd</div>
        </div>
    </div>
</section>
<section class="characteristic">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 id="/modeng"> Параметры двигателя NAN</h2>
        </div>
        <div class="row">

            <div class="col-lg-8 table-character">
                <div class="row">
                    <div class="col-lg-2">
                        <img src="{{asset('frontend/img/email-icon.png')}}" class="img_char" alt="колич цилиндр NAN">
                    </div>
                    <div class="col-lg-10">
                        <p>Количество цилиндров в блоке : L4</p>
                    </div>
                    <div class="col-lg-2">
                        <img src="{{asset('frontend/img/email-icon.png')}}" class="img_char" alt="колич цилиндр NAN">
                    </div>
                    <div class="col-lg-10"><p>Количество цилиндров в блоке : L4</p>
                    </div>
                    <div class="col-lg-2">
                        <img src="{{asset('frontend/img/email-icon.png')}}" class="img_char" alt="колич цилиндр NAN">
                    </div>
                    <div class="col-lg-10">
                        <p>Объем мотора : 1997 Cm3 (кубов)</p>
                    </div>
                    <div class="col-lg-2">
                        <img src="{{asset('frontend/img/email-icon.png')}}" class="img_char" alt="колич цилиндр NAN">
                    </div>
                    <div class="col-lg-10">
                        <p>Серийная мощность : 66 Kw (Киловатт/час) @ 4000 (оборотов/мин)/90Л.С @ 4000 (оборотов/мин)/89
                            Л.С (без учета потерь) @ 4000 (об/мин)</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>
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
