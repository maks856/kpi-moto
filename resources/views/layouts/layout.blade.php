<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    @yield('css')
    <link rel="shortcut icon" href="./src/favicon.ico" type="image/x-icon">
  <link rel="icon" href="./src/favicon.ico" type="image/x-icon">

    <title>KPI Moto - @yield('title')</title>
</head>
<body>
    <header id="header">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-3 col-sm-8 col-8">
                    <a href="/"> <img class="logo" src="/src/logo.png" alt="logo"></a>
                </div>
                <div class="col-md-9 col-sm-4 col-4">
                    <nav>
                        <ul class="links">
                            <li> <a href="/">Головна</a></li>
                            <li> <a href="/catalogue">Каталог</a></li>
                            <li> <a href="/service">Сервіс</a></li>
                            <li> <a href="/about">Про нас</a></li>
                            <li> <a href="/contact">Контакти</a></li>
                        </ul>
                        <span class="menu" onclick="openMenu()" id="menu">
                            <span></span>
                            <span id="hover-line"></span>
                            <span></span>
                        </span>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="hamburger" id="ham">
        <div class="close"  onclick="closeMenu()"><div id="first"></div><div id="second"></div></div>
        <ul class="links">
            <li> <a class="active" href="/">Головна</a></li>
            <li> <a href="/catalogue">Каталог</a></li>
            <li> <a href="/service">Сервіс</a></li>
            <li> <a href="/about">Про нас</a></li>
            <li> <a href="/contact">Контакти</a></li>
        </ul>
    </div>

    @yield('content')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 short-about">
                    <img class="logo" src="/src/logo.png" alt="logo">
                    <p>Український сервіс ремонту і продажу мотобайків</p>
                    <div class="social">
                        <a href="#"> <img src="/src/twitter.svg" alt="twitter"></a>
                        <a href="#"> <img src="/src/sanpchat.svg" alt="sanpchat"></a>
                        <a href="#"> <img src="/src/facebook.svg" alt="facebook"></a>
                        <a href="#"> <img src="/src/instagram.svg" alt="instagram"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 contact-footer">
                    <h3 class="heading">Зв'язок з нами</h3>
                    <p>вул. Хрещатик 4а</p>
                    <p>Київ, 09241, UA</p>
                    <p>+38925125112</p>
                    <p>mail@gmail.com</p>
                </div>
                <div class="col-lg-2 col-md-6 links-footer">
                    <h3 class="heading">Посилання</h3>
                    <ul class="links">
                        <li><a href="/">Головна</a></li>
                        <li><a href="/catalogue">Портфоліо</a></li>
                        <li><a href="/service">Сервіс</a></li>
                        <li><a href="/about">Про нас</a></li>
                        <li><a href="/contact">Контакти</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 subscribe">
                    <h3 class="heading">Підписатись на новини</h3>
                    <input type="email" placeholder="Ваш email...">
                    <button class="button-view"> Підписатись</button>
                </div>
            </div>
        </div>
    </footer>
    <section class="copyright">
        <hr>
        <p>Copyright © 2021 Bike Modification | Powered by Bike Modification</p>
    </section>
    <script src="/js/script.js" ></script>
    </body>
</html>
