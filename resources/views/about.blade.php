@extends('layouts.layout')
@section('title', 'Про нас')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css')}}">
@stop
@section('content')

<section class="aboutUs">
        <div class="container">
            <div class="row page-info">
                <div class="col-md-6 page-name">
                    <h1 >Про нас </h1>
                    <hr>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <div class="green-text">
                            <p>Основна інформація</p>
                        </div>
                        <div class="description">
                            <p>Техніка YAMAHA – це завжди неймовірний драйв, яскраві емоції та нестримна швидкість. Але найголовніше – це японська якість, висока технологічність та надійність. <br>
                                У «Крі мото» можна купити оригінальну техніку YAMAHA: мотоцикли, скутери, квадроцикли, гідроцикли, катери, аксесуари і не тільки. Також ми продаємо якісне мотоекіпірування українського виробництва. А наш офіційний сервісний центр надає комплексне обслуговування будь-якої техніки YAMAHA.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row founder-info">
                <div class="col-md-6">
                    <img class="founder" src="./src/founder.png" alt="Founder">
                </div>
                <div class="col-md-5">
                    <div class="text">
                        <div class="green-text">
                            <p>Наш засновник</p>
                        </div>
                        <div class="heading">
                            <h4>Ентоні Мейвейзер</h4>
                        </div>
                        <div class="description">
                            <p>З 1899 до 1902 року е .мейвейзер був співвласником «Детройтської автомобільної компанії», але через розбіжність у поглядах з іншими власниками фірми пішов з неї й 1906 року заснував компанію «Kpi Moto»
                                <br> <br>
                                ось що розповідає зановник про перший мотоцикл:
                                <br> <br>
                                Вона виробляла багато шуму і лякала коней, я не міг зупинитися ніде у місті без того, щоб відразу навколо мого візка не збирався натовп народу. Якщо я залишав його одного, хоча б на хвилину, зараз же знаходився цікавий, який пробував на нім їздити. Врешті-решт я почав носити при собі ланцюг і повинен був прив'язувати візок до ліхтарного стовпа, якщо залишав його деінде</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video">
        <iframe src="https://www.youtube.com/embed/unp3hXfGjts?autoplay=1&mute=1"></iframe>
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
                    <img class="historyImg" src="./src/backgroundHistory.png" alt="history">
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
