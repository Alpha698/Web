
<?php

// Database Constants
define("DB_SERVER", "db2.ho.ua");
define("DB_USER", "kyrs");
define("DB_PASS", "xmo8x7pXXc");
define("DB_NAME", "kyrs");



$con = mysql_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
	mysql_select_db(DB_NAME) or die("Cannot select DB");
	
	?>