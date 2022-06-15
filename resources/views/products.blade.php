@extends('app')
@section('title', "ArKon | $category->name")
@section('content')
    <section class="way">
        <div class="container">
            <div class="way_flex">
                <a href="{{route('general')}}"><h2>Головна</h2></a>
                <i class="fa-solid fa-arrow-right-long"></i>
                <a href="{{route('catalog')}}"><h2>Каталог</h2></a>
                <i class="fa-solid fa-arrow-right-long"></i>
                <a href="#"><h2>{{$category->name}}</h2></a>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <h1>{{$category->name}}</h1>
            @if($category->all_description)
            <p>{{$category->all_description}}</p>
            @else
                <p>{{$category->description}}</p>
            @endif
            @if($category->name=='Фурнітура для скла')
                <div class="fur_download">
                <h3 style="text-align:center">Натиснувши кнопку нижче ви можете скачати файл з цінами фурнітури на нашому сайті</h3><br>
            <div class="download">
                <a download href="{{url('files/ArKon Прайс фурнітури.pdf')}}">Скачати</a>
            </div>
                </div>
            @else
            <div class="row">
                @forelse($products as $product)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="block_product">
                        <img class="photo" src="{{url($product->photo)}}" alt="">
                        <div class="block_text_product_with_button">
                            <div class="block_text_product">
                                <h2 class="product_name">{{$product->name}}</h2>
                                <h2 class="price">{{'від '.$product->price.'грн'}}</h2>
                            </div>
                            <a href="{{route('product', $product->id)}}">
                                <h2>Детальніше</h2>
                            </a>

                        </div>
                    </div>
                </div>
                @empty
                    <div class="fur_download">
                        <h3>На даний момент на сайті немає інформації по даному товару, зателефонуйте нам для детальнішої інформації</h3>
                        <div class="download">
                            <a href="tel:+380685059650">Зателефонувати</a>
                        </div>
                    </div>
                @endforelse
            </div>
            @endif

        </div>
    </section>

@endsection
