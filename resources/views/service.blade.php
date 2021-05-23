@extends('layouts.layout')
@section('title', 'Сервіс')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/service.css')}}">
@stop
@section('content')

<section class="service">
  <div class="container">
    <div class="row page-info">
      <div class="col-md-6 page-name">
        <h1>Сервіс</h1>
        <hr>
        <img src="./src/bike1.png" alt="Main Bike">
      </div>
      <div class="col-md-6">
        <div class="text">
          <div class="green-text">
            <p>Основна інформація</p>
          </div>
          <div class="description">
            <p>Наш Сервіс надає можливість всім бажающим замовити тюнінг, Ремонт а також взяти на тест-драйв наявні мотоцикли та передивитися портфоліо вже раніше зроблених мотоциклів</p>
          </div>
          <div class="details">
            <div class="oneLink">
              <img class="triangle" src="./src/triangle.svg" alt="triangle">
              <h3 class="heading">Посилання</h3>
            </div>
            <div class="oneLink">
              <img class="triangle" src="./src/triangle.svg" alt="triangle">
              <h3 class="heading">Посилання</h3>
            </div>
            <div class="oneLink">
              <img class="triangle" src="./src/triangle.svg" alt="triangle">
              <h3 class="heading">Посилання</h3>
            </div>
            <div class="oneLink">
              <img class="triangle" src="./src/triangle.svg" alt="triangle">
              <h3 class="heading">Посилання</h3>
            </div>
            <div class="button-view"><a href="/catalogue">Переглянути наші роботи</a></div>
          </div>
        </div>
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

<section>
  <div class="container">
    <div class="row serviceBlog">
      <div class="col-md-6 blogImg">
        <img src="src/modification.png" alt="modification">
      </div>
      <div class="col-md-6 inform">
        <h3 class="heading">Модифікація мотоцикла</h3>
        <div class="description">
          <p>Наш Сервіс надає можливість всім бажающим завомити тюнінг, Ремонт а також взяти на тест-драйв наявні мотоцикли та передивитися портфоліо вже раніше зроблених мотоциклів</p>
        </div>
        <div class="details">
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <p class="green-text2">ОСНОВНА ІНФОРМАЦІЯ</p>
        </div>
      </div>
    </div>
    <div class="row serviceBlog">
      <div class="col-md-6 blogImg">
        <img src="src/diagnostic.png" alt="diagnostic">
      </div>
      <div class="col-md-6 inform">
        <h3 class="heading">Обслуговування</h3>
        <div class="description">
          <p>Наш Сервіс надає можливість всім бажающим завомити тюнінг, Ремонт а також взяти на тест-драйв наявні мотоцикли та передивитися портфоліо вже раніше зроблених мотоциклів</p>
        </div>
        <div class="details">
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row serviceBlog">
      <div class="col-md-6 blogImg">
        <img src="src/details.png" alt="details">
      </div>
      <div class="col-md-6 inform">
        <h3 class="heading">Запчастини</h3>
        <div class="description">
          <p>Наш Сервіс надає можливість всім бажающим завомити тюнінг, Ремонт а також взяти на тест-драйв наявні мотоцикли та передивитися портфоліо вже раніше зроблених мотоциклів</p>
        </div>
        <div class="details">
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row serviceBlog">
      <div class="col-md-6 blogImg">
        <img src="src/construct.png" alt="construct">
      </div>
      <div class="col-md-6 inform">
        <h3 class="heading">Сборка мотоцикла</h3>
        <div class="description">
          <p>Наш Сервіс надає можливість всім бажающим завомити тюнінг, Ремонт а також взяти на тест-драйв наявні мотоцикли та передивитися портфоліо вже раніше зроблених мотоциклів</p>
        </div>
        <div class="details">
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Посилання</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="partners">
  <div class="container">
    <div class="row">
      <div class="col-md-3 logotype">
        <img src="src/yamaha.png" alt="yamaha logo">
      </div>
      <div class="col-md-3 logotype">
        <img src="src/bmw.png" alt="bmw logo">
      </div>
      <div class="col-md-3 logotype">
        <img src="src/suzuki.png" alt="suzuki logo">
      </div>
      <div class="col-md-3 logotype">
        <img src="src/honda.png" alt="honda logo">
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
