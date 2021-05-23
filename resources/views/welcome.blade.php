@extends('layouts.layout')
@section('title', 'Головна')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/landing.css')}}">
@stop
@section('content')

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
    <section class="history">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text">
                        <div class="green-text">
                            <p>Історія</p>
                        </div>
                        <div class="heading">
                            <h3>Як це все починалось</h3>
                        </div>
                        <div class="description">
                            <p>Протягом першого десятиліття 20-го століття, один з двох найбільших УКРАЇНСЬКИХ виробників мотоциклів, щоб вижити об'єднаВСЯ під час КРИЗИ З НАЙКРАЩИМ ВУЗОМ КРАЇНИ. «KPI MOTO» також пережиВ період низького рівня контролю якості і конкуренції з боку японських виробників.
                            </p>
                            <br>
                            <p>Після початку Першої світової війни компанія «KPI MOTO» отримала перший офіційний військове замовлення - 500 мотоциклів були замовлені для армії ФРАНЦІЇ. У 1917 році Сполучені Штати вступили в Першу світову війну і мотоцикли початку замовляти і Армія США. Всього за час війни було замовлено більше 20 000 мотоциклів «KPI MOTO» для озброєння військ.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="historyImg" src="/src/backgroundHistory.png" alt="history">
                </div>
            </div>
        </div>
    </section>
    <section class="stats">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text">
                    <div class="num">
                        <h1>1906</h1>
                    </div>
                    <div class="description">
                        <p>Заснований</p>
                    </div>
                </div>
                <div class="col-md-3 text">
                    <div class="num">
                        <h1>256</h1>
                    </div>
                    <div class="description">
                        <p>Проектів</p>
                    </div>
                </div>
                <div class="col-md-3 text">
                    <div class="num">
                        <h1>128</h1>
                    </div>
                    <div class="description">
                        <p>Клієнтів</p>
                    </div>
                </div>
                <div class="col-md-3 text">
                    <div class="num">
                        <h1>16</h1>
                    </div>
                    <div class="description">
                        <p>Нагород</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="latest">
        <div class="container">
            <div class="text">
                <div class="green-text">
                    <p>Тюнінговий сервіс</p>
                </div>
                <div class="heading">
                    <h3>НАШІ ОСТАННІ РОБОТИ</h3>
                </div>
                <div class="description">
                    <p>наше порфтоліо робі славиться башатьма красивими роботами. Отож нижче ми демонструємо одні з найкращих наших робіт</p>
                 </div>
            </div>
            <div class="row bikes">
                <div class="col-md-6">
                    <a href="#">
                        <img src="/src/customBike3.jpg" alt="latestBike1">
                        <h4>Sud Mirbl Sind</h4>
                        <p class="green-text price">2500$</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="/src/customBike4.jpg" alt="latestBike1">
                        <h4>Sud Mirbl Sind</h4>
                        <p class="green-text price">2500$</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="/src/customBike8.jpg" alt="latestBike1">
                        <h4>Sud Mirbl Sind</h4>
                        <p class="green-text price">2500$</p>
                    </a>
                </div>
            </div>
            <div class="row bikes">
                <div class="col-md-3">
                    <a href="#">
                        <img src="/src/customBike9.jpg" alt="latestBike1">
                        <h4>Sud Mirbl Sind</h4>
                        <p class="green-text price">2500$</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <img src="/src/customBike5.jpg" alt="latestBike1">
                        <h4>Sud Mirbl Sind</h4>
                        <p class="green-text price">2500$</p>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#">
                        <img src="/src/customBike1.jpg" alt="latestBike1">
                        <h4>Sud Mirbl Sind</h4>
                        <p class="green-text price">2500$</p>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section class="dream">
        <div class="container">
            <div class="text">
                <div class="heading">
                    <h1>Давай зробимо</h1>
                    <h1>Байк Твоєї</h1>
                    <h1>Мрії</h1>
                </div>
                <div class="button-view"><a href="/catalogue">Переглянути наші роботи</a></div>
            </div>
        </div>
    </section>
@endsection
