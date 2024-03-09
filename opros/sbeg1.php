<?php 
	$itog1=0;
	$itog2=0;
	$itog3=0;
	$itog4=0;
	$itog5=0;
	$itog6=0;
	$allit=0;
	$allit1=0;
			//$userstable = "ipt";
			//$link1 = mysql_connect("localhost", "opros", "", "ipt")  OR DIE("Не могу создать соединение ");
			//mysql_select_db("opros", $link1);
			$userstable = 'ipt';
			//$link1 = mysql_connect("localhost", "f0239595_opros", "111", "ipt")  OR DIE("Не могу создать соединение2 ");
			//mysql_select_db("f0239595_opros", $link1);
			include('configinc.php');
			$ip= $_SERVER['REMOTE_ADDR'];
	        $ip1= ip2long($ip);
			$resulti = mysqli_query($db,"SELECT * FROM `ipt` where ipa=$ip1");
			$num_rowsi = mysqli_num_rows($resulti);
			//echo 'Всего ip: &nbsp;&nbsp;'.$num_rowsi.'<p>';
			//echo 'Мой ip: &nbsp;&nbsp;'.$ip1.'<p>'; 
				if ($num_rowsi!=0) { 
					//echo 'Запись такого ip есть в таблице: &nbsp;&nbsp;'.$ip.'<p>';	
					 echo '<h3><font color=#FF003C size="5pt">Вы уже проголосовали!!!</font></h3>';
					 echo '<h3><font color=#FF003C size="5pt">Ваш голос учтен!!!</font></h3>';
					}
				if ($num_rowsi==0) {'<br><h3><font color=red size="5pt">Вы ещё не голосовали!!!</font></h3><br>';}	
        		    echo '<br><h3><font style="color: #911E42" size="5pt">Результаты опроса.</font></h3>';
		    //$userstable = "opros2";
			//$link = mysql_connect("localhost", "opros", "", "opros2")  OR DIE("Не могу создать соединение ");
			//mysql_select_db("opros", $link);
			$userstable = 'opros2';
        	//$link = mysql_connect("localhost", "f0239595_opros", "111", "opros2")  OR DIE("Не могу создать соединение4 ");
        	//mysql_select_db("f0239595_opros", $link);
        	$result = mysqli_query($db,"SELECT * FROM `opros2` where nn='1' ");
        	$num_rows = mysqli_num_rows($result);
        	//echo 'Всего записей: &nbsp;&nbsp;'.$num_rows.'<p>';
        		while ($row=mysqli_fetch_array($result)) {
        		$itog1=$row['fi1'];
        		 $itog2=$row['fi2'];
        		 $itog3=$row['fi3'];
        		 $itog4=$row['fi4'];
        		 $itog5=$row['fi4'];
        		 $itog6=$row['fi6'];
         		}
        		 
        					 $allit=$itog1+$itog2+$itog3+$itog4+$itog5+$itog6;
							 //echo 'Всего проголосовало $allit: &nbsp;&nbsp;'.$allit.'<p>';
							 
							 if ($allit==0) {$allit = $allit + 1;} 
							 //echo 'Всего проголосовало1 $allit: &nbsp;&nbsp;'.$allit.'<p>';}
        					 for($i=0;$i<round(100*$itog1/$allit,0); $i++) { $k1=$k1.'|'; }
        					 for($i=0;$i<round(100*$itog2/$allit,0); $i++) { $k2=$k2.'|'; }		
        					 for($i=0;$i<round(100*$itog3/$allit,0); $i++) { $k3=$k3.'|'; }
        					 for($i=0;$i<round(100*$itog4/$allit,0); $i++) { $k4=$k4.'|'; }
        					 for($i=0;$i<round(100*$itog5/$allit,0); $i++) { $k5=$k5.'|'; }
        					 for($i=0;$i<round(100*$itog6/$allit,0); $i++) { $k6=$k6.'|'; }
        					 	//инициализации массива
        						$names[0]="голосов";$names[1]="голос";$names[2]="голоса";$names[3]="голоса";$names[4]="голоса";$names[5]="голосов";$names[6]="голосов";$names[7]="голосов";	$names[8]="голосов";$names[9]="голосов";$names[10]="голосов";
        						$names[11]="голосов";$names[12]="голосов";$names[13]="голосов";$names[14]="голосов";$names[15]="голосов";$names[16]="голосов";$names[17]="голосов";$names[18]="голосов";$names[19]="голосов";$names[20]="голосов";
        						$names[21]="голос";	$names[22]="голоса";$names[23]="голоса";$names[24]="голоса";$names[25]="голосов";$names[26]="голосов";$names[27]="голосов";
        						 echo '<p><font color=#1A7889 size="2pt">Аэробика (в т.ч. фитнес), спортивные танцы: &nbsp;'.$itog1.'&nbsp;'.$names[$itog1].'&nbsp;</font><font color=#FF003C>'.$k1.'</font><font color=green size="4pt">(&nbsp;'.round(100*$itog1/$allit,2).')%</font></p>';
        					     echo '<p><font color=#1A7889 size="2pt">Спортивная гимнастика (турник, брусья и т.д.): &nbsp;'.$itog2.'&nbsp;'.$names[$itog2].'&nbsp;</font><font color=#FF003C>'.$k2.'</font><font color=green size="4pt">(&nbsp;'.round(100*$itog2/$allit,2).')%</font></p>';
        				    	 echo '<p><font color=#1A7889 size="2pt">Плавание, Гребля: &nbsp;'.$itog3.'&nbsp;'.$names[$itog3].'&nbsp;</font><font color=#FF003C>'.$k3.'</font><font color=green size="4pt">(&nbsp;'.round(100*$itog3/$allit,2).')%</font></p>';
        					     echo '<p><font color=#1A7889 size="2pt">Игровые виды спорта(футбол, волейбол и т.д.): &nbsp;'.$itog4.'&nbsp;'.$names[$itog4].'&nbsp;</font><font color=#FF003C>'.$k4.'</font><font color=green size="4pt">(&nbsp;'.round(100*$itog4/$allit,2).')%</font></p>';
        					     echo '<p><font color=#1A7889 size="2pt">Единоборства и силовые виды спорта (в том числе бокс, карате, гиревой спорт и др.): &nbsp;'.$itog5.'&nbsp;'.$names[$itog5].'&nbsp;</font><font color=#FF003C>'.$k5.'</font><font color=green size="4pt">(&nbsp;'.round(100*$itog5/$allit,2).')%</font></p>';
        					     echo '<p><font color=#1A7889 size="2pt">Йогой-духовным развитием человека: &nbsp;'.$itog6.'&nbsp;'.$names[$itog6].'&nbsp;</font><font color=#FF003C>'.$k6.'</font><font color=green size="4pt">(&nbsp;'.round(100*$itog6/$allit,2).')%</font></p>';
        					     echo '<p><font color=green size="3pt">Всего проголосовало: &nbsp;&nbsp;'.$allit.'</font></p>';
        						 //mysql_close();
								 mysqli_free_result($result); 
					             mysqli_close($db);
?>					
			
	