<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Соберу само</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/add.css">
</head>
<body>



<br>
<div class="ribbon"></div>
<div class="login">
    <h1>Обновление данных пользоваетля.</h1>
    <p>Введите, пожалуйста, данные.</p>
    <form action="{{ route('update') }}" method="get">
        <div class="input">
            <input type="hidden"  name="idd" value="{{$_GET['id']}}">
            <div class="blockinput">
                <i class="icon-envelope-alt"></i><input type="mail" placeholder="Електронная почта..." name="emaill">
            </div>
            <div class="blockinput">
                <i class="icon-unlock"></i><input type="text" placeholder="Имя и фамилия..." name="namee">
            </div>
        </div>
        <button>Login</button>
    </form>
</div>
<br>


</body>
</html>
