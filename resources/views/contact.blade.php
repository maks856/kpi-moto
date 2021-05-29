@extends('layouts.layout')
@section('title', 'Контакти')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/contactUs.css')}}">
@stop
@section('content')
    <section class="contactUs">
        <div class="container">
            <div class="row page-info">
                <div class="col-md-6 page-name">
                    <h1>Контакти</h1>
                    <hr>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <div class="green-text">
                            <p>Основна інформація</p>
                        </div>
                        <div class="description">
                            <p>на даній сторінці ви можете ознайомитись з інформацією з приводу як з нами звязатись та замовити послуги. із засобів звязку ми пропонуємо свої телефон, електронну пошту або ж особиста зустріч з командою за адресою сервісу.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row address">
                <div class="col-lg-7 col-md-7">
                    <img class="map" src="/src/map.png" alt="Map Address">
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="text">
                        <div class="heading">
                            <h1>Зв'язок з нами</h1>
                        </div>
                        <div class="description">
                            <p>способи зв’язку з нами, а саме: адреса, номер телефону й електронна пошта нашого сервісу</p>
                        </div>
                        <div class="detail-address">
                            <div class="info">
                                <img src="/src/mapPoint.svg" alt="Map Pointer">
                                <p>вул. Хрещатик  4а Київ,09241, UA</p>
                            </div>
                            <div class="info">
                                <img src="/src/phone.svg" alt="Phone">
                                <p>+380937713988</p>
                            </div>
                            <div class="info">
                                <img src="/src/mapPoint.svg" alt="Mail">
                                <p>mail@gmail.com</p>
                            </div>
                            <div class="social">
                                <a href="#"> <img src="/src/twitter.svg" alt="twitter"></a>
                                <a href="#"> <img src="/src/sanpchat.svg" alt="sanpchat"></a>
                                <a href="#"> <img src="/src/facebook.svg" alt="facebook"></a>
                                <a id="buy" href="#"> <img src="/src/instagram.svg" alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form class="row form" action="{{route('addcontacts')}}" method="get">
                <div class="col-md-6">
                    <div class="text">
                        <div class="heading">
                            <h1>Зв'язок з нами</h1>
                        </div>
                        <div class="description">
                            <p>задайте нам свої питання і найближчим часом ви отримаєте відповідь</p>
                        </div>
                    </div>
                    <input type="text" name="namee" placeholder="Повне ім'я">
                    <input class="email-input" type="email" name="emaill" placeholder="Ваш E-mail">
                    <textarea name="message" id="message" placeholder="Ваше повідомлення"></textarea>
                    <button class="button-view">Відправити</button>
                </div>
                <div class="col-md-6">
                    <img src="/src/bike1.png" alt="Main Bike">
                </div>
            </form>


        </div>
    </section>
@endsection
