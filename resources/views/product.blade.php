@extends('layouts.layout')
@section('title', 'Каталог')
@section('css')
<link rel="stylesheet" href="{{ asset('css/product.css')}}">
@stop
@section('content')


<section class="product">
    <div class="container">
        <div class="row page-info">
            <div class="col-md-6 page-name">
                <h1 >{{$motoos->namemoto}}</h1>
                <hr>
            </div>
            <div class="col-md-6">
                <div class="text">
                    <div class="green-text">
                        <p>Коротко про Товар</p>
                    </div>
                    <div class="description">
                        <p>{{$motoos->short}}</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row bike-sell">
            <div class="col-md-7 bike-sell-img">
                @php $var = base64_encode($motoos->img) @endphp
                <img src="data:image/jpeg;base64, <?php echo $var?>" alt="Bike for Sell">
            </div>
            <div class="col-md-5">
                <div class="text">
                    <div class="text">
                        <div class="heading">
                            <h1>{{$motoos->namemoto}}</h1>
                        </div>
                        <div class="description">
                            <p>{{$motoos->description}}</p>
                        </div>
                    </div>
                    <ul class="product-info">
                        <li><img src="./src/motorcycle.svg" alt="Motorcycle"> <p>{{$motoos->namemoto}}</p></li>
                        <li><img src="./src/sand-clock.svg" alt="Motorcycle"> <p>4-5 місяці</p></li>
                        <li><img src="./src/money.svg" alt="Motorcycle"> <p>${{$motoos->price}}</p></li>
                    </ul>
                    <a class="buy-button" href="#buy">Купити зараз</a>
                </div>
            </div>
        </div>

        <form id="buy" class="row form" action="{{route('addcontacts')}}" method="get">
            <div class="col-md-6">
                <div class="text">
                    <div class="heading">
                        <br><br><br>
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
