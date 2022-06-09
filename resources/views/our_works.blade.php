@extends('app')
@section('title', 'Скляні конструкції | Наші роботи')
@section('content')
    <section class="way section">
        <div class="container">
            <div class="way_flex">
                <a href="{{route('general')}}"><h2>Головна</h2></a>
                <i class="fa-solid fa-arrow-right-long"></i>
                <a href="#"><h2>Наші роботи</h2></a>
            </div>
            <h1>Наші роботи</h1>

        </div>
    </section>
    <div id="logar">
    @foreach($works as $key=>$work)
        @if($key%2==0)
    <section class="section">
        <div class="container">
            <div class="our_work_1">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <div class="general_photo">
                            <img class="photo_our_works" src="{{url($work->photos[0]->photo)}}" onclick="open_photo({{$work}}, 1)"  alt="">
                            <div class="photos">
                                <img src="{{url($work->photos[1]->photo)}}" onclick="open_photo({{$work}}, 2)" alt="">
                                <img src="{{url($work->photos[2]->photo)}}" onclick="open_photo({{$work}}, 3)" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <div class="our_work_text">
                            <h1>{{$work->name}}</h1>
                            <div class="text">
                                <div class="p">{{'Розмір: '.$work->size}}</div>
                                <div class="p">{{$work->description}}</div>
                                <a href="{{route('product', [$work->product->category->id, $work->product->id])}}" class="a">{{'Тип: '.$work->product->name}}</a>
                            </div>
                            <div class="price_data">
                                <h2>{{'Ціна: '.$work->price.' грн'}}</h2>
                                <h2 class="right">{{'Дата: '.$work->date}}</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="our_work_mobile">
                <div class="general_photo">
                    <img class="photo_our_works" src="{{url($work->photos[0]->photo)}}"  alt="">
                    <div class="photos">
                        <img src="{{url($work->photos[1]->photo)}}" alt="">
                        <img src="{{url($work->photos[2]->photo)}}" alt="">
                    </div>
                </div>
                <div class="our_work_text">
                    <h1>{{$work->name}}</h1>
                    <div class="text">
                        <div class="p">{{'Розмір: '.$work->size}}</div>
                        <div class="p">{{$work->description}}</div>
                        <a href="{{route('product', [$work->product->category->id, $work->product->id])}}" class="a">{{'Тип: '.$work->product->name}}</a>
                    </div>
                    <div class="price_data">
                        <h2>{{'Ціна: '.$work->price.' грн'}}</h2>
                        <h2 class="right">{{'Дата: '.$work->date}}</h2>
                    </div>
                </div>

            </div>


        </div>
    </section>
        @else
            <section class="section">
                <div class="container">
                    <div class="our_work_2">
                        <div class="row">
                            <div class="col-md-6 col-lg-7">
                                <div class="our_work_text">
                                    <h1>{{$work->name}}</h1>
                                    <div class="text">
                                        <div class="p">{{'Розмір: '.$work->size}}</div>
                                        <div class="p">{{$work->description}}</div>
                                        <a href="{{route('product', [$work->product->category->id, $work->product->id])}}" class="a">{{'Тип: '.$work->product->name}}</a>
                                    </div>
                                    <div class="price_data">
                                        <h2>{{'Ціна: '.$work->price.' грн'}}</h2>
                                        <h2 class="right">{{'Дата: '.$work->date}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <div class="general_photo">
                                    <div class="photos">
                                        <img src="{{url($work->photos[0]->photo)}}" alt="">
                                        <img src="{{url($work->photos[1]->photo)}}" alt="">
                                    </div>
                                    <img class="photo_our_works" src="{{url($work->photos[2]->photo)}}"  alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="our_work_mobile">
                        <div class="general_photo">
                            <img class="photo_our_works" src="{{url($work->photos[0]->photo)}}"  alt="">
                            <div class="photos">
                                <img src="{{url($work->photos[1]->photo)}}" alt="">
                                <img src="{{url($work->photos[2]->photo)}}" alt="">
                            </div>
                        </div>
                        <div class="our_work_text">
                            <h1>{{$work->name}}</h1>
                            <div class="text">
                                <div class="p">{{'Розмір: '.$work->size}}</div>
                                <div class="p">{{$work->description}}</div>
                                <a href="{{route('product', [$work->product->category->id, $work->product->id])}}" class="a">{{'Тип: '.$work->product->name}}</a>
                            </div>
                            <div class="price_data">
                                <h2>{{'Ціна: '.$work->price.' грн'}}</h2>
                                <h2 class="right">{{'Дата: '.$work->date}}</h2>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

    @endif
    @endforeach
    </div>
    @isset($count)
        <p>Немає більше товарів</p>
        @else
    <div class="more" id="more">
        <div class="more_block">
            <i class="fa-solid fa-arrows-rotate"></i>
            Більше
        </div>
    </div>
    @endif

        <div class="pop_up" id="modal">
            <div class="pop_up_container cont">
            <span class="close" onclick="close_my()">&#10006</span>
            <div class="swiper_our">
                <div class="photo_body swiper-wrapper">
                    <div class="swiper-slide ">

                        <div class="swiper_our">
                        <img class="modal-content" id="img01">
                        </div>
                    </div>


                    <div class="swiper-slide ">

                        <div class="swiper_our">
                        <img class="modal-content" id="img02">
                    </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="swiper_our">
                        <img class="modal-content" id="img03">
                    </div>
                    </div>

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

@endsection
@section('scripts')
    <script>
        // var modal = document.getElementById("modal");
        // var img = document.querySelectorAll(".myImg");
        // var modalImg = document.getElementById("img01");
        //
        // var close = document.getElementById("close");
        // for(i=0; i<img.length; i++) {
        //     img[i].onclick = function () {
        //         modal.style.display = "block";
        //         modalImg.src = this.src;
        //     }
        // }
        function close_my() {
            console.log(7486);
            var modal = document.getElementById("modal");
            modal.style.display = "none";
        }
        function open_photo(work, i){
            var modal = document.getElementById("modal");
            var modalImg1 = document.getElementById("img01");
            var modalImg2 = document.getElementById("img02");
            var modalImg3 = document.getElementById("img03");
            modal.style.display = "block";
            modalImg1.src = work.photos[0].photo;
            modalImg2.src = work.photos[1].photo;
            modalImg3.src = work.photos[2].photo;

        }
    </script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var inProcess = false;
            var num = 4;
            const more = document.getElementById('more');


            // $(window).scroll(function() {
            // if($(window).scrollTop() + $(window).height() >= $(document).height() && !inProcess) {
            more.addEventListener('click', function (e) {
                $.ajax({
                    url: './our_works/'+num,
                    method: 'GET',
                    beforeSend: function () {

                    },
                    success: function (response) {
                        if(!response && !inProcess){
                            $('#logar').append("<p style='text-align:center'>Немає більше товарів</p>");

                            inProcess = true;
                        }
                        else {
                            $('#logar').append(response);

                        }
                    }
                }).done(function (data) {
                    num += 4;
                });

            })
            // });
        });

    </script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        new Swiper(".swiper_our", {
            spaceBetween: 20,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            // loop:true,
            breakpoints: {
                768:{
                    slidesPerView: 1.05,
                    spaceBetween: 20,
                },
                576:{
                    slidesPerView: 1.05,
                    spaceBetween: 15,
                },
                992:{
                    slidesPerView: 1.05,
                    spaceBetween: 30,
                }
            }
        })



    </script>
@endsection

