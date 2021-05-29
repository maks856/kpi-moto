<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>LogIn Form</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>


      <link rel="stylesheet" href="css/stylee.css">
<style>
    html {
        background: url(https://w-dog.ru/wallpapers/0/10/493570065134480/suzuki-gs850-motocikl-zakat-doroga.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        overflow: hidden;
    }

    img{
        display: block;
        margin: auto;
        width: 100%;
        height: auto;
    }

    #login-button{
        cursor: pointer;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 30px;
        margin: auto;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: rgba(3,3,3,.8);
        overflow: hidden;
        opacity: 0.4;
        box-shadow: 10px 10px 30px #000;}

    /* Login container */
    #container{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 350px;
        height: 300px;
        border-radius: 5px;
        background: rgba(131, 160, 72, 0.54);
        box-shadow: 1px 1px 50px #000;
        display: none;
    }

    .close-btn{
        position: absolute;
        cursor: pointer;
        font-family: 'Open Sans Condensed', sans-serif;
        line-height: 18px;
        top: 3px;
        right: 3px;
        width: 20px;
        height: 20px;
        text-align: center;
        border-radius: 10px;
        opacity: .2;
        -webkit-transition: all 2s ease-in-out;
        -moz-transition: all 2s ease-in-out;
        -o-transition: all 2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .close-btn:hover{
        opacity: .5;
    }

    /* Heading */
    h1{
        font-family: 'Open Sans Condensed', sans-serif;
        position: relative;
        margin-top: 0px;
        text-align: center;
        font-size: 40px;
        color: #ddd;
        text-shadow: 3px 3px 10px #000;
    }

    /* Inputs */
    button,
    input{
        font-family: 'Open Sans Condensed', sans-serif;
        text-decoration: none;
        position: relative;
        width: 80%;
        display: block;
        margin: 9px auto;
        font-size: 17px;
        color: #fff;
        padding: 8px;
        border-radius: 6px;
        border: none;
        background: rgba(3,3,3,.1);
        -webkit-transition: all 2s ease-in-out;
        -moz-transition: all 2s ease-in-out;
        -o-transition: all 2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    input:focus{
        outline: none;
        box-shadow: 3px 3px 10px #333;
        background: rgba(3,3,3,.18);
    }

    /* Placeholders */
    ::-webkit-input-placeholder {
        color: #ddd;  }
    :-moz-placeholder { /* Firefox 18- */
        color: red;  }
    ::-moz-placeholder {  /* Firefox 19+ */
        color: red;  }
    :-ms-input-placeholder {
        color: #333;  }

    /* Link */
    button{
        font-family: 'Open Sans Condensed', sans-serif;
        text-align: center;
        padding: 4px 8px;
        background: rgba(107,255,3,0.3);
    }

    button:hover{
        opacity: 0.7;
    }
</style>

</head>

<body>

<div id="login-button">
  <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
  </img>
</div>

<div id="container">
  <h1>Log In</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form action="{{route('login')}}" method="get">
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="pass" placeholder="Password">
    <button>Log in</button>
  </form>
</div>



<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
