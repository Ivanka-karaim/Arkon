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
        @include('works')
    </div>
    <div class="more" id="more">
        <div class="more_block">
            <i class="fa-solid fa-arrows-rotate"></i>
            Більше
        </div>
    </div>


@endsection


