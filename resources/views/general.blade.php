@extends('app')
@section('title', 'ArKon | Головна')
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
                @foreach($categories->take(6) as $category)
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
                        <div class="col-6 col-md-4">
                            <label>
                                <select name="type_construction" onchange="results()">
                                    <option disabled="disabled" selected="selected">Тип конструкції</option>
                                    <option value="angle">Кутова</option>
                                    <option value="angle135">Кутова 135</option>
                                    <option value="tap">Душикран</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-6 col-md-4">
                            <label>
                                <select name="type_door" onchange="results()">
                                    <option disabled="disabled" selected="selected">Тип дверей</option>
                                    <option value="1">Розпашні</option>
                                    <option value="2">Розсувні</option>
                                    <option value="3">Глухі</option>
                                </select>
                            </label>
                        </div>
                            <div class="col-6 col-md-4">
                                <label>
                                    <select name="depth" onchange="results()" id="depth">
                                        <option disabled="disabled" selected="selected" id="depth_1">Глибина, мм</option>
                                        <option value="0">0</option>
                                        @for($i=750; $i<1250; $i+=50)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor

                                    </select>
                                </label>
                            </div>

                        <div class="col-6 col-md-4">
                            <label>
                                <select name="height" onchange="results()">
                                    <option disabled="disabled" selected="selected">Висота, мм</option>
                                    @for($i=1800; $i<2200; $i+=50)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor

                                </select>
                            </label>

                        </div>
                        <div class="col-6 col-md-4">
                            <label>
                                <select name="width" onchange="results()">
                                    <option disabled="disabled" selected="selected">Ширина, мм</option>
                                    @for($i=750; $i<1200; $i+=50)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </label>

                        </div>
                        <div class="col-6 col-md-4">
                            <label>
                                <select name="thickness" onchange="results()">
                                    <option disabled="disabled" selected="selected">Товщина скла, мм</option>
                                    <option value="0.9">6</option>
                                    <option value="1">8</option>
                                    <option value="1.1">10</option>
                                </select>
                            </label>

                        </div>
                        <div class="col-6 col-md-4">
                            <label>
                                <select name="type" onchange="results()">
                                    <option disabled="disabled" selected="selected">Тип скла</option>
                                    <option value="1650">Прозоре </option>
                                    <option value="1850">Матове</option>
                                    <option value="2100">Графіт</option>
                                    <option value="2100">Бронза</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-6 col-md-4">
                            <label>
                                <select name="furniture" onchange="results()">
                                    <option disabled="disabled" selected="selected">Фурнітра</option>
                                    <option value="1">Глянцева</option>
                                    <option value="1">Матова</option>
                                    <option value="1.2">Чорна</option>

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
                                <img  src="{{url($work->photos[0]->photo)}}" alt="">
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


