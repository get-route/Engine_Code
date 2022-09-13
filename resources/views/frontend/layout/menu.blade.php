@section('menu')
<div class="container fixed-top">
    <div class="row">
        <div class="col-12">
            <nav class="main-nav" >
                <!-- ***** Logo Start ***** -->
                <a href="/" class="logo">
                    <font color="#7f0fba">ᗩᎥ</font>Rall.Ru
                </a>
                <!-- ***** Logo End ***** -->

                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                    <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                    <li class="scroll-to-section"><a href="{{route('model.index')}}" target="_blank">Модели</a></li>
                    <li class="scroll-to-section"><a href="{{route('engine.index')}}" target="_blank">Двигатели</a></li>
                    <li class="scroll-to-section"><a href="#contact">ВинКод</a></li>
                    <li class="scroll-to-section"><div class="border-first-button"><a href="#contact">Free Quote</a></div></li>
                </ul>
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
</div>
@endsection
