@extends('layouts.all')

@php
    $title = "Кремлёвская Ёлка автобусный тур из Курска - МирТуризма 46";
    $description = "Кремлёвская Ёлка автобусный тур из Курска - МирТуризма 46";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-header></x-header>

    <section class="banner">
        <div class="bnr_img">
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="bnr_text">
                <h1>Новогодний тур на <br>«Кремлёвскую Ёлку» <br> в Москву</h1>
                <p class="subtext">Приглашаем Вас в Новогодний тур в Москву! Вы посетите незабываемое мероприятие «Кремлёвскую Ёлку🎄» – самое главное Новогоднее представление в России и заветная мечта для миллионов мальчишек и девчонок!</p>
                {{-- <x-cerecter></x-cerecter> --}}
                <a class="button" href="#showModal">Узнать подробности</a>
            </div>
        </div>
    </section>

    <section id="about" class="about_section">
        <div class="container">
            <div class="about">
                <div class="photo">
                    <div class="col">
                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp.webp') }}" alt="">
                        </div>
                        <div class="photo_wrap photo_smile">
                            <img src="{{ asset('img/dp/dp1.webp') }}" alt="">
                        </div>
                    </div>

                    <div class="col">
                        <div class="photo_wrap photo_smile">
                            <img src="{{ asset('img/dp/dp2.webp') }}" alt="">
                        </div>

                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp3.webp') }}" alt="">
                        </div>
                    </div>

                    <div class="col col_one">
                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp4.webp') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="text">
                    <div class="inner">
                        <h2>Экскурсионный тур в Санкт-Петербург для школьников по  целевой программе</h2>
                        <p><strong class="orange">Социальная программа стимулирования развития детского туризма.</strong><br>  Учащимся школ Курской области предоставляется возможность осуществить путешествие в Санкт-Петербург по <strong>субсидированной специальной цене</strong> в период <strong>ВЕСНА-ЛЕТО 2025</strong></p>
                        <x-persons></x-persons>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location" class="location_section">
        <div class="container">
            <h2>Локации которые <br>Вы посетите</h2>
            <x-locations></x-locations>
        </div>
    </section>

    <section id="program" class="program_section central_section">
        <div class="container">
            <h2>Ознакомьтесь с<br>программой тура Санкт-Петербург</h2>
            <a target="_blanck" class="download_btn" href="{{ asset('program/spb_2025.pdf')}}"><span>Скачать программу для <br>ознакомления в формате PDF</span></a>
            <x-program></x-program>
        </div>
    </section>

    <section class="in_tur">
        <div class="container text_styles">
            <h2>В цену тура входит</h2>
            <ul>
                <li>Проживание в отеле</li>
                <li><strong>2 завтрака, 3 обеда</strong></li>
                <li><strong>Экскурсия на выбор Петергоф или Екатерининский дворец</strong></li>
                <li>Посещение на выбор <strong>Эрмитаж или Юсуповский дворец или Русский музей</strong></li>
                <li><strong>Теплоход. Экскурсия по рекам и каналам.</strong></li>
                <li><strong>Экскурсия в Кронштадт</strong></li>
                <li>Экскурсии по программе</li>
                <li>Услуги гида</li>
                <li>Транспортное обслуживание в Санкт-Петербурге</li>
            </ul>
        </div>
    </section>

    <section id="contacts" section="contacts_section">
        <div class="container">
            <div class="contacts_blk">
                <x-map.map-in-page></x-map.map-in-page>
                <div class="text">
                    <h2>Свяжитесь с нами любым удобным способом:</h2>
                    <a class="phone" href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
                    <a class="email" href="mailto:{{ phone_format(config('contacts.email')) }}">{{ config('contacts.email') }}</a>
                    <p>{{ config('contacts.adress') }}</p>

                    <x-social-net></x-social-net>
                </div>
            </div>
        </div>
    </section>

@endsection

