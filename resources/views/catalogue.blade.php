@extends('layouts.layout')
@section('title', 'Каталог')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/catalogue.css')}}">
@stop
@section('content')

<section class="catalogue">
        <div class="container">
            <div class="row page-info">
                <div class="col-md-6 page-name">
                    <h1 >Каталог </h1>
                    <hr>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <div class="green-text">
                            <p>коротко про Портфоліо</p>
                        </div>
                        <div class="description">
                            <p>Наша компанія працює вже більше ніж 100 років і завжди поновлює своє портфоліо. Тут ми демонструємо одні з наших найкращих робіт. Також ви можете придбати модель яка вам найбільше сподобалась.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row bike-sell">
                <div class="col-md-7 bike-sell-img">
                    <img src="./src/bikeSell1.jpeg" alt="Bike for Sell">
                </div>
                <div class="col-md-5">
                    <div class="text">
                        <div class="text">
                            <div class="green-text">
                                <p>коротко про Портфоліо</p>
                            </div>
                            <div class="heading">
                                <h1>Pod Merbi electric “A” class</h1>
                            </div>
                            <div class="description">
                                <p>Модель розроблена більше для молодшої аудиторії і призначена для залучення нових споживачів до бренду KPI-Moto. По-перше, екологічний дизайн LiveWire неодмінно сподобається прихильній до Eco-Friendly аудиторії.</p>
                            </div>
                        </div>
                        <ul class="product-info">
                            <li><img src="./src/motorcycle.svg" alt="Motorcycle"> <p>RX Feugiat 2000</p></li>
                            <li><img src="./src/sand-clock.svg" alt="Motorcycle"> <p>4-5 місяці</p></li>
                            <li><img src="./src/money.svg" alt="Motorcycle"> <p>$8,400</p></li>
                        </ul>
                        <a class="buy-button" href="/contact#buy">Купити зараз</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-block">
        <div class="container">
            <div class="row product-list">
            @foreach($data as $element)
                <div class="col-md-6 product-item">
                    <a href="{{route('prod')}}?id={{$element->id}}">
                        @php $var = base64_encode($element->img) @endphp
                        <img src="data:image/jpeg;base64, <?php echo $var?>" alt="latestBike1">
                        <div class="text">
                            <h4>{{$element->namemoto}}</h4>
                            <div class="price-block">
                                <p class="green-text price">{{$element->price}}$</p>
                                <p class="green-text detail">Деталі <span class="triangle">&#9660;</span></p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="container">
            <div class="text">
                <div class="green-text">
                    <p>Тюнінговий сервіс</p>
                </div>
                <div class="heading">
                    <h1>Зроби свій байк</h1>
                    <h1>Справді своїм</h1>
                </div>
                <div class="button-view"><a href="/catalogue">Переглянути наші роботи</a></div>
            </div>
        </div>
    </section>
@endsection
