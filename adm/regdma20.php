<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
	<meta name="description" content="КЛБ Свитанок-регистрация 20 км не первенство БМЗ">
	<meta name="keywords" content="КЛБ Свитанок-регистрация 20 км не первенство БМЗ">
	<link rel="stylesheet" href="../style.css" />
    <title>КЛБ Свитанок-регистрация 20 км не первенство БМЗ</title> 
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
				<a href="../index.php"><img src="../images/0981.png"  alt="foto1" width="171" height="115"/> </a>
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
				    <h2><span style="font-family: 'Vollkorn', Serif; color: crimson; font-size: 25px">Редактирование данных  участников пробега день металлурга г.Жлобин 20 км </h2></span><br>
		        		
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
					 </style> 
					 
                    <?php
							//ini_set('display_errors', 'On'); // сообщения с ошибками будут показываться
							ini_set('display_errors', 'Off'); // теперь сообщений НЕ будет
							$link=$db;
							// Ругаемся, если соединение установить не удалось
							if (!$link) {
							  echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
							  exit;
							}

							//Если переменная Name передана
							//if (isset($_POST["FIO"])) {
							if (isset($_POST["fam"])) {	
							  //Если это запрос на обновление, то обновляем
							  if (isset($_GET['red'])) {
								$sql = mysqli_query($link, "UPDATE `dme20km` SET `dist` = '{$_POST['dist']}',`fam` = '{$_POST['fam']}',`ima` = '{$_POST['ima']}',`otch` = '{$_POST['otch']}',`pol` = '{$_POST['pol']}',`rabota` = '{$_POST['rabota']}',`nomer` = '{$_POST['nomer']}',`datar` = '{$_POST['datar']}',`let` = '{$_POST['let']}',`paspnom` = '{$_POST['paspnom']}',`datvidp` = '{$_POST['datvidp']}',`kemvidp` = '{$_POST['kemvidp']}',`adres` = '{$_POST['adres']}',`klb` = '{$_POST['klb']}' WHERE `id_id`={$_GET['red']}");
							  } else {
								//Иначе вставляем данные, подставляя их в запрос
								$sql = mysqli_query($link, "INSERT INTO `dme20km` (`dist`,`fam`,`ima`,`otch`,`pol`,`rabota`, `nomer`,`datar`,`let`,`paspnom`,`datvidp`,`kemvidp`, `adres`, `klb`) VALUES ('{$_POST['dist']}','{$_POST['fam']}','{$_POST['ima']}','{$_POST['otch']}','{$_POST['pol']}','{$_POST['rabota']}', '{$_POST['nomer']}','{$_POST['datar']}','{$_POST['let']}','{$_POST['paspnom']}','{$_POST['datvidp']}','{$_POST['kemvidp']}', '{$_POST['adres']}', '{$_POST['klb']}')");
							  }

							  //Если вставка прошла успешно
							  if ($sql) {
								echo '<p>Успешно!</p>';
							  } else {
								echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
							  }
							}

							//Удаляем, если что
							if (isset($_GET['del'])) {
							  $sql = mysqli_query($link, "DELETE FROM `dme20km` WHERE `id_id` = {$_GET['del']}");
							  if ($sql) {
								echo "<p>Запись удалена.</p>";
							  } else {
								echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
							  }
							}

							//Если передана переменная red, то надо обновлять данные. Для начала достанем их из БД
							if (isset($_GET['red'])) {
							  $sql = mysqli_query($link, "SELECT `id_id`,`dist`, `fam`,`ima`,`otch`,`pol`,`rabota`, `nomer`,`datar`,`let`,`paspnom`,`datvidp`,`kemvidp`, `adres`, `klb` FROM `dme20km` WHERE `id_id`={$_GET['red']}");
							  $product = mysqli_fetch_array($sql);
							}
						  ?>
						  <?
						      if (strlen($product['pol'])>=1) {
								  $product['pol']='';
							  }
						  ?>
						  <form action="" method="post">
							<table>
							  <tr>
								<td>Дистанция
								 <input type="number" size="2" name="dist"  min="20" max="20"  step="0" value="<?= isset($_GET['red']) ? $product['dist'] : ''; ?>">
								</td>
							  </tr>
							  <tr>
								<td>Фамилия
								   <input type="text" size="20" name="fam"  value="<?= isset($_GET['red']) ? $product['fam'] : ''; ?>">
								</td>
							  	<td>Имя
								   <input type="text" size="20" name="ima"  value="<?= isset($_GET['red']) ? $product['ima'] : ''; ?>">
								</td>
							 	<td>Отчество
								   <input type="text" size="20" name="otch"  value="<?= isset($_GET['red']) ? $product['otch'] : ''; ?>">
								</td>
							  </tr>
							   <tr>
								<td>Пол
								   <input type="radio" name="pol"  value="m<?= isset($_GET['red']) ? $product['pol'] : ''; ?>" checked> M <input type="radio"  name="pol"  value="f<?= isset($_GET['red']) ? $product['pol'] : ''; ?>" > Ж 
								</td>
							  	<td>Место работы
								   <input type="text" size="20" name="rabota"  value="<?= isset($_GET['red']) ? $product['rabota'] : ''; ?>">
								</td>
								<td>Старт номер
								   <input type="number" size="5" name="nomer"  min="100" max="199" step="1" value="<?= isset($_GET['red']) ? $product['nomer'] : ''; ?>">
								</td>
							  </tr>
							  <tr>
								<td>Дата рождения
								  <input type="date" size="12" name="datar"  value="<?= isset($_GET['red']) ? $product['datar'] : ''; ?>">
								</td>
							  <td>Полных лет
								 <input type="number" size="5" name="let"  min="16" max="85" step="1" value="<?= isset($_GET['red']) ? $product['let'] : ''; ?>">
							   </td>
	    					  <td>Номер пасп
								<input type="text" size="10" name="paspnom"  value="<?= isset($_GET['red']) ? $product['paspnom'] : ''; ?>">
							  </td>
							  <tr>
							  <td>Дата выдачи пасп
								<input type="date" size="10" name="datvidp"  value="<?= isset($_GET['red']) ? $product['datvidp'] : ''; ?>">
							  </td>
							  <td>Кем выдан пасп
								<input type="text" size="50" name="kemvidp"  value="<?= isset($_GET['red']) ? $product['kemvidp'] : ''; ?>">
							  </td>
							  <td>Дом адрес
								<input type="text" size="40" name="adres"  value="<?= isset($_GET['red']) ? $product['adres'] : ''; ?>">
							  </td>
							  </tr>
							  <tr>
							  <td>КЛБ
								<input type="text" size="12" name="klb"  value="<?= isset($_GET['red']) ? $product['klb'] : ''; ?>">
							  </td>
							  </tr>
							  <tr>
								<td colspan="2"><input type="submit" class="kn" value="Записать"></td>
							  </tr>
							</table>
						  </form>
						  <table >
						  <tr>
							<td width="5"><b id="r">№</b> </td>
							<td width="2"><b id="r">Дис</b></td>
							<td width="20"><b id="r">Фам</b></td>
							<td width="20"><b id="r">Имя</b></td>
							<td width="20"><b id="r">Отч</b></td>
							<td width="20"><b id="r">Пол</b></td>
							<td width="20"><b id="r">Место работы</b></td>
							<td width="15"><b id="r">Старт номер</b></td>
							<td width="12"><b id="r">Дата рожд</b></td>
							<td width="15"><b id="r">Полн лет</b></td>
							<td width="15"><b id="r">Номер паспорта</b></td>
							<td width="15"><b id="r">Дата выд пасп</b></td>
							<td width="15"><b id="r">Кем выд пасп</b></td>
							<td width="15"><b id="r">Дом адрес</b></td>
							<td width="15"><b id="r">КЛБ</b></td>
						  </tr>
						  <?php
						  //Получаем данные
						  $sql = mysqli_query($link, 'SELECT `id_id`, `dist`,`fam`,`ima`,`otch`,`pol`,`rabota`, `nomer`,`datar`,`let`,`paspnom`,`datvidp`,`kemvidp`, `adres`, `klb` FROM `dme20km` ORDER by `let`,`pol`,`fam`,`nomer` ASC');
						  $np=0;
						  
						  while( $result = mysqli_fetch_array( $sql ) ){
							  $np++;
						 	   echo '<tr><td>&nbsp;'.$np.'</td><td>'.$result['dist'].'</td><td>'.$result['fam'].'</td><td>'.$result['ima'].'</td><td>'.$result['otch'].'</td><td>'.$result['pol'].'</td><td>'.$result['rabota'].'</td><td>'.$result['nomer'].'</td><td>'.$result['datar'].'</td><td>'.$result['let'].'</td><td>'.$result['paspnom'].'</td><td>'.$result['datvidp'].'</td><td>'.$result['kemvidp'].'</td><td>'.$result['adres'].'</td><td>'.$result['klb'].'</td><td><a href=?del='.$result['id_id'].'>Удалить</a> - <a href=?red='.$result['id_id'].'>Редактировать</a></td></tr>';
    						  }
						  mysqli_free_result($sql); 
						  mysqli_close($link);
						  ?>
						  </table>
						  <p><a href="?add=new">Добавить новую запись</a></p>
						
					<hr>
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