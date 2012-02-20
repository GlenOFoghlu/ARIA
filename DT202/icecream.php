<?php

$host = "mysql4.mylogin.ie";
$user = "kstgtadmin";
$pass = "C05607710";

$db = mysql_connect($host, $user, $pass);

if (!$db)
{
    die("Could not connect: " . mysql_error());
}

mysql_select_db("chaplaincy", $db);

?>