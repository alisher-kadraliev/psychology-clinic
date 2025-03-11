<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <!-- ***** Header Area Start ***** -->
    <div class="bg-[#7a6ada] h-32 max-lg:h-24">
    <header class="header-area header-sticky ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav ">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('front.index') }}" class="logo">
                            <h1>KUTA</h1>
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav ">
                            <li class="scroll-to-section"><a href="{{ route('front.index') }}">Anasayfa</a></li>
                            <li class="scroll-to-section"><a href="{{ route('front.about') }}">Hakkımızda</a></li>
                            <li class="scroll-to-section"><a href="{{ route('front.services') }}">Hizmetlerimiz</a>
                            </li>
                            <li class="scroll-to-section"><a href="{{ route('front.blog') }}">Blog</a></li>
                            <li class="scroll-to-section"><a href="{{ route('front.contact') }}">İletişim</a></li>
                            <li class="scroll-to-section"><a href="{{ route('front.team') }}">Kadromuz</a></li>
                            <li class="scroll-to-section"><a href="{{ route('front.why-kuta') }}">Neden KUTA?</a></li>
                            <li class="scroll-to-section"><a href="{{ route('front.in-the-media') }}">Basında Biz</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="tel:05521214124"
                                    class="max-lg:hidden font-bold text-white bg-white/50 px-4 max-lg:!text-black rounded-md">
                                    05521214124
                                </a>
                            </li>
                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    </div>
    <!-- ***** Header Area End ***** -->
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <div class="col-lg-12 ">
                <p>Copyright © 2025 KUTA. All rights reserved. &nbsp;&nbsp;&nbsp; {{-- Design: <a
                        href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a> --}}</p>
            </div>
        </div>
    </footer>
    <a href="tel:05521214124" class="fixed z-50 bottom-5 right-5 bg-blue-700 text-white max-lg:hidden px-4 h-10 py-2 rounded-md">
        <i class="fa fa-phone"></i>
    </a>
<div>
    <div class="" id="">
        <div class="whatsapp-main">
            <div type="floating" class="whatsapp-wrapper hide-whatsapp" style="width: 360px;">
                <div color="rgb(29, 33, 41)" role="button" tabindex="0" class="close_whatsapp"></div>
                <div class="whatsapp-header">
                    <div size="52" class="support-avatar">
                        <div class="avatar-wrapper">
                            <div class="avatar-img" style="background-image:url(https://ozaytarim.moonsunum.com/upload/settings/logo-1.webp);"></div>
                        </div>
                    </div>
                    <div class="header-info">
                        <div class="whatsapp-name">KUTA</div>
                        <div class="whatsapp-reply-time">Çevrimiçi</div>
                    </div>
                </div>
                <div class="whatsapp-background">
                    <div class="whatsapp-message-container">
                        <div class="loading-animation">
                            <div class="dot-pulse"></div>
                        </div>
                        <div class="whatsapp-message-wrapper">
                            <div class="chat-body-wrapper">
                                <div class="whatsapp-chat-name">KUTA</div>
                                <div class="whatsapp-chat-message">
                                    <div>
                                        <p>deneme</p>                                    </div>
                                </div>
                                <div class="whatsapp-chat-time">16:54</div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://wa.me/902425027007?text=deneme" title="WhatsApp" class="whatsapp-btn" role="button" target="popup" onclick="window.open('https://wa.me/902425027007?text=deneme','popup','width=700,height=600'); return false;">
                    <svg class="whatsapp-send-icon-small" xmlns="http://www.w3.org/2000/svg" version="1" height="20"
                         viewBox="0 0 90 90">
                        <path
                            d="M90 44a44 44 0 0 1-66 38L0 90l8-24A44 44 0 0 1 46 0c24 0 44 20 44 44zM46 7C25 7 9 24 9 44c0 8 2 15 7 21l-5 14 14-4a37 37 0 0 0 58-31C83 24 66 7 46 7zm22 47l-2-1-7-4-3 1-3 4h-3c-1 0-4-1-8-5-3-3-6-6-6-8v-2l2-2 1-1v-2l-4-8c0-2-1-2-2-2h-2l-3 1c-1 1-4 4-4 9s4 11 5 11c0 1 7 12 18 16 11 5 11 3 13 3s7-2 7-5l1-5z"
                            fill="#FFF"/>
                    </svg>
                    <span class="chat-button-text">Whatsapp Sohbet</span>
                </a>
                <div style="display: flex; justify-content: center; align-items: center;"></div>
            </div>
        </div>
    </div>
</div>
<headers>
    <a style="background-color: #122e5c;" href="tel:902425027007" class="callnow">
        <i class="fas fa-phone-alt" style="padding-right: 5px;transform: rotate(0deg);"></i> HEMEN ARA
    </a>
    <div class="whatsappx">
        <div class="whatsapp-popup-button play-btn" id="whatsapp-popup">
            <div class="whatsapp-button-main">
                WHATSAPP
            </div>
        </div>
    </div>
</headers>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('front/assets/js/counter.js') }}"></script>
    <script src="{{ asset('front/assets/js/custom.js') }}"></script>

</body>

</html>
