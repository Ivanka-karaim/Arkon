@extends('app')
@section('title', 'Скляні конструкції | Послуги')
@section('content')
    <section class="way">
        <div class="container">
            <div class="way_flex">
                <a href="./"><h2>Головна</h2></a>
                <i class="fa-solid fa-arrow-right-long"></i>
                <a href="#"><h2>Послуги</h2></a>
            </div>

        </div>
    </section>
    <section class="services">
        <div class="container">
            <h1>Послуги</h1>
            <div class="block_services">
                <div class="photo_services">
                    <img src="img/services/tool.png" alt="">
                </div>
                <div class="text_services">
                    <h3>Бездоганний монтаж</h3>
                    <p>Фахівці монтажного відділення компанії ArKon мають багаторічний досвід роботи зі склом та повністю володіють специфікою монтажу, тому встановлюють вироби на будь-яких об'єктах «під ключ» із гарантією на всю продукцію та монтаж.</p>
                </div>

            </div>
            <div class="block_services">
                <div class="photo_services">
                    <img src="img/services/car.png" alt="">
                </div>
                <div class="text_services">
                    <h3>Бережна доставка</h3>
                    <p>Доставка відбувається у всі міста України. Доставляємо скляні вироби на транспорті обладнаному спеціальною системою для перевезення скла.</p>
                </div>

            </div>
            <div class="block_services">
                <div class="photo_services">
                    <img src="img/services/money.png" alt="">
                </div>
                <div class="text_services">
                    <h3>Зручна оплата</h3>
                    <p>Наш спеціаліст задасть вам питання для визначення ваших потреб та розрахунку вартості. Ви зможете вибрати відповідний варіант із кількох цінових пропозицій. Оплата приймається готівкою, банківськими картками для клієнтів, які користуються кешбеками, а також безготівковим способом.</p>
                </div>

            </div>


        </div>
    </section>

@endsection
