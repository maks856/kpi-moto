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
              <h3 class="heading">Швидко</h3>
            </div>
            <div class="oneLink">
              <img class="triangle" src="./src/triangle.svg" alt="triangle">
              <h3 class="heading">Якісно</h3>
            </div>
            <div class="oneLink">
              <img class="triangle" src="./src/triangle.svg" alt="triangle">
              <h3 class="heading">Зручно</h3>
            </div>
            <div class="oneLink">
              <img class="triangle" src="./src/triangle.svg" alt="triangle">
              <h3 class="heading">Приємно</h3>
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
          <p>Сервіс надає можливість всім бажаючим власникам байків зробити свого підлеглого ще потужнішим та витонченішим для більшого ефекту справення незабутнього першого враження.</p>
        </div>
        <div class="details">
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Тюнінг</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Ремонт</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Тест-драйв</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Незабутні емоції</p>
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
          <p>Приємні посмішки та професійне ставлення наших механіків змусять вас не залишатись осторонь та не відмовлятись від обслуговування вашого красеня саме в нашому сервісі. Так як клієнт для нас - все.</p>
        </div>
        <div class="details">
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Привітний сервіс</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Професіональний підхід до роботи</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Гуманне ставлення до клієнтів</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Приємні враження</p>
          </div>
            <p class="green-text2">ОСНОВНА ІНФОРМАЦІЯ</p>
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
          <p>Співпраця з гучними назвами брендів дає можливість легкого конкурування з іншими сервісами, а підхід до роботи і зовсім перетворює нашу справу у безконкурентну. Вважаєш по-іншому? Тоді приходь особисто та переконайся на власні очі.</p>
        </div>
        <div class="details">
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Оригінальні запчастини</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Постачальники запчастин світових гігантів</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Професійний підхід</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Вдячні клієнти</p>
          </div>
            <p class="green-text2">ОСНОВНА ІНФОРМАЦІЯ</p>
        </div>
      </div>
    </div>
    <div class="row serviceBlog">
      <div class="col-md-6 blogImg">
        <img src="src/construct.png" alt="construct">
      </div>
      <div class="col-md-6 inform">
        <h3 class="heading">Констуювання мотоцикла</h3>
        <div class="description">
          <p>Головною перевагою нашого сервісу є можливість клієнта самому скласти свій байк комбінуючи сильні сторони та запчастини всіма нами відомих виробників.</p>
        </div>
        <div class="details">
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Втілення бажань у мрію</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Поєднання краси з потужністю</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Підбір кожної запчастини під смак клієнта</p>
          </div>
          <div class="oneLink">
            <img class="triangle" src="./src/triangle.svg" alt="triangle">
            <p>Незрівнянний результат</p>
          </div>
            <p class="green-text2">ОСНОВНА ІНФОРМАЦІЯ</p>
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
