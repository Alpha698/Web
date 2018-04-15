<?php require_once("assets/connection.php"); ?>



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

	<?php

if(isset($_POST["register"])){


if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	

		
	$query=mysql_query("SELECT * FROM usertbl WHERE username='".$username."'");
	$numrows=mysql_num_rows($query);
	
	if($numrows==0)
	{
	$sql="INSERT INTO usertbl
			(full_name, email, username,password) 
			VALUES('$full_name','$email', '$username', '$password')";

	$result=mysql_query($sql);


	if($result){
	 $message = "Account Successfully Created";
	} else {
	 $message = "Failed to insert data information!";
	}

	} else {
	 $message = "That username already exists! Please try another one!";
	}

} else {
	 $message = "All fields are required!";
}
}
?>


<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
	
<div class="container mregister">
			<div id="login">
	<h1>REGISTER</h1>
<form name="registerform" id="registerform" action="register.php" method="post">
	<p>
		<label for="user_login">Full Name<br />
		<input type="text" name="full_name" id="full_name" class="input" size="32" value=""  /></label>
	</p>
	
	<p>
		<label for="user_pass">Email<br />
		<input type="email" name="email" id="email" class="input" value="" size="32" /></label>
	</p>
	
	<p>
		<label for="user_pass">Username<br />
		<input type="text" name="username" id="username" class="input" value="" size="20" /></label>
	</p>
	
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="password" id="password" class="input" value="" size="32" /></label>
	</p>	

		<p class="submit">
		<input type="submit" name="register" id="register" class="button" value="Register" />
	</p>
	
	<p class="regtext">Already have an account? <a href="login.php" >Login Here</a>!</p>
</form>
	
	</div>
	</div>


<br><br>
    <div id="fi">
        <div class="container">
            <div class="row">

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