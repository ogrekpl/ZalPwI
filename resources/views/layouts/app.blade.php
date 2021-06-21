<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Projekt na zaliczenie" />
    <meta name="author" content="Sebastian Marciniak" />
    <title>{{ __('lang.title')}}</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>
<body id="start">
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">{{ __('lang.about')}}</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#salesforce">{{ __('lang.sf')}}</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#experience">{{ __('lang.experience')}}</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('locale.setting', 'pl') }}">PL</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('locale.setting', 'en') }}">ENG</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <h1 class="masthead-heading text-uppercase mb-0">Sebastian Marciniak</h1>
        <h1 class="masthead-heading text-uppercase mb-0">&nbsp</h1>
        <h3 class="masthead-heading text-uppercase mb-0">Junior Salesforce Developer</h3>
    </div>
</header>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0.js')}}"></script>
</body>
<script src="{{asset('js/cookies.js')}}"></script>
</html>
