
<?php
//include("constants.php");


define('DB_NAME', 'final') ;
define('DB_USER', 'root') ;
define('DB_PASS', ''); 
define('DB_SERVER', 'localhost');  


$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if(!$connection)
{
	die("Could not connect" . mysql_error());
}

$db_select = mysql_select_db(DB_NAME, $connection);
if(!$db_select)
{
	die("Could not select" . mysql_error());
}
?>