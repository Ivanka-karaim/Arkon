@extends('app')
@section('title', 'Скляні конструкції | Головна')
@section('content')
    <section>
        <div class="container">

            <div class="general">
                <div class="block_general_all">
                    <div class="block_general">
                        <div class="block_sklo">
                        </div>
                        <div class="block_sklo_2">
                            <h3>СКЛЯНІ КОНСТРУКЦІЇ</h3>
                            <h2>НЕСТАНДАРТНЕ РІШЕННЯ ВАШОГО ІНТЕР’ЄРУ</h2>
                        </div>
                    </div>
                    <div class="block_general_button">
                        <a  href="{{route('catalog')}}">
                            ПЕРЕЙТИ ДО КАТАЛОГУ
                            <i class="fa-solid fa-arrow-right"></i></a>

                    </div>


                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="block_character ">
                        <div class="charat">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>
                        <p>ЧЕСНІ ЦІНИ</p>

                    </div>

                </div>
                <div class="col-6 col-lg-3">
                    <div class="block_character ">
                        <div class="charat">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <p>КОНСУЛЬТАЦІЇ</p>

                    </div>

                </div>
                <div class="col-6 col-lg-3">
                    <div class="block_character ">
                        <div class="charat">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                        <p>НАДІЙНІСТЬ</p>

                    </div>

                </div>
                <div class="col-6 col-lg-3">
                    <div class="block_character ">
                        <div class="charat">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <p>ГАРАНТІЯ</p>

                    </div>

                </div>
            </div>
        </div></section>
    <section class="about_us">
        <div class="container">
            <div class="about_us_desktop">
                <div class="row">
                    <div class=" col-lg-6">
                        <div class="about_us_text_and_button">
                            <h3>КОМПАНІЯ АРКОН - КОНСУЛЬТАЦІЇ ТА ВИБІР КРАЩОГО ВАРІАНТУ!</h3>

                            <p class="about_us_text">Продукція компанії Аркон орієнтована на тих, хто прагне перетворити навколишній простір сучасними інтер'єрними деталями, завдяки яким унікальний інтер'єр відрізняється від типового. Сходи зі скляними ступенями, панно і дзеркала з декоративною обробкою - все це додає в інтер'єр більше повітря, простору і оригінальності. Тому ми використовуємо для своїх виробів загартоване скло, яке при зовнішній крихкості, невагомості і прозорості має підвищену стійкість до деформації. У нас ви можете замовити те, що дозріло в якості власної ідеї, але не продається в магазинах.</p>
                            <div class="about_us_button">
                                <a  href="{{route('catalog')}}">
                                    Перейти до каталогу
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-6">
                        <div class="photo">
                            <img  src="img/sklo-520x343.png" alt="" >
                        </div>
                    </div>
                </div>

            </div>
            <div class="about_us_mobile">
                <div class="row">
                    <div class="col-12">
                        <div class="about_us_text_and_button">
                            <h3>КОМПАНІЯ АРКОН - КОНСУЛЬТАЦІЇ ТА ВИБІР КРАЩОГО ВАРІАНТУ!</h3>

                            <p class="about_us_text">Продукція компанії Аркон орієнтована на тих, хто прагне перетворити навколишній простір сучасними інтер'єрними деталями, завдяки яким унікальний інтер'єр відрізняється від типового. Сходи зі скляними ступенями, панно і дзеркала з декоративною обробкою - все це додає в інтер'єр більше повітря, простору і оригінальності. Тому ми використовуємо для своїх виробів загартоване скло, яке при зовнішній крихкості, невагомості і прозорості має підвищену стійкість до деформації. У нас ви можете замовити те, що дозріло в якості власної ідеї, але не продається в магазинах.</p>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="photo">
                            <img  src="img/sklo-520x343.png" alt="" >

                            <div class="about_us_button">
                                <a  href="{{route('catalog')}}">
                                    Перейти до каталогу
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <section class="catalog_lend">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-6 col-lg-4">
                    <a href="{{url('./catalog/'.$category->id)}}" class=" catalog_lending  ">
                        <img class="photo" src="{{url($category->photo)}}" alt="">
                        <div class="block_text_catalog ">
                            <h2>{{$category->name}}</h2>
                            <hr>
                            <p>{{$category->description}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="account">
        <div class="container">
            <div class="account_block">
                <h3>РОЗРАХУЙТЕ ЦІНУ ЗА ВАШИМ ПРОЕКТОМ ДУШОВОЇ КАБІНИ
                </h3>
                <div class="account_block_with_form ">
                    <div class="row">
                        <form name="my" class="row">
                        <div class="col-12 col-md-6">
                            <label>
                                <select name="type_construction" onchange="results()">
                                    <option disabled="disabled" selected="selected">Тип конструкції</option>
                                    <option value="3">Kfkf</option>
                                    <option value="4">Kfkf</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-6 col-md-6">
                            <label>
                                <select name="type_door" onchange="results()">
                                    <option disabled="disabled" selected="selected">Тип дверей</option>
                                    <option value="3">Kfkf</option>
                                    <option value="4">Kfkf</option>
                                </select>
                            </label>
                        </div>

                        <div class="col-6 col-md-4">
                            <label>
                                <select name="height" onchange="results()">
                                    <option disabled="disabled" selected="selected">Висота, мм</option>
                                    <option value="3">Kfkf</option>
                                    <option value="4">Kfkf</option>
                                </select>
                            </label>

                        </div>
                        <div class="col-6 col-md-4">
                            <label>
                                <select name="width" onchange="results()">
                                    <option disabled="disabled" selected="selected">Ширина, мм</option>
                                    <option value="3">Kfkf</option>
                                    <option value="4">Kfkf</option>
                                </select>
                            </label>

                        </div>
                        <div class="col-6 col-md-4">
                            <label>
                                <select name="thickness" onchange="results()">
                                    <option disabled="disabled" selected="selected">Товщина скла, мм</option>
                                    <option value="3">Kfkf</option>
                                    <option value="4">Kfkf</option>
                                </select>
                            </label>

                        </div>
                        <div class="col-6 col-md-4">
                            <label>
                                <select name="type" onchange="results()">
                                    <option disabled="disabled" selected="selected">Тип скла</option>
                                    <option value="3">Kfkf</option>
                                    <option value="4">Kfkf</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-6 col-md-4">
                            <label>
                                <select name="furniture" onchange="results()">
                                    <option disabled="disabled" selected="selected">Фурнітра</option>
                                    <option value="3">Kfkf</option>
                                    <option value="4">Kfkf</option>
                                </select>
                            </label>
                        </div>

                        <div class="col-12 col-md-4 ">
                            <div class="result result_back" id="result" >Сума: 0грн</div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </section>
    <section class="new_photo">
        <div class="container">
            <div class="new_photo_block">
                <h3>НОВІ РЕАЛІЗОВАНІ ПРОЕКТИ</h3>
                <div class="my_new">
                <div class="swiper" >
                    <div class="new_photo_block_ar swiper-wrapper" id="my-gallery">
                        @foreach($works as $work)
                        <a href="{{url($work->photos[0]->photo)}}" class="img swiper-slide">
{{--                            <a href="{{url($work->photos[0]->photo)}}">--}}
                                <img  src="{{url($work->photos[0]->photo)}}" alt="">
{{--                            </a>--}}

                        </a>
                        @endforeach
                    </div>
                </div>
                    <div class="swiper-button-prev button ">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="swiper-button-next button">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script>
        lightGallery(document.getElementById("my-gallery"));
    </script>
{{--    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>--}}
{{--    <script>--}}
{{--        new Swiper(".swiper", {--}}
{{--            spaceBetween: 20,--}}

{{--            navigation: {--}}
{{--                nextEl: '.swiper-button-next',--}}
{{--                prevEl: '.swiper-button-prev',--}}
{{--            },--}}
{{--            slidesPerView: 2,--}}
{{--            loop:true,--}}
{{--            breakpoints: {--}}
{{--                768:{--}}
{{--                    slidesPerView: 4.05,--}}
{{--                    spaceBetween: 20,--}}
{{--                },--}}
{{--                576:{--}}
{{--                    slidesPerView: 3.05,--}}
{{--                    spaceBetween: 15,--}}
{{--                },--}}
{{--                992:{--}}
{{--                    slidesPerView: 5.05,--}}
{{--                    spaceBetween: 30,--}}
{{--                }--}}

{{--            }--}}
{{--        });--}}


{{--        import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5.2.4/dist/photoswipe-lightbox.esm.js';--}}
{{--        import PhotoSwipe from 'https://unpkg.com/photoswipe@5.2.4/dist/photoswipe.esm.js';--}}

{{--        const photo_swipe_options = {--}}
{{--            gallery: '#my-gallery',--}}
{{--            pswpModule: PhotoSwipe,--}}
{{--            children: 'a',--}}
{{--            loop: global_swiper_photoswipe_loop_setting,--}}
{{--            showHideAnimationType: 'zoom', /* options: fade, zoom, none */--}}
{{--            /* ## Hiding a specific UI element ## */--}}
{{--            zoom: false,--}}
{{--            close: true,--}}
{{--            counter: !global_swiper_photoswipe_loop_setting,--}}
{{--            arrowKeys: true,--}}
{{--            /* ## Options ## */--}}
{{--            bgOpacity: 0.3,/* deafult: 0.8 */--}}
{{--            wheelToZoom: true, /* deafult: undefined */--}}
{{--        };--}}

{{--        const lightbox = new PhotoSwipeLightbox(photo_swipe_options);--}}

{{--        lightbox.init();--}}

{{--        lightbox.on('change', () => {--}}
{{--            const { pswp } = lightbox;--}}
{{--            swiper.slideTo(pswp.currIndex, 0, false);--}}
{{--            //console.log('Slide index', pswp.currIndex);--}}
{{--            //console.log('Slide object', pswp.currSlide);--}}
{{--            //console.log('Slide object data', pswp.currSlide.data);--}}
{{--        });--}}

{{--        lightbox.on('afterInit', () => {--}}
{{--            const { pswp } = lightbox;--}}
{{--            if(swiper.params.autoplay.enabled){--}}
{{--                swiper.autoplay.stop();--}}
{{--            };--}}
{{--            console.log('afterInit');--}}
{{--        });--}}


{{--        lightbox.on('closingAnimationStart', () => {--}}
{{--            //console.log('closingAnimationStart');--}}
{{--            const { pswp } = lightbox;--}}
{{--            swiper.slideTo(pswp.currIndex, 0, false);--}}
{{--            /* if autoplay enabled == true -> autoplay.start() when close lightbox */--}}
{{--            if(swiper.params.autoplay.enabled){--}}
{{--                swiper.autoplay.start();--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
    @endsection

