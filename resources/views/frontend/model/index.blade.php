@section('title','Тут будет заголовок модели')
@section('description','Описание для модели страницы')
@include('frontend.layout.menu')
@include('frontend.layout.footer')
@include('frontend.layout.head')
    <!DOCTYPE html>
<html lang="ru">

<head>
    @yield('head')

</head>

<body>
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
