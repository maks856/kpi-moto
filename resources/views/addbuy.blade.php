<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Соберу само</title>
    <link rel="stylesheet" href="./css/add.css">
    <link rel="stylesheet" href="./css/podverzhdenie.css">
</head>
<body>
<header class="header">
    <div class="wrapper">


        <div class="menu">
            <nav class="top-menu">
                <ul class="menu-main">
                    <li><a href="{{ route('users') }}"> Пользователи</a></li>
                    <li><a href="{{ route('moto') }}"> Мотоциклы </a></li>
                    <li><a href="{{ route('buy') }}"> Покупки </a></li>
                    <li><a href="{{ route('add') }}"> Добавление </a></li>
                </ul>
            </nav>
        </div>

    </div>
</header>
<br>
<div class="btn-group" style="width:100%">
    <button style="width:33.3%"><a href="{{ route('add') }}">Пользователя</a></button>
    <button style="width:33.3%"><a href="{{ route('addmoto') }}">Мотоцикла</a></button>
    <button style="width:33.3%"><a href="{{ route('add') }}">Заказа</a></button>
</div>
<br>
<div class="ribbon"></div>
<div class="login">
    <h1>Добавление заказа.</h1>
    <p>Введите, пожалуйста, данные.</p>
    <form action="{{route('appbuy')}}" method="get">
        <div class="input">
            <div class="blockinput">
                <i class="icon-envelope-alt"></i><input type="text" placeholder="Имя пользователя..." name="nameuser">
            </div>
            <div class="blockinput">
                <i class="icon-unlock"></i><input type="text" placeholder="Название мотоцикла..." name="namemotoo">
            </div>
            <div class="blockinput">
                <i class="icon-unlock"></i><input type="number" placeholder="Количество..." name="lengthh">
            </div>
        </div>
        <button>Login</button>
    </form>
</div>
<br>
<h6></h6>
</body>
</html>
