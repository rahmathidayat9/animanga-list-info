<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime Info | {{ $title ?? 'Home' }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ secure_asset('templates/frontend/anime-main') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('templates/frontend/anime-main') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('templates/frontend/anime-main') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('templates/frontend/anime-main') }}/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('templates/frontend/anime-main') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('templates/frontend/anime-main') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('templates/frontend/anime-main') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('templates/frontend/anime-main') }}/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ secure_asset('templates/frontend/anime-main') }}/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                <!-- <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Categories</a></li>
                                        <li><a href="./anime-details.html">Anime Details</a></li>
                                        <li><a href="./anime-watching.html">Anime Watching</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="./signup.html">Sign Up</a></li>
                                        <li><a href="./login.html">Login</a></li>
                                    </ul>
                                </li> -->
                                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
                                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="#">Contact</a></li>
                                <li class="{{ Request::is('group-chat') ? 'active' : '' }}"><a href="/group-chat">Group Chat</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
@yield('content')
<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="{{ route('home') }}"><img src="{{ secure_asset('templates/frontend/anime-main') }}/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
                        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="#">Contact</a></li>
                        <li class="{{ Request::is('group-chat') ? 'active' : '' }}"><a href="/group-chat">Group Chat</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright Rahmat Hidayatullah &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form" action="{{ route('search.anime') }}" method="GET">
            <div class="input-group">
              <input type="text" id="search-input" name="q" class="form-control" placeholder="Search Anime">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="{{ secure_asset('templates/frontend/anime-main') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ secure_asset('templates/frontend/anime-main') }}/js/bootstrap.min.js"></script>
<script src="{{ secure_asset('templates/frontend/anime-main') }}/js/player.js"></script>
<script src="{{ secure_asset('templates/frontend/anime-main') }}/js/jquery.nice-select.min.js"></script>
<script src="{{ secure_asset('templates/frontend/anime-main') }}/js/mixitup.min.js"></script>
<script src="{{ secure_asset('templates/frontend/anime-main') }}/js/jquery.slicknav.js"></script>
<script src="{{ secure_asset('templates/frontend/anime-main') }}/js/owl.carousel.min.js"></script>
<script src="{{ secure_asset('templates/frontend/anime-main') }}/js/main.js"></script>

</body>
</html>