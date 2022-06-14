@extends('app')
@section('title', 'ArKon | Каталог')
@section('content')
    <section class="way">
        <div class="container">
            <div class="way_flex">
                <a href="./"><h2>Головна</h2></a>
                <i class="fa-solid fa-arrow-right-long"></i>
                <a href="#"><h2>Каталог</h2></a>
            </div>

        </div>
    </section>

    <section class="catalog_lend">
        <div class="container">
            <h1>Каталог</h1>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="{{route('products', $category->id)}}" class="block_catalog">
                        <img class="photo" src="{{url($category->photo)}}" alt="">
                        <div class="block_text_catalog">
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
@endsection
