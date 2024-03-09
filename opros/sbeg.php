<?php 
 //<meta charset="utf-8" />   
	$itog1=0;
	$itog2=0;
	$itog3=0;
	$itog4=0;
	$itog5=0;
	$itog6=0;
	$poisk0 = $_POST['poisk'];
	$povtori = 0;
	$poisk0 = stripslashes($poisk0);
	$poisk0 = htmlspecialchars($poisk0);
	$poisk0 = nl2br($poisk0);
	if ($poisk0<1) {
	$poisk0=0;
	}
	//$userstable = "ipt";
	//$link1 = mysql_connect("localhost", "opros", "", "ipt")  OR DIE("Не могу создать соединение ");
	//mysql_select_db("opros", $link1);
	$userstable = 'ipt';
	include('../configinc.php');
	//$link1 = mysql_connect("localhost", "f0239595_opros", "111", "ipt")  OR DIE("Не могу создать соединение2 ");
	//mysql_select_db("f0239595_opros", $link1);
	$result1 = mysqli_query($db,'SELECT * FROM `ipt` ');
	$num_rows1 = mysqli_num_rows($result1);
	//echo 'Всего ip1: &nbsp;&nbsp;'.$num_rows1.'<p>';
	$ip= $_SERVER['REMOTE_ADDR'];
	//$userstable = "ipt";
	//$link2 = mysql_connect("localhost", "opros", "", "ipt")  OR DIE("Не могу создать соединение ");
	//mysql_select_db("opros", $link2);
	$userstable = 'ipt';
	//$link2 = mysql_connect("localhost", "f0239595_opros", "111", "ipt")  OR DIE("Не могу создать соединение3 ");
	//mysql_select_db("f0239595_opros", $link2);
	include('../configinc.php');
	$ip1= ip2long($ip);
	//echo gettype($ip1);
	//$result2 = mysqli_query($db,'SELECT `ipa` FROM `ipt` where `ipa`=$ip1');
	$result2 = mysqli_query($db,"SELECT `ipa` FROM `ipt` WHERE `ipa`=$ip1 ");
	//$sql = mysqli_query($link, "SELECT `id_id`, `FIO`, `datar`, `mt`, `dt`, `rabota`, `br`, `dolg`, `tabp`, `tel`, `gorod`, `foto` FROM `spisvit` WHERE `id_id`={$_GET['red']}");
	$num_rows2 = mysqli_num_rows($result2);
	//echo 'Всего ip2: &nbsp;&nbsp;'.$num_rows2.'<p>';
	//echo 'Мой ip: &nbsp;&nbsp;'.$ip1.'<p>'; 
	if ($num_rows2==0) 
	{ 
	    $allres=$num_rows2+1; 
		echo 'проверка '.$allres;
		echo 'проверка1 '.$ip1;
	    $query1 = mysqli_query($db,"INSERT into `ipt` (`nn`, `ipa`) values ('.$allres.', '.$ip1.')");
		//$query1 = mysqli_query($db,"INSERT into `ipt` (nn, ipa) values ('".$allres."', '".$ip1."')");
		//$query = mysqli_query($db,"INSERT INTO $userstable (`da`, `net`) VALUES ('".$itog1."','".$itog2."')");
		//mysqli_free_result($result2); 
		//mysqli_close($db);
		/* выполнение запроса. Если произойдет ошибка - вывести ее. */
		//mysql_query($query1) or die(mysql_error());
		/* закрытие соединения с базой MySQL */
		/*echo 'Добавлен ip в таблицу: &nbsp;&nbsp;'.$ip.'<p>';*/
		//mysql_close();
		//$userstable = "opros2";
		//$link = mysql_connect("localhost", "opros", "", "opros2")  OR DIE("Не могу создать соединение ");
		//mysql_select_db("opros", $link);
		$userstable = 'opros2';
		//$link = mysql_connect("localhost", "f0239595_opros", "111", "opros2")  OR DIE("Не могу создать соединение4 ");
		//mysql_select_db("f0239595_opros", $link);
		$result = mysqli_query($db,"SELECT * FROM opros2 where nn='1' ");
		$num_rows = mysqli_num_rows($result);
		//echo 'Число строк в таблице opros;'.$num_rows.'<p>';
		//echo '$result в таблице opros;'.$result.'<p>';
		 if ($result == 0) {
		 echo 'Результат не найден!<BR><BR>'; } 
			else {
			while ($row=mysqli_fetch_array($result)) {
			$itog1=$row['fi1'];
			 $itog2=$row['fi2'];
			 $itog3=$row['fi3'];
			 $itog4=$row['fi4'];
			 $itog5=$row['fi4'];
			 $itog6=$row['fi6'];
			}
			}
				if ($poisk0=="1") 
				$itog1=$itog1+1;
				if ($poisk0=="2") 
				$itog2=$itog2+1;
				if ($poisk0=="3")
				$itog3=$itog3+1;		
				if ($poisk0=="4") 
				$itog4=$itog4+1;
				if ($poisk0=="5") 
				$itog5=$itog5+1;
				if ($poisk0=="6")
				$itog6=$itog6+1;
						/* составление запроса для изменения информации в таблице opros */
						$query = mysqli_query($db,"UPDATE $userstable SET fi1='".$itog1."', fi2='".$itog2."', fi3='".$itog3."', fi4='".$itog4."', fi5='".$itog5."', fi6='".$itog6."' WHERE nn='1'");
						/* выполнение запроса. Если произойдет ошибка - вывести ее. */
						//mysql_query($query) or die(mysql_error());
						/* закрытие соединения с базой MySQL */
						// mysql_close();
						 mysqli_free_result($result); 
					     mysqli_close($db);
						 $allit=0;
						 $allit=$itog1+$itog2+$itog3+$itog4+$itog5+$itog6;
						 for($i=0;$i<round(100*$itog1/$allit,0); $i++) { $k1=$k1.'|'; }
						 for($i=0;$i<round(100*$itog2/$allit,0); $i++) { $k2=$k2.'|'; }		
						 for($i=0;$i<round(100*$itog3/$allit,0); $i++) { $k3=$k3.'|'; }
						 for($i=0;$i<round(100*$itog4/$allit,0); $i++) { $k4=$k4.'|'; }
						 for($i=0;$i<round(100*$itog5/$allit,0); $i++) { $k5=$k5.'|'; }
						 for($i=0;$i<round(100*$itog6/$allit,0); $i++) { $k6=$k6.'|'; }
							//инициализации массива
							$names[0]="голосов";
							$names[1]="голос";
							$names[2]="голоса";
							$names[3]="голоса";
							$names[4]="голоса";
							$names[5]="голосов";
							$names[6]="голосов";
							$names[7]="голосов";
							$names[8]="голосов";
							$names[9]="голосов";
							$names[10]="голосов";
							$names[11]="голосов";
							$names[12]="голосов";
							$names[13]="голосов";
							$names[14]="голосов";
							$names[15]="голосов";
							$names[16]="голосов";
							$names[17]="голосов";
							$names[18]="голосов";
							$names[19]="голосов";
							$names[20]="голосов";
							$names[21]="голос";
							$names[22]="голоса";
							$names[23]="голоса";
							$names[24]="голоса";
							$names[25]="голосов";
							$names[26]="голосов";
							$names[27]="голосов";
							$names[28]="голосов";
							$names[29]="голосов";
							$names[30]="голосов";
	}				 
								if(isset($_POST["poisk"])) {
								// Выполнили скрипт и назад в форму
								exit('<meta http-equiv="refresh" content="0; url=../opros.php" />');
								}
?>					