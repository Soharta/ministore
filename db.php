<?php
define('DBHost', 'localhost');
define('DBName', 'ministoredolls');
define('DBUser', 'root');
define('DBPassword', '');
require(dirname(__FILE__)."/PHP-PDO-MySQL-Class/src/PDO.class.php");
$DB = new Db(DBHost, DBName, DBUser, DBPassword);
?>