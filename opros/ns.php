<?php 
 //<meta charset="utf-8" />   
	$itog1=0;
	$itog2=0;
	$poisk0 = $_POST['poisk'];
	$poisk0 = stripslashes($poisk0);
	$poisk0 = htmlspecialchars($poisk0);
	$poisk0 = nl2br($poisk0);
	if ($poisk0<1) {
	$poisk0=0;
	}	
	//сервер sprinthost
	$userstable = 'ns';
	include('../configinc.php');
			$resulti = mysqli_query($db,'SELECT * FROM `ns`');
			$num_rowsi = mysqli_num_rows($resulti);
			//echo 'Тест'.$num_rowsi;
				 if ($resulti)
					while ($row = mysqli_fetch_assoc($resulti))
					$itog1=$row['da'];
			$resulti1 = mysqli_query($db,'SELECT * FROM `ns`');
			$num_rowsi1 = mysqli_num_rows($resulti1);
				 if ($resulti1)
					while ($row = mysqli_fetch_assoc($resulti1))
					$itog2=$row['net'];	
			//echo 'Всего проголосовало $allit: &nbsp;&nbsp;'.$itog1.'<p>';
			//echo 'Число записей в таблице $num_rowsi: &nbsp;&nbsp;'.$num_rowsi.'<p>';
			//echo 'Число записей в таблице $num_rowsi1: &nbsp;&nbsp;'.$num_rowsi1.'<p>';
				if ($poisk0=="1") 
				$itog1=$itog1+1;
				if ($poisk0=="2") 
				$itog2=$itog2+1;
						/* составление запроса для изменения информации в таблице opros */
						 /* INSERT INTO `ns`(`da`, `net`) VALUES ([value-1],[value-2]) */
				         if ($num_rowsi==0) {
						 $query = mysqli_query($db,"INSERT INTO $userstable (`da`, `net`) VALUES ('".$itog1."','".$itog2."')");
						 //$query = "INSERT INTO $userstable (`da`, `net`) VALUES ('".$itog1."','".$itog2."')";
						 //$sql = mysqli_query($link, "INSERT INTO `spisvit` (`FIO`, `datar`, `mt`, `dt`, `rabota`, `br`, `dolg`, `tabp`, `tel`, `gorod`, `foto`) VALUES ('{$_POST['FIO']}', '{$_POST['datar']}', '{$_POST['mt']}', '{$_POST['dt']}', '{$_POST['rabota']}', '{$_POST['br']}', '{$_POST['dolg']}', '{$_POST['tabp']}', '{$_POST['tel']}', '{$_POST['gorod']}', '{$_POST['foto']}')");
						 }
						if ($num_rowsi<>0) {
						$query = mysqli_query($db,"UPDATE $userstable SET da='".$itog1."', net='".$itog2."'");
						}
						/* выполнение запроса. Если произойдет ошибка - вывести ее. */
						//echo 'Число записей в таблице $num_rowsi: &nbsp;&nbsp;'.$num_rowsi.'<p>';
						//mysqli_query($query) or die(mysql_error());
						/* закрытие соединения с базой MySQL */
						mysqli_free_result($resulti1); 
					    mysqli_close($db); 
						// mysql_close();
						 $allit=0;
						 $allit=$itog1+$itog2;
								if(isset($_POST["poisk"])) {
								// Выполнили скрипт и назад в форму
								exit('<meta http-equiv="refresh" content="0; url=../index.php" />');
								//echo '<meta http-equiv="refresh" content="0;URL=http://svitanok.01sh.ru/index.php/">';
								}
?>					