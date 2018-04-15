<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<!-- Подключение JS и CSS ядра Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"> 
    <script src="assets/js/jquery.min.js"></script>
<!-- Прочие стили -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
<!-- Стиль вкладки-->
    <link rel="shortcut icon" href="assets/img/logo/Flat_logo_on_transparent_161x73ico.png">
    <title>Shypkov_Vladyslav</title>
<!-- Стили шрифтов -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

<script type="text/javascript">
$(function() {
$(window).scroll(function() {
if($(this).scrollTop() != 0) {
$('#toTop').fadeIn();
} else {
$('#toTop').fadeOut();
}
});
$('#toTop').click(function() {
$('body,html').animate({scrollTop:0},800);
});
});
</script>

  </head>
  <body data-target="#theMenu" >
<!-- Меню <span class="icon icon-eye"></span><i class="icon-remove menu-close"></i>-->
    <nav class="menu" id="theMenu" >
        <div class="menu-wrap">
            <h1 class="logo"><a href="index.html">Shypkov Vladyslav</a></h1>
            <i class="menu-close"></i>
            <a href="index.html" class="smoothScroll"><span class="icon icon-home"></span> &nbsp; Home</a>
            <a href="About_Me.html" class="smoothScroll"><span class="icon icon-file"></span> &nbsp; About Me</a>
            <!-- веб-дизайнер, разработчик и игровой наркоман THE SKILLS href="#contact"-->
            <a href="Cover.html" class="smoothScroll"><span class="icon icon-camera"></span> &nbsp; COVER LETTER</a>
            <a href="favorite.html" class="smoothScroll"><span class="icon icon-star"></span> &nbsp; favorite</a><!-- MY BUNKER -->
            <a href="login.php" class="smoothScroll"><span class="icon icon-user"></span> &nbsp; Personalization</a>
            <a href="javascript.html" class="smoothScroll"><span class="icon icon-bookmarks"></span> &nbsp; JavaScript</a>
            <a href="intropage.php" class="smoothScroll"><span class="icon icon-bookmarks"></span> &nbsp; PHP</a>
            <a href="https://www.facebook.com/profile.php?id=100012252974050&fref=nf"><i class="icon-facebook"></i></a>
            <a href="#"><i class="icon-twitter"></i></a>
            <a href="https://my.mail.ru/mail/tsef47/"><i class="icon icon-envelop"></i></a>
            <a href="https://github.com/Alpha698"><i class="icon-github"></i></a>
        </div>
        
<!-- Кнопка меню -->
        <div id="menuToggle"><span class="icon icon-menu"></span></div>
    </nav>
    

    <div id="fi">


<br><br>
<div id="welcome">	
	<h2>Welcome, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
	<p><a href="logout.php">Logout</a> Here!</p>
</div>


<?php
}
?>

	<?php

if(isset($_POST["submit1"])){

	echo "Ваш возраст:"; echo htmlspecialchars($_POST['age']); echo "<br>";
    echo "Ваш пол:"; echo htmlspecialchars($_POST['sex']); echo "<br>";
    echo "Удобно ли вам работать с нишим сайтом:"; echo htmlspecialchars($_POST['test1']); echo "<br>";
    echo "Нашли ли вы необходимую информацию:"; echo htmlspecialchars($_POST['test2']); echo "<br>";
    echo "Вы оценили наш сайт:"; echo htmlspecialchars($_POST['test']); echo "<br>";
    echo "Посетите ли вы сайт еще раз:"; echo htmlspecialchars($_POST['test3']); echo "<br>";
    echo "Ваш комментарий:"; echo htmlspecialchars($_POST['test4']); echo "<br>";


}
?>

    <div id="fi">
        <div class="container">
            <div class="row">
<form name="forma" action="intropage.php" method="post" style="text-align: left;">

Ваш возраст: <input name="age" id="age" type="text"><br>
<hr>

Ваш пол: <br>
Мужской <input name="sex" id="sex1" type="radio" value="Мужской">
Женский <input name="sex" id="sex2" type="radio" value="Женский"><br>
<hr>

Удобно ли вам работать с нишим сайтом? <br>
Да <input name="test1" type="radio" value="Да"><br>
Не очень <input name="test1" type="radio" value="Неочень"><br>
Нет <input name="test1" type="radio" value="Нет"><br>
<hr>

Нашли ли вы необходимую информацию? <br>
Да <input name="test2" type="radio" value="Да"><br>
Не все что нужно <input name="test2" type="radio" value="Невсе"><br>
Нет <input name="test2" type="radio" value="Нет"><br>
<hr>

<label>Оцените наш сайт: </label><br><select id="selectvalue" name="test">
    <option>Отлично</option>
    <option>Хорошо</option>
    <option>Не плохо</option>
    <option>Плохо</option>
    <option>Ужасно</option>
</select> <br>
<hr>

Посетите ли вы сайт еще раз? <br>
Да <input name="test3" type="radio" value="Да"><br>
Возможно <input name="test3" type="radio" value="Возможно"><br>
Не уверен(а) <input name="test3" type="radio" value="Неуверен"><br>
Нет <input name="test3" type="radio" value="Нет"><br>
<hr>

Что бы Вы хотели изменить? <br><textarea name="test4" ></textarea><br>
<hr>

<input name="submit1" type="submit" value="Отправить"> <br><br><br>
</form>
            </div>
<hr>        </div>
    </div>


    <script type="text/javascript">
jQuery(document).ready(function($){
 $('<style>'+
 '.scrollTop{ z-index:9999; position:fixed;'+
 'bottom:20px; left:92%; width:50px; height:50px;'+
 'background:url(assets/img/top.png) 0 0 no-repeat; }' +
 '.scrollTop:hover{ background-position:0 -50px;}'
 +'</style>').appendTo('body');
 var speed = 550,
 $scrollTop = $('<a href="#" class="scrollTop">').appendTo('body');
 $scrollTop.click(function(e){
 e.preventDefault();
 $( 'html:not(:animated),body:not(:animated)' ).animate({ scrollTop: 0}, speed );
 });

 //появление
 function show_scrollTop(){
 ( $(window).scrollTop() > 330 ) ? $scrollTop.fadeIn(700) : $scrollTop.fadeOut(700);
 }
 $(window).scroll( function(){ show_scrollTop(); } );
 show_scrollTop();
});
</script>

    <script src="assets/js/main.js"></script>

    <!-- Footer -->
        <footer id="footer">
            <span class="copyright">Copyright © 2017 - Developer by 
                <a href="https://my.mail.ru/mail/tsef47/">Shypkov Vladyslav</a>. All Rights Reserved.
            </span>
        </footer>
            </div>
</body>
</html>