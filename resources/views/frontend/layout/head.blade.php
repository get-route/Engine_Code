@section('head')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="@yield('description')">
<meta name="author" content="">
<link rel="icon" type="image/png" href="{{asset('frontend/img/favicon.png')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
@vite(['resources/frontend/css/bootstrap.min.css',
'resources/frontend/css/fontawesome.css',
'resources/frontend/css/templatemo-digimedia-v1.css',
'resources/frontend/css/owl.css',
])
<title>@yield('title')</title>
@endsection
