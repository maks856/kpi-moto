<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Соберу само</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/personal.css">
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
<form method="get" action="{{route('searchm')}}" >
    <input type="text" placeholder="Введите название мотоцикла..." name="nam">
    <button type="submit"></button>
</form>
<br>
<br>
@yield('content');
</body>
</html>
