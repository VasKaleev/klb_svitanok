<?php include 'db.php'; ?>
<meta charset="utf-8" />
//$mysqli->set_charset("utf8");
<table style="margin-left:10px"; style="border: 1px solid silver;">
<tr>
    <td style="border: 1px solid silver;">День</td>
    <td style="border: 1px solid silver;">Месяц</td>
    <td style="border: 1px solid silver;">Год</td>
	<td style="border: 1px solid silver;">Всего</td>
</tr>
<?php
// Если в массиве GET есть элемент interval (т.е. был клик по одной из ссылок выше)
	$interval = 7;
    // Если в качестве параметра передано не число
    if (!is_numeric ($interval))
    {
        echo '<p><b>Недопустимый параметр!</b></p>';
    }
    // Указываем кодировку, в которой будет получена информация из базы
    @mysqli_query ($db, 'set character_set_results = "utf8"');
    $date1=date("d");
	$res1 = mysqli_query($db, "SELECT `views`, `hosts` FROM `visits` WHERE day(`date`)='$date1'");
	$row1 = mysqli_num_rows($res1);
	$date2=date("m");
	$res2 = mysqli_query($db, "SELECT `views`, `hosts` FROM `visits` WHERE month(`date`)='$date2'");
	$row2 = mysqli_num_rows($res2);
	$date3=date("Y");
	$res3 = mysqli_query($db, "SELECT `views`, `hosts` FROM `visits` WHERE year(`date`)='$date3'");
	$row3 = mysqli_num_rows($res3);
	$res4 = mysqli_query($db, "SELECT `views`, `hosts` FROM `visits` ");
	$row4 = mysqli_num_rows($res4);
			echo '<tr>
			     <td style="border: 1px solid silver;">' .$row1. '</td>
			     <td style="border: 1px solid silver;">' .$row2. '</td>
			     <td style="border: 1px solid silver;">' .$row3. '</td>
				 <td style="border: 1px solid silver;">' .$row4. '</td>
			 </tr>';
?>
</table>
