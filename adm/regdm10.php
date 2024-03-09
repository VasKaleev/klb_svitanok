<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
    <meta name="description" content="КЛБ Свитанок-регистрация день Металлурга 10 км не перв БМЗ">
	<meta name="keywords" content="КЛБ Свитанок-регистрация день Металлурга 10 км не перв БМЗ">
	<link rel="stylesheet" href="../style.css" />
    <title>КЛБ Свитанок-регистрация день Металлурга 10 км не перв БМЗ</title> 
	<script src="js/jquery.js" defer></script>
	<script src="js/cycle.js" defer></script>
	<script src="js/slideshow.js" defer></script>
	<link rel="shortcut icon" href="../images/favicon.ico">
   <!--подключение гугл аналитики для поисковой системы-->
     <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127779573-1"></script>
					<script>
					  window.dataLayer = window.dataLayer || [];
					  function gtag(){dataLayer.push(arguments);}
					  gtag('js', new Date());
					  gtag('config', 'UA-127779573-1');
					 </script> 
							  <!-- Global site tag (gtag.js) - Google Analytics -->
						<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127779573-2"></script>
								<script>
								  window.dataLayer = window.dataLayer || [];
								  function gtag(){dataLayer.push(arguments);}
								  gtag('js', new Date());
								  gtag('config', 'UA-127779573-2');
								</script>
  </head>
	<body>
	    <!--счетчик маил     -->    
	  <!-- Rating@Mail.ru counter -->
                        <script>
                        var _tmr = window._tmr || (window._tmr = []);
                        _tmr.push({id: "3062632", type: "pageView", start: (new Date()).getTime()});
                        (function (d, w, id) {
                        if (d.getElementById(id)) return;
                        var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
                        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
                         var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
                        if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
                        })(document, window, "topmailru-code");
                        </script><noscript><div>
                        <img src="//top-fwz1.mail.ru/counter?id=3062632;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
                        </div></noscript>
                        <!-- //Rating@Mail.ru counter -->   
	<div id="wrapper"><!--начало wrapper-->
		<!--<div style="width:100%; height:1px; clear:both;"></div>--> <!-- выравниваем без обтекания -->
		<div id="header">
			<div id="line_1">
				<h1>Клуб любителей бега &laquo;Свитанок&raquo;</h1>
			</div>
			<div id="line_3">  
				<a href="index.php"><img src="../images/0981.png"  alt="foto1" width="171" height="115"/> </a>
				<div id="email">
					<h3>E-mail:</h3>
					<p><a href="mailto:btr.otr@bmz.gomel.by">btr.otr@bmz.gomel.by</a></p>
					<p><a href="mailto:vask@bmz.gomel.by">vask@bmz.gomel.by</a></p>
				</div>
				<div id="pic">
				<img title="Пробег день металлурга Жлобин июль 2018" src="../images/dm18.jpg"  width="520" height="200" alt= "КЛБ Свитанок Жлобин" />
					<!--<img src="images/bmz2.gif"  width="520" height="200" alt= "КЛБ Свитанок"/>-->
				</div>
			</div>
			<div id="line_4"><h3>Наши партнеры:</h3>
				<div id="slides">
			         <!-- <a style="margin:0px 40px"><img src="../images/ztt.jpg"  alt="foto1" width="130" height="90"/><p>Zhlobin trail team</p> </a> -->
				      <a target="_blank" href="http://www.belsteel.com/"><img src="../images/bmz1.jpg" alt="foto2" width="210" height="50"/><p>ОАО «БМЗ - управляющая компания холдинга «БМК» ул. Промышленная 37, Жлобин 247210</p> </a>
				      <!--<a style="margin:0px 20px" target="_blank" href="http://www.msocservis.by/"><img src="../images/mets.jpg" alt="foto2" width="90" height="90"/><p>Унитарное предприятие "Металлургсоцсервис"</p> </a> -->
		        </div>
			</div>
		</div>
		<!--Конец шапки-->
		<!--бегущая строка-->
			<div id="line_5">
			<!--<div class="marquee"><span><em> ⚘ ⚘ ⚘ КЛБ &laquo;Свитанок&raquo; поздравляет с открытием бегового сезона 2019. Желаем победы, отличных успехов, везение тоже не станет помехой, других превзойти и себя превозмочь,не дрейфить и гнать все сомнения прочь! ⚘ ⚘ ⚘</em></span></div>-->
			<div class="marquee"><span><em>
				<?php 
				    //$db = mysqli_connect("localhost", "opros", "", "opros")  OR DIE("Не могу создать соединение2 ");
					//$db = mysqli_connect("localhost", "f0239595_opros", "111", "f0239595_opros")  OR DIE("Не могу создать соединение1 ");
					//	mysqli_set_charset($db, "utf8");
                    //    @mysqli_query ($db, 'set character_set_results = "utf8"');
                        include('../configinc.php');
						$result=mysqli_query($db,'SELECT * FROM `begstr` '); // запрос на выборку
						while($row=mysqli_fetch_array($result)){
						$begstr=$row['begstr'];
						}
				        //$begstr='Проверка работы бегущей строки'; 
					echo ' КЛБ &laquo;Свитанок&raquo; '.$begstr;
					//mysqli_free_result($result); 
					//mysqli_close($db);
				?>
				</em></span>
				</div>
			</div>
			<div id="conteiner">
				<div id="line_6"><!--
					<ul id="navbar">
						<li><a href="../index.php">Главная</a></li>
						<li><a href="../bprob.php">Положения</a></li>
						<li><a href="../protn.php">Протоколы пробегов</a></li>
						<li><a href="../foto.php">Фотогалерея</a></li>
                        <li><a href="../video.php">Видео</a></li>
                        <li><a href="../otchet.php">Отчёты о соревнованиях</a></li>
						<li><a href="../pressa.php">Пресса о нас</a></li>
						<li><a href="../farh20.php">Фото и видео архив</a></li>
						<li><a href="../pst.php">Полезные статьи</a></li>
						<li><a href="../nagr.php">Наши награды</a></li>
						<li><a href="../onas.php">Контакты</a></li>
						<li><a href="../otz.php">Отзывы и комментарии</a></li>
						<li><a href="../opros.php">Опросы</a></li>
						<li><a href="../klbm2019.php">КЛБ Матч СНГ 2019</a></li>
						<li><a href="../ns.php">Новости спорта</a></li>
					</ul>-->
			    </div>
		    <div  id="line_7" >
				<div>
				    <style>
					   table {
						<!--width: 100%;-->
						border-collapse: collapse;
						font-size: 12px;
					  }
					  td, th {
						border: 1px solid #98bf21;
						padding: 3px 7px 2px 7px;
						text-align: left;
					  }
					  th {
						text-align: left;
						padding: 5px;
						background-color: #A7C942;
						color: #fff;
					  }	 
					 td:nth-child(1n) { color: Navy;}
					 </style> 
				    <h2><span style="font-family: 'Vollkorn', Serif; color: crimson; font-size: 25px">Регистрация участников пробега день металлурга г.Жлобин 10 км </span></h2><br>
		        	<h4><span style="font-family: 'Vollkorn', Serif; color: crimson; font-size: 15px">Стартовый номер будет присвоен участнику пробега в течении суток после регистрации на пробег.</span></h4>
				   			
			   <form action="" method="post">
							<table>
							  <tr>
								<td>  Дистанция  <input type="number" size="20" name="dist"  value="" min="10" max="10" step="" placeholder="10"></td>
							  </tr>
							  <tr>
								<td>  Дата рождения  <input type="date" size="12" name="datar"  value=""></td>
     							<td>  Полных лет  <input type="number" size="2" name="let"  value="" min="15" max="90" step="1"></td>
								<td>  Пол     <input type="radio" name="pol"  value="m" checked><font color=#2C4480 size="4pt">M </font><input type="radio" name="pol"  value="f"><font color=#2C4480 size="4pt">Ж </font><br></td>
							  </tr>
							  <tr>
								<td>  Фамилия  <input type="text" size="20" name="fam"  value=""></td>
							  	<td>  Имя  <input type="text" size="20" name="ima"  value=""></td>
							 	<td>  Отчество  <input type="text" size="20" name="otch" size="3" value=""></td>
							  </tr>
							  <tr>
								<td>  Номер паспорта  <input type="text" size="10" name="paspnom"  value=""></td>
     							<td>  Дата выдачи паспорта  <input type="date" size="10" name="datvidp"  value="" min="15" max="90" step="1"></td>
								<td>  Кем выдан паспорт     <input type="text"  size="30" name="kemvidp"  value="">
							  </tr>
							  <tr>
								<td>  Домашний адрес  <input type="text" size="40" name="adres"  value=""></td>
							  </tr>
							   <tr>
								<td>  Место работы  <input type="text" size="20" name="rabota"  value=""></td>
								<td>  КЛБ  <input type="text" size="20" name="klb"  value=""></td>
							  </tr>
							  <tr>
								<td colspan="2"><input type="submit" class="kn" value="Записать"></td>
							  </tr>
							</table>
						  </form>
						  <table >
			  
    		   <?php //if(!empty($_POST['fam'])){
    			    $nn=0;
					//$fam=$_POST['fam'];
    				include('../configinc.php');
    				$result=mysqli_query($db,"SET @@lc_time_names = 'ru_RU'");
					$sql=mysqli_query($db,"INSERT INTO `dme10km` (`dist`,`rabota`,`datar`,`let`,`pol`,`fam`,`ima`,`otch`,`adres`,`klb`,`paspnom`,`datvidp`,`kemvidp`) VALUES ('{$_POST['dist']}', '{$_POST['rabota']}', '{$_POST['datar']}', '{$_POST['let']}', '{$_POST['pol']}', '{$_POST['fam']}', '{$_POST['ima']}', '{$_POST['otch']}', '{$_POST['adres']}', '{$_POST['klb']}', '{$_POST['paspnom']}', '{$_POST['datvidp']}', '{$_POST['kemvidp']}')");
					//Если вставка прошла успешно
							  if(!empty($_POST['fam'])){
							  if ($sql) {
								echo '<p>Запись добавлена Успешно!</p>';
							  } else {
								echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
							  }
							  }
				$q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='m' && `let`<'19' Order by `nomer` ASC");
					echo '<table><tr><td class="dsv1-td">&nbsp;№</td><td class="dsv2-td">Дис</td><td class="dsv3-td">Стар ном</td><td class="dsv4-td">Дата рожден</td><td class="dsv5-td">Полн лет</td><td class="dsv6-td">Фамилия</td><td class="dsv7-td">Имя</td><td class="dsv8-td">Отчество</td><td class="dsv9-td">Клуб</td><td class="dsv10-td">Номер паспорта</td><td class="dsv11-td">Дата выдачи паспорта</td><td class="dsv12-td">Кем выдан паспорт</td><td class="dsv13-td">Место работы</td></tr></table>';
					echo 'Мужчины до 19 лет:<br/>';		
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
					   echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}
					  echo '------------------------------------------------------------------------------------------------<br/>';
					$q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='m' && `let`>='19' && `let`<='29' Order by `nomer` ASC");
					echo 'Мужчины 19-29 лет:<br/>';		
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                   	   echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}
					  echo '------------------------------------------------------------------------------------------------<br/>';
					$q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='m' && `let`>='30' && `let`<='39' Order by `nomer` ASC");
					echo 'Мужчины 30-39 лет:<br/>';		
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                   	   echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}
					  echo '------------------------------------------------------------------------------------------------<br/>';
					  $q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='m' && `let`>='40' && `let`<='49' Order by `nomer` ASC");
					echo 'Мужчины 40-49 лет:<br/>';		
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                   	   echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}
					  echo '------------------------------------------------------------------------------------------------<br/>';
					 $q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='m' && `let`>='50' && `let`<='59' Order by `nomer` ASC");
					echo 'Мужчины 50-59 лет:<br/>';		
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                   	   echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}
					  echo '------------------------------------------------------------------------------------------------<br/>';
					$q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='m' && `let`>='60' && `let`<='69' Order by `nomer` ASC");
					echo 'Мужчины 60-69 лет:<br/>';		
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                   	   echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}
					  echo '------------------------------------------------------------------------------------------------<br/>';
					$q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='m' && `let`>='70' Order by `nomer` ASC");
					echo 'Мужчины 70 и старше лет:<br/>';		
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                    	echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}
					  echo '------------------------------------------------------------------------------------------------<br/>';
					$q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='f' && `let`<'19' Order by `nomer` ASC");
					echo 'Женщины до 19 лет:<br/>';
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                      echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}	
    				  echo '------------------------------------------------------------------------------------------------<br/>';
					$q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='f' && `let`>='19' && `let`<='29' Order by `nomer` ASC");
					echo 'Женщины 19-29 лет:<br/>';
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                   	  echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}	
    				  echo '------------------------------------------------------------------------------------------------<br/>';
    				  $q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='f' && `let`>='30' && `let`<='39' Order by `nomer` ASC");
					echo 'Женщины 30-39 лет:<br/>';
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                   	  echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}	
    				  echo '------------------------------------------------------------------------------------------------<br/>';
    				  $q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='f' && `let`>='40' && `let`<='49' Order by `nomer` ASC");
					echo 'Женщины 40-49 лет:<br/>';
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                   	  echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}	
    				  echo '------------------------------------------------------------------------------------------------<br/>';
    				  $q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='f' && `let`>='50' && `let`<='59' Order by `nomer` ASC");
					echo 'Женщины 50-59 лет:<br/>';
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                   	  echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}	
    				  echo '------------------------------------------------------------------------------------------------<br/>';
					$q= mysqli_query($db, "SELECT * FROM `dme10km` where `pol`='f' && `let`>='60' Order by `nomer` ASC");
					echo 'Женщины 60 и старше лет:<br/>';
					$nn=0;
					while ($itog = mysqli_fetch_assoc($q)) {
					  $nn++;
                   	   echo  '<table><tr><td class="dsn1-td">&nbsp;'.$nn.'</td><td class="dsn2-td">'.$itog['dist'].'</td><td class="dsn3-td">'.$itog['nomer'].'</td><td class="dsn4-td"> '.$itog['datar'].'</td><td class="dsn5-td"> '.$itog['let'].'</td><td class="dsn6-td"> '.$itog['fam'].'</td><td class="dsn7-td"> '.$itog['ima'].'</td><td class="dsn8-td">'.$itog['otch'].'</td><td class="dsn9-td">'.$itog['klb'].'</td><td class="dsn10-td">'.$itog['paspnom'].'</td><td class="dsn11-td">'.$itog['datvidp'].'</td><td class="dsn12-td">'.$itog['kemvidp'].'</td><td class="dsn13-td">'.$itog['rabota'].'</td></tr></table>';
					}	
    				  echo '------------------------------------------------------------------------------------------------<br/>';
					 
					 mysqli_free_result($q);
    				 mysqli_close($db);
    			//} 
    			?>
				<!--</table>-->
				
				   
				</div>	    
			</div>
        <div  id="line_8" ><!--<h3>Наши друзья и партнеры: </h3>		
          <div class="d-table">
           <div class="d-tr">
             <div class="d-td"><a target="_blank" href="http://www.klbamatar.by">   <img title="КЛБ Аматар" src="../images/logo_amatar.png" alt="КЛБ Аматар"></a></div>
             <div class="d-td"><a target="_blank" href="http://www.klbviktoria.com"><img title="Клуб бега Виктория" src="../images/klbviktoria.png" alt="Клуб бега Виктория"  ></a></div>
              <div class="d-td"><a target="_blank" href="http://ocrbelarus.by"><img title="ОСО «БЕЛОРУССКАЯ ФЕДЕРАЦИЯ ГОНОК С ПРЕПЯТСТВИЯМИ»" src="../images/fpg.png" alt="БЕЛОРУССКАЯ ФЕДЕРАЦИЯ ГОНОК С ПРЕПЯТСТВИЯМИ"></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" href="http://www.nogibogi.com"><img title="Сайт Ноги-боги" src="../images/nogib.png" alt="Сайт Ноги-боги"  ></a></div>
             <div class="d-td"><a target="_blank" href="http://www.bfla.eu"><img title="Белорусская федерация легкой атлетики" src="../images/logo1_bfla.gif" alt="Белорусская федерация легкой атлетики"  ></a></div>
             <div class="d-td"><a target="_blank" href="http://www.42195.by"><img title="Сайт 42195" src="../images/42195.png" alt="Сайт 42195"  ></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" href="https://www.arf.by"><img title="Федерация приключенческих гонок" src="../images/arf-h120-int.png" alt="Федерация приключенческих гонок" width="50" height="45" ></a></div>
             <div class="d-td"><a target="_blank" href="http://www.tri.by"><img title="Белорусская федерация триатлона" src="../images/tribylogo2.png" alt="Белорусская федерация триатлона" width="45" height="45" ></a></div>
             <div class="d-td"><a target="_blank" href="http://www.probeg.org">     <img title="ПроБЕГ в России и мире" src="../images/5.gif" alt="ПроБЕГ в России и мире"   ></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" href="#"><img title="КЛБ Крыница Бобруйск" src="../images/belshina.jpg" alt="КЛБ Крыница Бобруйск" width="50" height="45" ></a></div>
             <div class="d-td"><a target="_blank" href="http://www.run4fun.by"><img title="Клуб Run4Fun Барановичи" src="../images/R4F.jpg" alt="Клуб Run4Fun Барановичи" width="45" height="45" ></a></div>
             <div class="d-td"><a target="_blank" href="https://metallurg.zhlobin.by"><img title="ХК Металлург Жлобин" src="../images/mz.png" alt="ХК Металлург Жлобин" width="45" height="45"></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" href="http://bfnw.by"><img title="Федерация скандинавской ходьбы" src="../images/sh.png" alt="Федерация скандинавской ходьбы" width="50" height="45"></a></div>
             <div class="d-td"><a target="_blank" href="https://mmazhlobin.by/"><img title="MMA Жлобин | Клуб смешанных единоборств" src="../images/mma.jpg" alt="MMA Жлобин | Клуб смешанных единоборств" width="45" height="45"></a></div>
             <div class="d-td"><a target="_blank" href="https://vk.com/yogazhl"><img title="Йога студия город Жлобин в VK" src="../images/yo.jpg" alt="YO! YOGA студия город Жлобин в VK" width="45" height="45"  ></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" href="http://www.obelarus.net"><img title="Спортивное ориентирование в Беларуси" src="../images/or.png" alt="Спортивное ориентирование в Беларуси" width="50" height="45"></a></div>
             <div class="d-td"><a target="_blank" href="https://betta.by/"><img title="BETTA OCR RACE — это гонка с препятствиями" src="../images/bet.png" alt="BETTA OCR RACE — это новая гонка с препятствиями" width="45" height="45"></a></div>
            </div>    
         </div>
	           <div><br><br>
			      <p><a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.by/pogoda/26027" target="_blank"><img src="https://info.weather.yandex.net/26027/4_white.ru.png?domain=ua"  alt="Яндекс.Погода"/><img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt="" /></a> </p>
				</div>-->			
		</div>
	</div> 
		   <div id="line_9" ><h4>© КЛБ &laquo;Свитанок&raquo; г.Жлобин, 2018-2019.</h4> 
		       <div id="sch1">  
			 	 <p>
						    <script >
						    document.write("<a href='//www.liveinternet.ru/click' "+
						    "target=_blank><img src='//counter.yadro.ru/hit?t11.6;r"+
						    escape(document.referrer)+((typeof(screen)=="undefined")?"":
						    ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
						    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
						    ";h"+escape(document.title.substring(0,150))+";"+Math.random()+
					    	"' alt='' title='LiveInternet: показано число просмотров за 24"+
					        " часа, посетителей за 24 часа и за сегодня' "+
						    "border='0' width='88' height='31'><\/a>")
						</script>
				 </p>
			  </div>
              <div id="sch2">
                         <p>
                            
                            <a href="https://top.mail.ru/jump?from=3062632">
                            <img src="//top-fwz1.mail.ru/counter?id=3062632;t=479;l=1" 
                            style="border:0;" height="31" width="88" alt="Рейтинг@Mail.ru" /></a>
                            
                         </p>
              </div>
              <div id="sch3">
                            <p>                              
                                <a href="https://metrika.yandex.ru/stat/?id=50681851&amp;from=informer"
                                target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/50681851/3_1_FFA020FF_FF8000FF_0_pageviews"
                                style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="50681851" data-lang="ru" /></a>
                                
                                <script >
                                    (function (d, w, c) {
                                        (w[c] = w[c] || []).push(function() {
                                            try {
                                                w.yaCounter50681851 = new Ya.Metrika2({
                                                    id:50681851,
                                                    clickmap:true,
                                                    trackLinks:true,
                                                    accurateTrackBounce:true,
                                                    webvisor:true
                                                });
                                            } catch(e) { }
                                        });
                                        var n = d.getElementsByTagName("script")[0],
                                            s = d.createElement("script"),
                                            f = function () { n.parentNode.insertBefore(s, n); };
                                        s.type = "text/javascript";
                                        s.async = true;
                                        s.src = "https://mc.yandex.ru/metrika/tag.js";
                                        if (w.opera == "[object Opera]") {
                                            d.addEventListener("DOMContentLoaded", f, false);
                                        } else { f(); }
                                    })(document, window, "yandex_metrika_callbacks2");
                                </script>
                                <noscript><div><img src="https://mc.yandex.ru/watch/50681851" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                            </p>    
              </div>
              <div id="sch4">
                         <p>
                         
                                <span id="hotlog_counter"></span>
                                <span id="hotlog_dyn"></span>
                                <script > var hot_s = document.createElement('script');
                                hot_s.type = 'text/javascript'; hot_s.async = true;
                                hot_s.src = 'http://js.hotlog.ru/dcounter/2573473.js';
                                hot_d = document.getElementById('hotlog_dyn');
                                hot_d.appendChild(hot_s);
                                </script>
                                <noscript>
                                <a href="http://click.hotlog.ru/?2573473" target="_blank">
                                <img src="http://hit20.hotlog.ru/cgi-bin/hotlog/count?s=2573473&im=313" 
                                title="HotLog" alt="HotLog"></a>
                                </noscript>
                                
                         </p>
              </div>
               
			</div>
	
</div><!--конец contener-->
</div><!--конец wripper-->
</body>
</html>