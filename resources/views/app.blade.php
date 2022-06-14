
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
                    <a href="#" class="h12"><h3>КОНТАКТИ</h3></a>
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
                        <?php
                        $categories = DB::table('categories')->get();
                        ?>
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
@yield('scripts')
<script src="https://kit.fontawesome.com/1467b92032.js" crossorigin="anonymous"></script>
{{--<script>--}}

{{--    const openPopUp = document.querySelectorAll('.open_pop_up');--}}
{{--    const closePopUp = document.getElementById('pop_up_close');--}}
{{--    const popUp = document.getElementById('pop_up');--}}
{{--    const openResponse = document.getElementById('open_response');--}}
{{--    const response = document.getElementById('response');--}}
{{--    for(var i=0; i<openPopUp.length; i++) {--}}
{{--        openPopUp[i].addEventListener('click', function (e) {--}}
{{--            e.preventDefault();--}}
{{--            popUp.classList.add('active');--}}

{{--        });--}}
{{--    }--}}

{{--    closePopUp.addEventListener('click', () => {--}}
{{--        popUp.classList.remove('active');--}}
{{--        response.classList.remove('active');--}}
{{--    })--}}
{{--</script>--}}
{{--<script>--}}
{{--    const item =document.querySelector(".more");--}}
{{--    const getItem = item.getBoundingClientRect().y+window.pageYOffset;--}}
{{--    console.log(getItem);--}}
{{--</script>--}}
{{--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function(){--}}
{{--        var inProcess = false;--}}
{{--        var num = 4;--}}
{{--        const more = document.getElementById('more');--}}


{{--        // $(window).scroll(function() {--}}
{{--            // if($(window).scrollTop() + $(window).height() >= $(document).height() && !inProcess) {--}}
{{--            more.addEventListener('click', function (e) {--}}
{{--                $.ajax({--}}
{{--                    url: './our_works/'+num,--}}
{{--                    method: 'GET',--}}
{{--                    beforeSend: function () {--}}

{{--                    },--}}
{{--                    success: function (response) {--}}
{{--                        if(!response && !inProcess){--}}
{{--                            $('#logar').append("<p style='text-align:center'>Немає більше товарів</p>");--}}

{{--                            inProcess = true;--}}
{{--                        }--}}
{{--                        else {--}}
{{--                            $('#logar').append(response);--}}

{{--                        }--}}
{{--                    }--}}
{{--                }).done(function (data) {--}}
{{--                    num += 4;--}}
{{--                });--}}

{{--            })--}}
{{--        // });--}}
{{--    });--}}

{{--</script>--}}
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script type="module" src="https://unpkg.com/photoswipe@5.2.4/dist/photoswipe-lightbox.esm.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
<script>
    lightGallery(document.getElementById("my-gallery"));
</script>
<script src="https://unpkg.com/photoswipe@5.2.4/dist/photoswipe.esm.js"></script>
<script>
    const global_swiper_photoswipe_loop_setting = false;

    // var swiper = new Swiper(".swiper", {
    //     slidesPerView: 5,
    //     spaceBetween: 10,
    //     centeredSlides: true,
    //     grabCursor: true,
    //     effect: "creative",
    //     creativeEffect: {
    //         prev: {
    //             shadow: true,
    //             translate: ["-30%", 0, -1],
    //         },
    //         next: {
    //             translate: ["100%", 0, 0],
    //         },
    //     },
    //     // If we need pagination
    //     loop: global_swiper_photoswipe_loop_setting,
    //     pagination: {
    //         el: '.swiper-pagination',
    //         clickable: true, /* false by deafult */
    //         renderBullet: function(index, className) {
    //             return '<span class="' + className + '">' + (index + 1) + "</span>";
    //         }
    //     },
    //     // Navigation arrows
    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev',
    //     },
    //     /* remove/comment to stop autoplay   */
    //     autoplay: {
    //         delay: 3000,
    //         disableOnInteraction: false
    //     },
    //     // keyboard control
    //     keyboard: {
    //         enabled: true,
    //     }
    // });
    var swiper= new Swiper(".swiper", {
        spaceBetween: 20,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 2,
        loop:true,
        breakpoints: {
            768:{
                slidesPerView: 4.05,
                spaceBetween: 20,
            },
            576:{
                slidesPerView: 3.05,
                spaceBetween: 15,
            },
            992:{
                slidesPerView: 5.05,
                spaceBetween: 30,
            }

        }
    });
    // import PhotoSwipeLightbox from 'photoswipe-lightbox.esm.js';
    // import PhotoSwipe from 'https://unpkg.com/photoswipe@5.2.4/dist/photoswipe.esm.js';
    //
    // const photo_swipe_options = {
    //     gallery: '#my-gallery',
    //     pswpModule: PhotoSwipe,
    //     // children: 'a',
    //     loop: global_swiper_photoswipe_loop_setting,
    //     showHideAnimationType: 'zoom', /* options: fade, zoom, none */
    //     /* ## Hiding a specific UI element ## */
    //     zoom: false,
    //     close: true,
    //     counter: !global_swiper_photoswipe_loop_setting,
    //     arrowKeys: true,
    //     /* ## Options ## */
    //     bgOpacity: 0.3,/* deafult: 0.8 */
    //     wheelToZoom: true, /* deafult: undefined */
    // };
    //
    // const lightbox = new PhotoSwipeLightbox(photo_swipe_options);
    //
    // lightbox.init();
    //
    // lightbox.on('change', () => {
    //     const { pswp } = lightbox;
    //     swiper.slideTo(pswp.currIndex, 0, false);
    //     //console.log('Slide index', pswp.currIndex);
    //     //console.log('Slide object', pswp.currSlide);
    //     //console.log('Slide object data', pswp.currSlide.data);
    // });
    //
    // lightbox.on('afterInit', () => {
    //     const { pswp } = lightbox;
    //     if(swiper.params.autoplay.enabled){
    //         swiper.autoplay.stop();
    //     };
    //     console.log('afterInit');
    // });
    //
    //
    // lightbox.on('closingAnimationStart', () => {
    //     //console.log('closingAnimationStart');
    //     const { pswp } = lightbox;
    //     swiper.slideTo(pswp.currIndex, 0, false);
    //     /* if autoplay enabled == true -> autoplay.start() when close lightbox */
    //     if(swiper.params.autoplay.enabled){
    //         swiper.autoplay.start();
    //     }
    // });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('.menu-burger__header').click(function(){
            $('.menu-burger__header').toggleClass('open-menu');
            $('.menu').toggleClass('open-menu');
            $('body').toggleClass('fixed-page');
        });
    });
</script>

{{--<script>--}}
{{--    var modal = document.getElementById("modal");--}}
{{--    var img = document.getElementById("myImg");--}}
{{--    var modalImg = document.getElementById("img01");--}}
{{--    var close = document.getElementById("close");--}}
{{--    img.onclick = function(){--}}
{{--        modal.style.display = "block";--}}
{{--        modalImg.src = this.src;--}}
{{--    }--}}
{{--    close.onclick=function(){--}}
{{--        modal.style.display="none";--}}
{{--    }--}}
{{--</script>--}}
<script>
    function results(){
        let form = document.forms.my;
        let width = form.elements.width;
        let height = form.elements.height;
        let depth = form.elements.depth;
        let type=form.elements.type;
        let type_c=form.elements.type_construction;
        let type_door=form.elements.type_door;
        let thickness =form.elements.thickness;
        let furniture = form.elements.furniture;
        var result;

        result=type_construction(type_c.value, type_door.value, furniture.value)+((width.value/1000+depth.value/1000)*height.value/1000*type.value*thickness.value);
        result*=1.5;
        if(result) {
            document.getElementById('result').innerHTML = "Сума: від " + result + " грн";
        }
        // document.getElementById('result').innerHTML = width.value*height.value*type.value*type_c.value*type_door.value*thickness.value*furniture.value;
    }
    function type_construction(type_c, type_door, furniture){
            if(type_c=='tap' && type_door==3){
                document.getElementById('depth_1').innerHTML = "0 мм";
                document.getElementById('depth').value=0;
                console.log(1225*furniture);
                return 1225*furniture;
            }
            else if(type_c==='tap'){
                console.log(3550*furniture);
                return 3550*furniture;
            }
            else{
                console.log(3905*furniture);

                return 3905*furniture;
            }
    }
</script>

</body>
</html>

