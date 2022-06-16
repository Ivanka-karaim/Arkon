
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') </title>
    <link type="Image/x-icon" href="{{url('img/logo_title.png')}}" rel="icon">
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <link rel="stylesheet" href="{{url('css/catalog.css')}}">
    <link rel="stylesheet" href="{{url('css/products.css')}}">
    <link rel="stylesheet" href="{{url('css/services.css')}}">
    <link rel="stylesheet" href="{{url('css/product.css')}}">
    <link rel="stylesheet" href="{{url('css/our_works.css')}}">
    <link rel="stylesheet" href="{{url('bootstrap/bootstrap-grid.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />
{{--    <link rel="stylesheet" href="/examples/libs/chief-slider/chief-slider.min.css">--}}
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Mulish&family=Oswald:wght@300;400;500&family=Rubik&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="container">

        <div class="header_in">
            <div class="logo">
                <a href="{{route('general')}}"><img src="{{url('img/Logo.png')}}" alt=""></a>
            </div>
            <nav class="menu">

                    <ul class="menu header__menu">
                        <li>
                            <a href="{{route('general')}}">ГОЛОВНА</a>
                        </li>
                        <li>
                            <a href="{{route('catalog')}}">КАТАЛОГ</a>
                        </li>
                        <li>
                            <a href="{{route('services')}}">ПОСЛУГИ</a>
                        </li>
                        <li>
                            <a href="{{route('our_works')}}">НАШІ РОБОТИ</a>
                        </li>
                    </ul>


            </nav>
            <div class="contact">
                <div>
                    <a href="tel:+380685059650">+38 (068) 505 96 50</a>
                </div>
                <div class="icons">
                    <a class="icon" href="https://www.facebook.com/profile.php?id=100040310163390" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a class="icon" href="https://instagram.com/arkonsklo?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a class="icon" href="https://t.me/+380685059650" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                    <a class="icon" href="https://wa.me/380685059650" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="mobile">
            <div class="contact_mobile">
                <a class="icon" href="tel:+380685059650"><i class="fa-solid fa-phone"></i></a>
            </div>
            <div class="menu-burger__header">
                <span>
                </span>
            </div>
                </div>
        </div>
{{--        <div class="header_in_mobile">--}}
{{--            <div class="logo">--}}
{{--                <a href="{{route('general')}}"><img src="{{url('img/Logo.png')}}" alt="" ></a>--}}
{{--            </div>--}}
{{--            <div class="header_icons">--}}
{{--                <a class="icon" href="#"><i class="fa-solid fa-phone"></i></a>--}}
{{--                <div class="header_icon" ><span></span></div>--}}
{{--                <nav class="header__menu">--}}
{{--                    <ul class="header__list">--}}
{{--                        <li>--}}
{{--                            <a href="{{route('general')}}" class="header__link">Головна</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="{{route('catalog')}}" class="header__link">Каталог</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="{{route('services')}}" class="header__link">Послуги</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="{{route('our_works')}}" class="header__link">Наші роботи</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--            </div>--}}

{{--        </div>--}}
    </div>

</header>
<main class="main">
    @yield('content')
</main>
<footer class="footer">
    <div class="container">
        <div class="foot">
            <div class="row">
                <div class="col-md-4">
                    <div><h3>КОНТАКТИ</h3></div>
                    <div>
                        <a  href="tel:+380685059650">+38 (068) 505 96 50</a><br>
                        <a  href="tel:+380507517161">+38 (050) 751 71 61</a><br>
                        <a  href="mailto:salonskla@ukr.net">Email: salonskla@ukr.net</a><br>
                        <a  href="https://goo.gl/maps/FL2et2vg1AZoVLEVA" target="_blank">Львівська обл., м. Броди, вул. Руська, 9</a>
                    </div>
                    <div class="icons">
                        <a class="icon" href="https://www.facebook.com/profile.php?id=100040310163390" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a class="icon" href="https://instagram.com/arkonsklo?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a class="icon" href="https://t.me/+380685059650" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                        <a class="icon" href="https://wa.me/380685059650" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-4">
                    <a class="h12" href="{{route('services')}}"><h3>ПОСЛУГИ</h3></a>
                    <div class="posl" >Пропонуємо Вам встановлення та доставку якісних виробів зі скла, що зроблять Вашу оселю неповторною. Роботу оплатити можна будь-яким зручним для Вас способом.</div>
                </div>
                <div class="col-lg-5 col-xl-4 ">
                    <a class="h12" href="{{route('catalog')}}"><h3>КАТАЛОГ</h3></a>
                    <div class="row">
                        @foreach($categories as $category)
                        <div class="col-md-6">
                            <a href="{{route('products', $category->id)}}">{{$category->name}}</a>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        <div class="foot_900px">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" ><h3>КОНТАКТИ</h3></a>
                    <div>
                        <a  href="tel:+380685059650">+38 (068) 505 96 50</a><br>
                        <a  href="tel:+380507517161">+38 (050) 751 71 61</a><br>
                        <a  href="mailto:salonskla@ukr.net">Email: salonskla@ukr.net</a><br>
                        <a  href="https://goo.gl/maps/FL2et2vg1AZoVLEVA" target="_blank">Львівська обл., м. Броди, вул. Руська, 9</a>
                    </div>
                    <div class="icons">
                        <a class="icon" href="https://www.facebook.com/profile.php?id=100040310163390" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a class="icon" href="https://instagram.com/arkonsklo?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a class="icon" href="https://t.me/+380685059650" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                        <a class="icon" href="https://wa.me/380685059650" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <a class="h12" href="{{route('services')}}"><h3>ПОСЛУГИ</h3></a>
                    <div class="posl" >Пропонуємо Вам встановлення та доставку якісних виробів зі скла, що зроблять Вашу оселю неповторною. Роботу оплатити можна будь-яким зручним для Вас способом.</div>
                </div>
            </div>
        </div>


        <div class="foot_mobile">
            <h3>СКЛЯНІ КОНСТРУКЦІЇ</h3>
            <a  href="tel:+380685059650">+38 (068) 505 96 50</a><br>
            <a  href="tel:+380507517161">+38 (050) 751 71 61</a><br>
            <a  href="mailto:salonskla@ukr.net">Email: salonskla@ukr.net</a><br>
            <a  href="https://goo.gl/maps/FL2et2vg1AZoVLEVA" target="_blank">Львівська обл., м. Броди, вул. Руська, 9</a>
            <div class="icons">
                <a class="icon" href="https://www.facebook.com/profile.php?id=100040310163390" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a class="icon" href="https://instagram.com/arkonsklo?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a class="icon" href="https://t.me/+380685059650" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                <a class="icon" href="https://wa.me/380685059650" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>

    </div>
    <div class="last_foot">
        <div class="container">
            © 2022, Компанія Аркон, Скло в інтер'єрі Вашої оселі.
        </div>
    </div>

</footer>
<script src="https://kit.fontawesome.com/1467b92032.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>--}}
{{--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="{{url('/js/Swiper.js')}}"></script>
<script src="{{url('/js/menu.js')}}"></script>
<script src="{{url('/js/newWorks.js')}}"></script>
<script src="{{url('/js/forms.js')}}"></script>
<script src="{{url('/js/openPhoto.js')}}"></script>
<script src="{{url('/js/openPopUp.js')}}"></script>
</body>
</html>

