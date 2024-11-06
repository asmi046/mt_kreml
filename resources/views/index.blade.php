@extends('layouts.all')

@php
    $title = "Кремлёвская Ёлка автобусный тур из Курска - МирТуризма 46";
    $description = "Кремлёвская Ёлка автобусный тур из Курска - МирТуризма 46";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="banner_video">
        <video autoplay muted loop class="_video">
            <source src="{{ asset('img/video_bg_2.mp4') }}" type="video/mp4">
        </video>
        <div class="shadow"></div>

        <x-header></x-header>


            <div class="container left_text">
                <div class="bnr_text">
                    <h1>Новогодний тур на <br>«Кремлёвскую Ёлку» <br> в Москву</h1>
                    <p class="subtext">Приглашаем Вас в Новогодний тур в Москву! Вы посетите незабываемое мероприятие «Кремлёвскую Ёлку🎄» – самое главное Новогоднее представление в России и заветная мечта для миллионов мальчишек и девчонок!</p>
                    <br>
                    <br>
                    <div class="btn_wrapper">
                        <a class="button" href="#showModal">Узнать подробности</a>
                        <a class="button button_icon yakor" href="#in_tur"><i class="rub_icon"></i><span>Купить тур</span></a>
                    </div>
                </div>
                <div class="dop_img">
                    <div class="img_wrap img_1">
                        <img src="{{ asset('img/bn_present/4.jpg') }}" alt="">
                    </div>
                    <div class="img_wrap img_2">
                        <img src="{{ asset('img/bn_present/2.jpg') }}" alt="">
                    </div>
                    <div class="img_wrap img_3">
                        <img src="{{ asset('img/bn_present/3.jpg') }}" alt="">
                    </div>
                    <div class="img_wrap img_4">
                        <img src="{{ asset('img/bn_present/1.jpg') }}" alt="">
                    </div>

                    <div class="img_wrap img_5">
                        <img src="{{ asset('img/bn_present/5.webp') }}" alt="">
                    </div>
                    <div class="img_wrap img_6">
                        <img src="{{ asset('img/bn_present/6.jpg') }}" alt="">
                    </div>
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
                        <h2>Дорогие друзья! <br>Приглашаем Вас в Новогодний тур в Москву! </h2>
                        <p>Вы посетите незабываемое мероприятие <strong>«Кремлёвскую Ёлку🎄»</strong> – самое главное Новогоднее представление в России и заветная мечта для миллионов мальчишек и девчонок! Побывать здесь – означает убедиться в том, что Дед Мороз существует, что он настоящий и что сказка это не вымысел, а реальность!

                        </p>
                        <x-persons></x-persons>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location" class="location_section">
        <div class="container">
            <h2>Лучшие моменты <br>представления</h2>
            <x-moments></x-moments>
        </div>
    </section>

    <section id="program" class="program_section central_section">
        <div class="container">
            <h2>Ознакомьтесь с<br>программой тура «Кремлёвская Ёлка»</h2>
            {{-- <a target="_blanck" class="download_btn" href="{{ asset('program/spb_2025.pdf')}}"><span>Скачать программу для <br>ознакомления в формате PDF</span></a> --}}
            <x-program></x-program>
        </div>
    </section>

    <section id="location" class="location_section">
        <div class="container">
            <h2>Лучшие локации <br>Москвы</h2>
            <x-locations></x-locations>
        </div>
    </section>

    <section id="philosophy" class="program_section central_section">
        <div class="container">
            <x-philosophy></x-philosophy>
        </div>
    </section>


    <section id="in_tur" class="in_tur">
        <div class="container text_styles">
            <div class="wrapper" id="price_app">
                <h2>Купить тур:</h2>

                <div class="pay_wrapper">
                    <tour-price title="Кремлевская ёлка 2025" img="{{asset('img/bn_present/4.jpg')}}"  :prices="{{json_encode([["price" => 9000, "comment" => "Цена для детей"],["price" => 8500, "comment" => "Цена для взрослых"]])}}"></tour-price>
                </div>

                <h2>В цену тура входит:</h2>
                <ul>
                    <li>Билеты на <strong>Кремлёвскую Ёлку 🎄</strong></li>
                    <li>Cладкий подарок детям 🎁</li>
                    <li>Проезд <strong>на комфортабельном автобусе 🚌</strong>  </li>
                    <li>Траснпортное обслуживание (автобус) <strong>по Москве</strong></li>
                    <li>Новогодняя <strong>экскурсия</strong> по столице с гидом 🎤</li>
                </ul>
            </div>

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

