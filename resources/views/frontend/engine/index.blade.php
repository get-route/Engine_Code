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
                <p class="text-right">Публикация от: 20.12.2012</p>
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
        </div>
        <div class="col-lg-8">
            <p>Количество цилиндров в блоке:L4</p>
            <p>Объем мотора: 1997 Cm3 (кубов)</p>
            <p>Серийная мощность:66 Kw (Киловатт/час) @ 4000 (оборотов/мин)/90Л.С @ 4000 (оборотов/мин)/89 Л.С (без учета потерь) @ 4000 (об/мин)</p>
            <p>крут/моменту:152 Lb-Футов (ед силы фут/фунт) @ 1900 (оборотов/мин)/206 Nm (Ньютон/метр) @ 1900 (об/мин)</p>
            <p>Тип топлива:Дизель (ДТ)</p>
            <p>Объем бака (вместимость):17.2 Галлона (3.7л) (65.1 в литрах)</p>
            <p>Максимальная скорость:108.7 Mph (миль/ч) (175 Км/ч)</p>
            <p>Ускорение 0-62 Mph (миль/ч) (0-100 Км/ч):15 S</p>
            <p>Привод (Тип):Перед Wheel Drive</p>
            <p>КПП:5ти ступ механика</p>
            <p>Перед:Вентилируемые тормозные диски</p>
            <p>Сзади:Диски</p>
            <p>Размерность:205/60Hr15</p>
            <p>Размеры колеи:58.7/57.5 дюйма (1/491/1/461 мм)</p>
            <p>Колесная база (+/- дорожный просвет):107.9 дюйма (2741 мм)</p>
            <p>Клиренс:6.3 дюйма (160 мм)</p>
            <p>Обьем багажника:16.9 Cuft (Куб/Фут) (479 в литрах)</p>
            <p>Пустой (порожняком):2943.2 Фунтов (1335 Кг)</p>
            <p>Максимальная грузоподъемность:4332 Фунтов (1965 Кг)</p>
            <p>Аэродинамика (Задняя сторона):0.33</p>
            <p>Расход по городу:30.9 Миль/Галлон (7.6 Литров/100Км)</p>
            <p>Расход по трассе:49 Миль/Галлон (4.8 Литров/100Км)</p>
            <p>Расход при комбинированной езде:40.6 Миль/Галлон (5.8 Литров/100Км)</p>
            <p>Сo2 (Выбросы):155 Гр/Км</p>
        </div>
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
