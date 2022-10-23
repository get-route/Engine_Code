@section('footer')

    <div class="container" id="footer">
        <p>@Все права защищены. {{date('Y')}}. Сервис берет информацию из открытых источников. Во избежании проблем
            советуем Вам проверять сведения о номере двигателя у Вашего производителя.</p>
    </div>
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/imagesloaded.js')}}"></script>
    @vite([
    'resources/frontend/js/bootstrap.bundle.min.js',
    'resources/frontend/js/owl-carousel.js',
    'resources/frontend/js/custom.js',
    'resources/js/app.js',
    'resources/sass/app.scss',
    ])
@endsection
