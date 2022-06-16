@extends('app')
@section('title', 'ArKon | Наші роботи')
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
                            <a class="big_photo" href="{{url($work->photos[0]->photo)}}">
                                <img class="photo_our_works" src="{{url($work->photos[0]->photo)}}"  alt="">
                            </a>
                            <a class="small_photo" href="{{url($work->photos[1]->photo)}}">
                                <img class="photo_this" src="{{url($work->photos[1]->photo)}}"  alt="">
                            </a>
                            <a  class="small_photo two" href="{{url($work->photos[2]->photo)}}">
                                <img class="photo_this"  src="{{url($work->photos[2]->photo)}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <div class="our_work_text">
                            <h1>{{$work->name}}</h1>
                            <div class="text">
                                <div class="p">{{'Розмір: '.$work->size}}</div>
                                <div class="p">{{$work->description}}</div>
                                <a href="{{route('product',  $work->product->id)}}" class="a">{{'Тип: '.$work->product->name}}</a>
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
                    <a class="big_photo" href="{{url($work->photos[0]->photo)}}">
                        <img class="photo_our_works" src="{{url($work->photos[0]->photo)}}"  alt="">
                    </a>
                    <a class="small_photo" href="{{url($work->photos[1]->photo)}}">
                        <img class="photo_this" src="{{url($work->photos[1]->photo)}}"  alt="">
                    </a>
                    <a  class="small_photo two" href="{{url($work->photos[2]->photo)}}">
                        <img class="photo_this"  src="{{url($work->photos[2]->photo)}}" alt="">
                    </a>
                </div>
                <div class="our_work_text">
                    <h1>{{$work->name}}</h1>
                    <div class="text">
                        <div class="p">{{'Розмір: '.$work->size}}</div>
                        <div class="p">{{$work->description}}</div>
                        <a href="{{route('product',  $work->product->id)}}" class="a">{{'Тип: '.$work->product->name}}</a>
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
                                        <a href="{{route('product', $work->product->id)}}" class="a">{{'Тип: '.$work->product->name}}</a>
                                    </div>
                                    <div class="price_data">
                                        <h2>{{'Ціна: '.$work->price.' грн'}}</h2>
                                        <h2 class="right">{{'Дата: '.$work->date}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <div class="general_photo">

                                    <a class="small_photo" href="{{url($work->photos[1]->photo)}}">
                                        <img class="photo_this" src="{{url($work->photos[1]->photo)}}"  alt="">
                                    </a>
                                    <a  class="small_photo two" href="{{url($work->photos[2]->photo)}}">
                                        <img class="photo_this"  src="{{url($work->photos[2]->photo)}}" alt="">
                                    </a>
                                    <a class="big_photo" href="{{url($work->photos[0]->photo)}}">
                                        <img class="photo_our_works" src="{{url($work->photos[0]->photo)}}"  alt="">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="our_work_mobile">
                        <div class="general_photo">
                            <a class="big_photo" href="{{url($work->photos[0]->photo)}}">
                                <img class="photo_our_works" src="{{url($work->photos[0]->photo)}}"  alt="">
                            </a>
                            <a class="small_photo" href="{{url($work->photos[1]->photo)}}">
                                <img class="photo_this" src="{{url($work->photos[1]->photo)}}"  alt="">
                            </a>
                            <a  class="small_photo two" href="{{url($work->photos[2]->photo)}}">
                                <img class="photo_this"  src="{{url($work->photos[2]->photo)}}" alt="">
                            </a>
                        </div>
                        <div class="our_work_text">
                            <h1>{{$work->name}}</h1>
                            <div class="text">
                                <div class="p">{{'Розмір: '.$work->size}}</div>
                                <div class="p">{{$work->description}}</div>
                                <a href="{{route('product',  $work->product->id)}}" class="a">{{'Тип: '.$work->product->name}}</a>
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
    <div class="more" id="more">
        <div class="more_block">
            <i class="fa-solid fa-arrows-rotate"></i>
            Більше
        </div>
    </div>


@endsection


