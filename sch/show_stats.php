<?php
<meta charset="utf-8" />
//$mysqli->set_charset("utf8");
// Указываем кодировку, в которой будет получена информация из базы
@mysqli_query ($db, 'set character_set_results = "utf8"');
// Извлекаем статистику по текущей дате (переменная date попадает сюда из файла count.php, который, в свою очередь, подключается в каждом из 4 обычных файлов)
$res = mysqli_query($db, "SELECT `views`, `hosts` FROM `visits` WHERE `date`='$date'");
$row = mysqli_fetch_assoc($res);
echo '<br/>';
echo '<p><br/></p>';
echo '<p><b>Статистика посещений сайта.</b></p>';
echo '<p>Посетителей за сегодня: ' .$row['hosts']. '</p>';
echo '<p>Просмотрено страниц: ' .$row['views']. '</p>';
?>