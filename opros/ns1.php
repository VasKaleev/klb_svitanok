<?php 
	$itog1=0;
	$itog2=0;
			//локальный сервер
			//$userstable = "ns";
			//$link1 = mysql_connect("localhost", "opros", "", "ns")  OR DIE("Не могу создать соединение ");
			//mysql_select_db("opros", $link1);
			//сервер sprinthost
			//$userstable = "ipt";
			//$link1 = mysql_connect("localhost", "f0239595_opros", "111", "ipt")  OR DIE("Не могу создать соединение2 ");
			include('configinc.php');
			//mysql_select_db("f0239595_opros", $link1);
			$resulti = mysqli_query($db,'SELECT * FROM `ns`');
			$num_rowsi = mysqli_num_rows($resulti);
				 if ($resulti)
					while ($row = mysqli_fetch_assoc($resulti))
					$itog1=$row['da'];
			$resulti1 = mysqli_query($db,'SELECT * FROM `ns`');
			$num_rowsi1 = mysqli_num_rows($resulti1);
				 if ($resulti1)
					while ($row = mysqli_fetch_assoc($resulti1))
					$itog2=$row['net'];	
        					 $allit=$itog1+$itog2;
							 //echo 'Всего проголосовало $allit: &nbsp;&nbsp;'.$allit.'<p>';
							 //if ($allit==0) {$allit = $allit + 1;} 
							 //echo 'Всего проголосовало1 $allit: &nbsp;&nbsp;'.$allit.'<p>';}
        					 //for($i=0;$i<round(100*$itog1/$allit,0); $i++) 
        					 //for($i=0;$i<round(100*$itog2/$allit,0); $i++) 
        						// echo '<p><font color=#1A7889 size="4pt">Да: &nbsp;'.$itog1.'&nbsp;&nbsp;</font><font color=#FF003C></font><font color=green size="4pt">(&nbsp;'.round(100*$itog1/$allit,2).')%</font></p>';
        					    // echo '<p><font color=#1A7889 size="4pt">Нет: '.$itog2.'&nbsp;&nbsp;</font><font color=#FF003C></font><font color=green size="4pt">(&nbsp;'.round(100*$itog2/$allit,2).')%</font></p>';
        					    // echo '<p><font color=green size="4pt">Всего проголосовало: &nbsp;&nbsp;'.$allit.'</font></p>';
								// <script>
								//	document.getElementById('money-after').innerHTML = $allit;
								// </script>
        						// mysql_close();
?>					
			
	