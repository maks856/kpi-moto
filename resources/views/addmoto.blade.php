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
    <button style="width:33.3%"><a href="{{ route('addbuy') }}}">Заказа</a></button>
</div>
<br>
<div class="ribbon"></div>
<div class="login">
    <h1>Добавление мотоцикла.</h1>
    <p>Введите, пожалуйста, данные.</p>
    <form action="{{route('appmoto')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="input">
            <div class="blockinput">
                <i class="icon-envelope-alt"></i><input type="mail" placeholder="Название мотоцикла..." name="namee">
            </div>
            <div class="blockinput">
                <i class="icon-unlock"></i><input type="number" placeholder="Количество..." name="lengthh">
            </div>
            <div class="blockinput">
                <i class="icon-unlock"></i><input type="number" placeholder="Цена..." name="pricee">
            </div>
            <div class="blockinput">
                <i class="icon-unlock"></i><input type="file" name="image" placeholder="Загрузите картинку..." >
            </div>
        </div>
        <button>Добавить</button>
    </form>
</div>
<br>
<h6></h6>
</body>
</html>
