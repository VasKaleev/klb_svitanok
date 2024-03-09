<?php
<meta charset="utf-8" />
// Хост (обычно localhost)
$db_host = "localhost";
// Имя базы данных
$db_name = "stats";
// Логин для подключения к базе данных
$db_user = "opros";
// Пароль для подключения к базе данных
$db_pass = "111";
//$userstable="opros";
//$db = mysqli_connect ($db_host, $db_user, "111", $db_name) or die ("Невозможно подключиться к БД");

//$userstable = "ips";
$db = mysqli_connect("localhost", "f0239595_opros", "111", "f0239595_opros")  OR DIE("Не могу создать соединение2 ");
//mysql_select_db("f0239595_opros", $link1);
?>