@section('footer')

    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-center">
                <hr class="hr-shadow">
                <ul class="footer-ui">
                    <li>

                        <div class="post-item-footer">
                            <div class="thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog-post-04.jpg')}}" alt=""></a>
                            </div>
                            <div class="right-content">
                                <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                                <span class="date">24 September 2021</span>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="post-item-footer text-center">
                            <div class="thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog-post-02.jpg')}}" alt=""></a>
                            </div>
                            <div class="right-content">
                                <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                                <span class="date">24 September 2021</span>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
            <div class="col-lg-4 text-center">
                <hr class="hr-shadow">

                <ul class="footer-ui">
                    <li>

                        <div class="post-item-footer">
                            <div class="thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog-post-02.jpg')}}" alt=""></a>
                            </div>
                            <div class="right-content">
                                <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                                <span class="date">24 September 2021</span>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="post-item-footer text-center">
                            <div class="thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog-post-03.jpg')}}" alt=""></a>
                            </div>
                            <div class="right-content">
                                <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                                <span class="date">24 September 2021</span>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
            <div class="col-lg-4 text-center">
                <hr class="hr-shadow">

                <ul class="footer-ui">
                    <li>

                        <div class="post-item-footer">
                            <div class="thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog-post-04.jpg')}}" alt=""></a>
                            </div>
                            <div class="right-content">
                                <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                                <span class="date">24 September 2021</span>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="post-item-footer text-center">
                            <div class="thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog-post-04.jpg')}}" alt=""></a>
                            </div>
                            <div class="right-content">
                                <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                                <span class="date">24 September 2021</span>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
        <p>@Все права защищены. {{date('Y')}}. Сервис берет информацию из открытых источников. Во избежании проблем
            советуем Вам проверять сведения о номере двигателя у Вашего производителя.</p>
    </div>
    @vite([
    'resources/frontend/js/bootstrap.bundle.min.js',
    'resources/frontend/js/owl-carousel.js',
    'resources/frontend/js/custom.js',
    'resources/js/app.js',
    'resources/sass/app.scss',
    ])
@endsection
