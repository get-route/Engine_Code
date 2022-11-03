@section('title','Форма входа на сайт')
@section('description','Форма для входа на сайт')
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

<!-- ***** Header Area End ***** -->

    <header class="header-area header-sticky">
        @yield('menu')
    </header>

<section class="login  sticky-bottom" id="app">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-lg-12">
                <form method="post" class="w-50 justify-content-center" style="margin-top: 100px" action="{{route('login.auth')}}" >

                    @csrf
                    <div>
                        <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div >
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="mt-4 btn btn-dark">Войти</button>
                    <p>* Если не регистрировались, то пора бы уже это сделать - <a href="{{route('register')}}">Регистрация</a> </p>

                </form>
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

