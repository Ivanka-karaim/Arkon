@extends('app')
@section('title', "ArKon | $product->name")
@section('content')
{{--    @if (Session::has('success'))--}}
{{--        <div class="pop_up active" >--}}
{{--            <div class="pop_up_container">--}}
{{--                <div class="pop_up_body" id="pop_up_body">--}}
{{--                    <h3>Ваш номер збержено, очікуйте дзвінка</h3>--}}
{{--                    <button class="pop_up_close">Ок</button>--}}
{{--                    <div class="pop_up_close" id="pop_up_close">&#10006--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
    <div class="pop_up {!! Session::get('response') !!}" id="pop_up">
        <div class="pop_up_container">
            <div class="pop_up_body" id="pop_up_body">
                @if((Session::has('good')))
                    <h3 style="display:block;">Ваш номер збержено, очікуйте дзвінка</h3>
                <div>
                    <button style="display:block;"  id="pop_up_ok" onclick="closePop('pop_up')">Ок</button></div>
                @else
                <h3>Для замовлення введіть ваш номер телефону</h3>
                <p>Наш консультант зателефонує вам в найближчий термін для уточнення усіх даних</p>
                <form action="" method="post">
                    @csrf
                    <input type="text" placeholder="+38 (000) 000 00 00" id="phone_number" name="phone_number" required="">
                    <p>{!! Session::get('error') !!}</p>
                    <button id="open_response">Надіслати</button>
                </form>
                @endif
                <div class="pop_up_close" id="pop_up_close" onclick="closePop('pop_up')">&#10006
                </div>



            </div>
        </div>
    </div>
<div class="pop_up" id="modal">
    <div class="pop_up_container">
        <div class="photo_body">
            <span class="close" id="close" onclick="closePop('modal')">&#10006</span>
            <img class="modal-content" id="img01">
        </div>
    </div>
</div>
    <section class="way">
        <div class="container">
            <div class="way_block">
                <div class="way_flex">
                    <a href="{{route('general')}}"><h2>Головна</h2></a>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <a href="{{route('catalog')}}"><h2>Каталог</h2></a>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <a href="{{route('products',$product->category->id)}}"><h2>{{$product->category->name}}</h2></a>
                </div>
                <div class="way_flex">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <a href="#"><h2>{{$product->name}}</h2></a>
                </div>
            </div>
            <h1>{{$product->name}}</h1>
        </div>
    </section>

    <section class="product">
        <div class="container">
            <div class="product_photo_and_description">
                <div class="row">
                    <div class="col-lg-6">
{{--                        <a href="{{url($product->photo)}}" id="photo">--}}
                            <img class="click" src="{{url($product->photo)}}" alt="" id="myImg">
{{--                        </a>--}}
                    </div>
                    <div class="col-lg-6">
                        <div class="description">

                            <h2>Характеристики:</h2>
                            <hr>
                            <div class="text">
                                <p>{{'Використане скло: '.($product->glass?  $product->glass:' - ')}}</p>
                                <p>{{'Фурнітура: '.($product->furniture? $product->furniture:' - ')}}</p>
                                <p>{{'Колір скла: '.($product->color_glass? $product->color_glass:' - ')}}</p>
                                <p>{{'Колір фурнітури: '.($product->color_furniture? $product->color_furniture:' - ')}}</p>
                                <p>{{'Ширина: від '.($product->width? $product->width.'мм':' - ')}}</p>
                                <p>{{'Висота: від '.($product->height? $product->height.'мм':' - ')}}</p>
                            </div>
                            <div style="display: flex; margin: 20px 0;">
                                <h2 style="  white-space: pre;" >Ціна: </h2>
                                <h2 style=" color:#1E7DB2;">{{' від '.$product->price." грн"}}</h2>
                            </div>
                            <div class="order">
                                <div class="guarantee">
                                    <div class="column_guarantee">
                                        <h2>Час Виготовлення:</h2>
                                        <h2 class="usual">15 робочих днів</h2>
                                    </div>
                                    <div class="column_guarantee">
                                        <h2>Гарантія:</h2>
                                        <h2 class="usual">1 рік</h2>
                                    </div>
                                </div>
                                <div class="buy">
                                    <div class="open_pop_up">
                                        Замовити
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="product_photo_and_description_medium">
                <div class="row">
                    <div class="col-md-7">
                        <img src="{{url($product->photo)}}" alt="" >
                        <div class="guarantee">
                            <div class="column_guarantee">
                                <h2>Час Виготовлення:</h2>
                                <h2 class="usual">15 робочих днів</h2>
                            </div>
                            <div class="column_guarantee">
                                <h2>Гарантія:</h2>
                                <h2 class="usual">1 рік</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="description">

                            <h2>Характеристики:</h2>
                            <hr>
                            <div class="text">
                                <p>{{'Використане скло: '.($product->glass?  $product->glass:' - ')}}</p>
                                <p>{{'Фурнітура: '.($product->furniture? $product->furniture:' - ')}}</p>
                                <p>{{'Колір скла: '.($product->color_glass? $product->color_glass:' - ')}}</p>
                                <p>{{'Колір фурнітури: '.($product->color_furniture? $product->color_furniture:' - ')}}</p>
                                <p>{{'Ширина: від '.($product->width? $product->width.'мм':' - ')}}</p>
                                <p>{{'Висота: від '.($product->height? $product->height.'мм':' - ')}}</p>
                            </div>
                            <div style="display: flex; margin: 20px 0;">
                                <h2 style="  white-space: pre;" >Ціна: </h2>
                                <h2 style=" color:#1E7DB2;">{{' від '.$product->price." грн"}}</h2>
                            </div>
                            <div class="order">
                                <div class="buy">
                                    <div class="open_pop_up">
                                        Замовити
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="product_photo_and_description_mobile">
                <img src="{{url($product->photo)}}" alt="" >
                <div class="guarantee">
                    <div class="column_guarantee">
                        <h2>Час Виготовлення:</h2>
                        <h2 class="usual">15 робочих днів</h2>
                    </div>
                    <div class="column_guarantee">
                        <h2>Гарантія:</h2>
                        <h2 class="usual">1 рік</h2>
                    </div>
                </div>

                <div class="buy">
                    <div class="open_pop_up">
                        Замовити
                    </div>
                </div>


                <div class="description">
                    <div style="display: flex; align-items:center; flex-direction: column; margin-bottom:20px;">
                        <h2 >{{"Ціна:  "}}</h2><hr><h2 style="display:inline; color:#1E7DB2;">{{" від ".$product->price." грн"}}</h2>
                    </div>
                    <h2>Характеристики:</h2>
                    <hr>
                    <div class="text">
                        <p>{{'Використане скло: '.($product->glass?  $product->glass:' - ')}}</p>
                        <p>{{'Фурнітура: '.($product->furniture? $product->furniture:' - ')}}</p>
                        <p>{{'Колір скла: '.($product->color_glass? $product->color_glass:' - ')}}</p>
                        <p>{{'Колір фурнітури: '.($product->color_furniture? $product->color_furniture:' - ')}}</p>
                        <p>{{'Ширина: від '.($product->width? $product->width.'мм':' - ')}}</p>
                        <p>{{'Висота: від '.($product->height? $product->height.'мм':' - ')}}</p>
                    </div>

                </div>
            </div>
            <div class="type">
                <h1>Тип скла</h1>
                <hr>
                <div class="my_row">
                    <div class="row_sklo">
                        <img src="{{url('img/type/type_sklo/Стекло-БЦ-флоат.jpg')}}" alt="">
                        <h2>Флоат</h2>
                    </div>

                    <div class="row_sklo">
                        <img src="{{url('img/type/type_sklo/Стекло-матовое.jpg')}}" alt="">
                        <h2>Матове</h2>
                    </div>
                    <div class="row_sklo">
                        <img src="{{url('img/type/type_sklo/Стекло-тонированное-бронза.jpg')}}" alt="">
                        <h2>Бронза</h2>
                    </div>
                    <div class="row_sklo">
                        <img src="{{url('img/type/type_sklo/Стекло-тонированное-графит-.jpg')}}" alt="">
                        <h2>Графіт</h2>
                    </div>
                    <div class="row_sklo">
                        <img src="{{url('img/type/type_sklo/Стекло-Crystalvision-оптивайт.jpg')}}" alt="">
                        <h2>Ультрапрозоре</h2>
                    </div>

                </div>
                <h1>Тип фурнітури</h1><hr>
                <div class="fur">
                    <div class="my_row">
                        <div class="row_fur">
                            <div class="photo">
                                <img src="{{url('img/type/type_fur/image%2019.png')}}" alt="">
                                <img src="{{url('img/type/type_fur/image%2018.png')}}" alt="">
                            </div>
                            <h2>Хром</h2>
                        </div>
                        <div class="row_fur">
                            <img src="{{url('img/type/type_fur/image%2015.png')}}" alt="">
                            <h2>Золото</h2>

                        </div>
                        <div class="row_fur">
                            <div class="photo">
                                <img src="{{url('img/type/type_fur/image%2016.png')}}" alt="">
                                <img src="{{url('img/type/type_fur/image%2017.png')}}" alt="">
                            </div>
                            <h2>Чорний</h2>

                        </div>
                    </div>
                </div>
                <div class="fur_medium">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{url('img/type/type_fur/image%2019.png')}}" alt="">
                            <h2>Хром</h2>
                        </div>
                        <div class="col-md-4">
                            <img src="{{url('img/type/type_fur/image%2015.png')}}" alt="">
                            <h2>Золото</h2>

                        </div>
                        <div class="col-md-4">
                            <img src="{{url('img/type/type_fur/image%2016.png')}}" alt="">
                            <h2>Чорний</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="type_mobile">
                <h1>Тип скла</h1>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <img src="{{url('img/type/type_sklo/Стекло-Crystalvision-оптивайт.jpg')}}" alt="">
                        <h2>Ультрапрозоре</h2>

                    </div>
                    <div class="col-6">
                        <img src="{{url('img/type/type_sklo/Стекло-матовое.jpg')}}" alt="">
                        <h2>Матове</h2>

                    </div>
                    <div class="col-6">
                        <img src="{{url('img/type/type_sklo/Стекло-тонированное-бронза.jpg')}}" alt="">
                        <h2>Бронза</h2>

                    </div>
                    <div class="col-6">
                        <img src="{{url('img/type/type_sklo/Стекло-тонированное-графит-.jpg')}}" alt="">
                        <h2>Графіт</h2>

                    </div>
                    <div class="col-3">

                    </div>
                    <div class="col-6">
                        <img src="{{url('img/type/type_sklo/Стекло-БЦ-флоат.jpg')}}" alt="">
                        <h2>Флоат</h2>

                    </div>
                    <div class="col-3">

                    </div>
                </div>
                <h1>Тип фурнітури</h1>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <img src="{{url('img/type/type_fur/image%2019.png')}}" alt="">
                        <h2>Хром</h2>
                    </div>
                    <div class="col-6">
                        <img src="{{url('img/type/type_fur/image%2016.png')}}" alt="">
                        <h2>Чорний</h2>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-6">
                        <img src="{{url('img/type/type_fur/image%2015.png')}}" alt="">
                        <h2>Золото</h2>

                    </div>

                    <div class="col-3"></div>
                </div>


            </div>
        </div>

    </section>







@endsection
@section('scripts')

    <script>
        const openPopUp = document.querySelectorAll('.open_pop_up');
        const popUp = document.getElementById('pop_up');
        for(var i=0; i<openPopUp.length; i++) {
            openPopUp[i].addEventListener('click', function (e) {
                e.preventDefault();
                popUp.classList.add('active');

            });
        }

        function closePop(name){
            const popUp = document.getElementById(name);
            popUp.classList.remove('active');
        }
    </script>
    <script>
        var modal = document.getElementById("modal");
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var close = document.getElementById("close");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
        }
        close.onclick=function(){
            modal.style.display="none";
        }
    </script>
@endsection
