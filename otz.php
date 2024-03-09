<?php 
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);
	//session_set_cookie_params(10000);
	session_start();
	//$_SESSION['test'] = "hello";
	//var_dump($_SESSION);
	//echo("<br />");
	//var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Отзывы и комментарии">
	<meta name="keywords" content="Отзывы и комментарии">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css" />
    <title>КЛБ &laquo;Свитанок&raquo;-Отзывы и комментарии</title> 
	<!--<script src="js/jquery" defer></script>-->
	<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>-->
	<script src="js/cycle.js" defer></script>
	<!--<script src="js/slideshow.js" defer></script>-->	
    <script  src="js/index.js"></script>
	<link rel="shortcut icon" href="images/favicon.ico">
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
	<body id="fon">
<!-- Progress -->
<div class="progress-top"></div>
<!--<div class="progress-right"></div>
<div class="progress-bottom"></div>
<div class="progress-left"></div>-->
	    <!--счетчик маил     -->    
	  <!-- Rating@Mail.ru counter -->
                        <script >
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
                        <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                             var js, fjs = d.getElementsByTagName(s)[0];
                             if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                             js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.1&appId=2252719901676582&autoLogAppEvents=1';
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
	<div id="wrapper"><!--начало wrapper-->
		<!--<div style="width:100%; height:1px; clear:both;"></div>--> <!-- выравниваем без обтекания -->
		<div id="header">
			<div id="line_1">
				<h1>Клуб любителей бега &laquo;Свитанок&raquo;</h1>
			</div>
			<div id="line_3">  
				<img loading='lazy' class="heardb" title="Если хочешь быть сильным — бегай, хочешь быть красивым — бегай, хочешь быть умным — бегай"  src="images/new2.png" alt="КЛБ Свитанок" width="120" height="120">
				<!--<div id="email">
					<h3>E-mail:</h3>
					<p><a href="mailto:vask@bmz.gomel.by">vask@bmz.gomel.by</a></p>
				</div>-->
				<div id="email">
                      <a target="_blank" title="Написать в telegram" href="https://t.me/vas_fam">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                          <linearGradient id="BiF7D16UlC0RZ_VqXJHnXa_oWiuH0jFiU0R_gr1" x1="9.858" x2="38.142" y1="9.858" y2="38.142"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#33bef0"></stop>
                            <stop offset="1" stop-color="#0a85d9"></stop>
                          </linearGradient>
                          <path fill="url(#BiF7D16UlC0RZ_VqXJHnXa_oWiuH0jFiU0R_gr1)"
                            d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z"></path>
                          <path
                            d="M10.119,23.466c8.155-3.695,17.733-7.704,19.208-8.284c3.252-1.279,4.67,0.028,4.448,2.113	c-0.273,2.555-1.567,9.99-2.363,15.317c-0.466,3.117-2.154,4.072-4.059,2.863c-1.445-0.917-6.413-4.17-7.72-5.282	c-0.891-0.758-1.512-1.608-0.88-2.474c0.185-0.253,0.658-0.763,0.921-1.017c1.319-1.278,1.141-1.553-0.454-0.412	c-0.19,0.136-1.292,0.935-1.745,1.237c-1.11,0.74-2.131,0.78-3.862,0.192c-1.416-0.481-2.776-0.852-3.634-1.223	C8.794,25.983,8.34,24.272,10.119,23.466z"
                            opacity=".05"></path>
                          <path
                            d="M10.836,23.591c7.572-3.385,16.884-7.264,18.246-7.813c3.264-1.318,4.465-0.536,4.114,2.011	c-0.326,2.358-1.483,9.654-2.294,14.545c-0.478,2.879-1.874,3.513-3.692,2.337c-1.139-0.734-5.723-3.754-6.835-4.633	c-0.86-0.679-1.751-1.463-0.71-2.598c0.348-0.379,2.27-2.234,3.707-3.614c0.833-0.801,0.536-1.196-0.469-0.508	c-1.843,1.263-4.858,3.262-5.396,3.625c-1.025,0.69-1.988,0.856-3.664,0.329c-1.321-0.416-2.597-0.819-3.262-1.078	C9.095,25.618,9.075,24.378,10.836,23.591z"
                            opacity=".07"></path>
                          <path fill="#fff"
                            d="M11.553,23.717c6.99-3.075,16.035-6.824,17.284-7.343c3.275-1.358,4.28-1.098,3.779,1.91	c-0.36,2.162-1.398,9.319-2.226,13.774c-0.491,2.642-1.593,2.955-3.325,1.812c-0.833-0.55-5.038-3.331-5.951-3.984	c-0.833-0.595-1.982-1.311-0.541-2.721c0.513-0.502,3.874-3.712,6.493-6.21c0.343-0.328-0.088-0.867-0.484-0.604	c-3.53,2.341-8.424,5.59-9.047,6.013c-0.941,0.639-1.845,0.932-3.467,0.466c-1.226-0.352-2.423-0.772-2.889-0.932	C9.384,25.282,9.81,24.484,11.553,23.717z">
                          </path>
                        </svg>
                      </a>
                      <h6>E-mail: <a href="mailto:vask@bmz.gomel.by" title="Написать на email">vask@bmz.gomel.by</a></h6>
                    </div>
				<div id="pic">
					<img loading='lazy' title="КЛБ Свитанок Жлобин" src="images/4.png"  alt="КЛБ Свитанок Жлобин" width="420" height="206">
				</div>
			</div>
			<div id="line_4">
        				<h5>Наши партнеры:</h5>
                <div class="carousel">
                  <div class="image-container" id="imgs">
                    <!--<img  class="img" src="img/image-1.png" />-->
                    <img src="img/image-1.png" />
                    <!-- <img  src="" />
                              <img  src="" />
                              <img  src="" />  -->
                  </div>
                  <div class="buttons-container">
                    <button id="left" class="btn">Prev</button>
                    <button id="right" class="btn">Next</button>
                  </div>
                </div>
			</div>
		</div>
		<!--Конец шапки-->
		<!--бегущая строка-->
			<!--<div id="line_5">
				<div class="marquee"><span><em>-->
				<?php 
				    //$db = mysqli_connect("localhost", "opros", "", "opros")  OR DIE("Не могу создать соединение2 ");
					//$db = mysqli_connect("localhost", "f0239595_opros", "111", "f0239595_opros")  OR DIE("Не могу создать соединение1 ");
					//	mysqli_set_charset($db, "utf8");
                    //    @mysqli_query ($db, 'set character_set_results = "utf8"');
					//    include('configinc.php');
					//	$result=mysqli_query($db,'SELECT * FROM `begstr` '); // запрос на выборку
					//	while($row=mysqli_fetch_array($result)){
					//	$begstr=$row['begstr'];
					//	}
				        //$begstr='Проверка работы бегущей строки'; 
					//echo ' КЛБ &laquo;Свитанок&raquo; '.$begstr;
					//mysqli_free_result($result); 
					//mysqli_close($db);
				?>
			<!--	</em></span>
				</div>
			</div>-->
			<div id="conteiner">
				<div id="line_6">
					<ul id="navbar">
						<li><a href="index.php">Главная</a></li>
						<li><a href="bprob.php">Положения</a></li>
						<li><a href="protn.php">Протоколы пробегов</a></li>
						<li><a href="foto.php">Фотогалерея</a></li>
                        <li><a href="video.php">Видео</a></li>
                        <li><a href="otchet.php">Отчёты о соревнованиях</a></li>
						<li><a href="pressa.php">Пресса о нас</a></li>
						<li><a href="farh20.php">Фото и видео архив</a></li>
						<li><a href="pst.php">Полезные статьи</a></li>
						<li><a href="nagr.php">Наши награды</a></li>
						<li><a href="onas.php">Контакты</a></li>
						<li><a href="otzkom.php">Отзывы и комментарии</a></li>
						<li><a href="obrsv.php">Обратная связь</a></li>
						<li><a href="klbm2019.php">КЛБ Матч СНГ</a></li>
						<li><a href="ns.php">Новости спорта</a></li>
					</ul>
				</div>
		    <div  id="line_7" >
	           	<?php
	           	        header('Content-Type: text/html; charset=utf-8');
                        $client  = @$_SERVER['HTTP_CLIENT_IP'];
    					$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    					$remote  = @$_SERVER['REMOTE_ADDR'];
    					$result1  = array('country'=>'', 'city'=>'');
    					if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
    					elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
    					else $ip = $remote;
    					$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
    					if($ip_data && $ip_data->geoplugin_request != null)
    					{
    						$result1 = $ip_data->geoplugin_request;
    					}
    			      $nameErr = $emailErr = $genderErr = $websiteErr = "";
                      $name = $email = $club= $clubs = $comment =  $msg = $website = "";
                      $poisk="";
				      $sortn = $sort= "";
					  $commentErr="";
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["name"])) {
                          $nameErr = "Введите имя";}
                          else {
                          $name = test_input($_POST["name"]);
                          // check if name only contains letters and whitespace
                          if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                            $nameErr = "<br/>Допустим ввод только букв и пробелов";
                                                                  }
                              }
                        if (empty($_POST["email"])) {
                          $emailErr = "Введите Email";
                        } else {
                          $email = test_input($_POST["email"]);
                          // check if e-mail address is well-formed
                          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr = "неверный формат электронной почты";
                          }
                        }
                        if(!empty($_POST['comment'])){
                            if (empty($_POST["comment"])) {
                              echo "Введите коментарий";}
                            else {
                              $comment = strtolower(test_input($_POST["comment"]));
                            }
    						//$comment = 'hihowareyoudoingtoday?';
    						$needles = array('хакер','.co','.ru','.com','.by','.net','.ua','.me','.se','http','кинокрад','хакер','hacker','xyz');
    						$matches = 0;
    						foreach($needles as $needle) { // create a loop, foreach string
    						//if(strpos($comment, $needle) !== false) { // use stripos and compare it in the parent string
    						
    						if(strpos($comment, $needle) == true) { // use stripos and compare it in the parent string
    						//$matches++; // if it matches then increment.
    						$aa=$needle;
    						//echo 'Недопустимое слово в сообщении: '.$aa;
    						exit("<br/>Недопустимое слово в сообщении: $aa");}
    						//}
    						//}
    						//echo 'Число вхождений'.$matches; // 4
    						else {
    								//echo "Вхождение не найдено.";
    								$commentErr = "<br/>Ваше сообщение опубликовано!!!";
    							}	 
    						}
                        }
					
                        if (empty($_POST["gender"])) {
                          $genderErr = "Требуется выбор";
                        } else {
                          $gender = test_input($_POST["gender"]);
                        }
                          if (empty($_POST["kapcha"])) {
                                  //echo "Введите капчу";}
    							  exit("<br/>Введите проверочное слово");}
                                else {
                                  
    							   $kap = test_input($_POST["kapcha"]);
    							 // echo 'Тест '.$kap;
                                }
        						//echo '<br/>Тест1 '.$_SESSION['rand_code'];
        						if($kap === $_SESSION['rand_code']) {
    								echo ' Проверочное слово введено верно';
    							} else {
    								echo("Проверочное слово введено не верно!");
    								die;
    							}
                        }
						
                      function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                      }
                           function gws_daterus() {
                      	//-- определяем массив для месяцев --
                      	$mounth=array(
                      	"01" => "января", "02" => "февраля", "03" => "марта",
                      	"04" => "апреля", "05" => "мая", "06" => "июня",
                      	"07" => "июля", "08" => "августа", "09" => "сентября",
                      	"10" => "октября", "11" => "ноября", "12" => "декабря"
                      	);
                      	//-- определяем массив для дней недели -- 
                      	$week=array(
                      	воскресенье, понедельник, вторник, среда,
                      	четверг, пятница, суббота,
                      	);
                      	$date_m=strtr(date('m'), $mounth);
                      	$date_w=$week[date('w')];
                      	$date_d=date('d');
                      	$today = date("H:i:s"); 
                      	//return $date_d." ".$date_m.", ".$date_w;
                      	return $date_d." ".$date_m.", ".$date_w." ".$today; 
                      	}
                  ?>
                  		<style>
						   INPUT:focus { 
							color: #03AA33; /* Красный цвет текста */
							}
							textarea:focus { 
							color: #03AA33; /* Красный цвет текста */
							}
						</style>
                        <h2 id="top"><span style="color: crimson; font-size: 25px">Мини чат.  Добавить отзыв или комментарий.</span></h2>
                        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                          <fieldset>  
                          <legend><span style="color: #03AA33; font-size: 15px">Контактная информация</span></legend>
                          <h4 align="center"><span class="error">* Обязательно для заполнения</span></h4>
                          <span style="color: #03AA33; font-size: 18px">Ваше имя:</font> <input type="text" required placeholder="Имя" name="name" autofocus /></span><span class="error">* <?php echo $nameErr;?></span>
                          <br><br>
                          <h4 align="center"><span class="error">Ваш E-Mail не будет опубликован</span></h4>
                          <span style="color: #03AA33; font-size: 18px; ">Ваш E-Mail:</font> <input  required type="email" placeholder="E-mail" name="email" /></span><span class="error">* <?php echo $emailErr;?></span>
                          </fieldset>
                          <fieldset>
                          <legend><span style="color: #03AA33; font-size: 15px">Отзыв</span></legend> 
                          <h5 align="center"><textarea name="comment" required minlength="15" style="resize:none" placeholder="Введите отзыв" rows="7" cols="60" ></textarea><span class="error">* <?php echo $commentErr;?></span></h5>
                          </fieldset>
                          <fieldset>
                          <legend><span style="color: #03AA33; font-size: 15px">Выбор клуба</span></legend>      
                          <font color=#03AA33 size="4pt">Ваш клуб:</font>
                          <input type="radio" name="gender"  value="КЛБ Свитанок" checked><span style="color:#2C4480; font-size:15px" />КЛБ Свитанок</span>
                          <input type="radio" name="gender"  value="Другой"><span style="color: #2C4480; font-size:15px" />Другой</span><br>
						  <span class="error">* Ваш выбор <?php echo $genderErr;?></span><br>
						  </fieldset>
						  <fieldset>
						  <legend><span style="color: #03AA33; font-size: 15px">Сортировка отзывов</span></legend>    
						  <span style="color: #1A7889; font-size:15px"><input type="radio" name="sort" value="1" checked />Сортировка cамые новые</span><br>
						  <span style="color: #1A7889; font-size:15px"><input type="radio" name="sort" value="2" />Сортировка cамые старые</span><br>
                          </fieldset>
                         </fieldset>
							  <fieldset>
							  <legend><span style="color: #03AA33; font-size: 15px">Ввод проверочного кода</span></legend>      
	    						  <h4><span style="color: #03AA33; font-size: 15px">Введите код с картинки</span></h4>
		    					  <img src = "adm/captcha.php" align="middle"/>
			    				  <input type = "text" name = "kapcha" placeholder="Введите код..." />
    						   </fieldset>	
                          <input type="submit"  class="b1" name="submit"  value="Добавить отзыв" />  
                        </form>
					    <?php
                              	$ip = $_SERVER['REMOTE_ADDR']; 
        						$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip.'?lang=ru'));
        						if($query && $query['status'] == 'success') {
        						//echo 'Привет, посетитель из '.$query['country'].', '.$query['city'].'!';
        						$mesto=$query['city'];
        						//echo 'Привет, посетитель  '.$query['country'].', '.$mesto.'!';
        						//} else {
        						//echo 'Не удалось определить локацию';
        						}
                              $poisk = $_POST['club'];
                              echo "<br>";
                              echo $poisk;
                                //-------Отправка сообщения на мою электронную почту--------------------------------------------------------------- //  
                                $adminemail="kaleev.fam@mail.ru";  // e-mail админа 
                                //$datetime=gws_daterus(date).' '.date("Y-m-d");
                                //$dat=date("H:i:S d.m.Y");
                                $dat=date("Y-m-d H:i:s");
								
                                //echo "$dat";
                                //$god=date("Y-m-d");
                                //date("Y-m-d");
                                // Принимаем данные с формы 
                                $name=$_POST['name']; 
                                $email=$_POST['email']; 
                                $msg=$_POST['comment']; 
                                  
                                //if (!empty($msg))
                                //if ($_POST['comment'] !== ' ')
                                  //mail($adminemail, $name, $email, $msg); 
                                //-----------------------------------------------------------------------------------------------------------------//
                              //$db = mysqli_connect ($db_host, $db_user, "111", $db_name) or die ("Невозможно подключиться к БД");
							  //Подключение на sprinthost
							  //$db = mysqli_connect("localhost", "f0239595_opros", "111", "f0239595_opros")  OR DIE("Не могу создать соединение1 ");
							  //Подключение на endels
							  //$db = mysqli_connect("localhost", "opros", "", "opros")  OR DIE("Не могу создать соединение2 ");
							  mysqli_set_charset($db, "utf8");
                              @mysqli_query ($db, 'set character_set_results = "utf8"');
                              if (empty($_POST["name"])) {	 
                                  $nameErr = "Введите имя";
                                } else {
                                    $to = "kaleev.fam@mail.ru";
                                  $subject = "Robot - Робот";
                                  $headers = "From: От кого письмо ".$name." <svitanok.01sh.ru> \r\nContent-type: text/html; charset=UTF-8 \r\n";
                                  //mail ($to, $email, $msg, $headers);
                                  mysqli_query($db,"INSERT INTO `otz` (`name`,`email`,`otz`,`gender`,`datetime`,`mesto`) VALUES ('$name','$email','$msg','$gender','$dat','$mesto')");
                                  //mysqli_query($db,"INSERT INTO `otz` (`name`,`email`,`otz`,`gender`,`datetime`) VALUES ('$name','$email','$comment','$gender','$datetime')");
                                  // check if name only contains letters and whitespace
                                  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                                    $nameErr = "Допустим ввод только букв и пробелов";
                                  }
                                }
			        			 $sort = $_POST["sort"];
			        			 	$sortn='ORDER by `datetime` DESC';
				    			 if ($sort=="1") {
					        		$sortn='ORDER by `datetime` DESC';
				    			 } 
				    			 if ($sort=="2") {
					        		$sortn='ORDER by `datetime` ASC';
				    			 } 	
									$result=mysqli_query($db,'SELECT `name`,`mesto`,DATE_FORMAT(`datetime`,"%H:%s %d.%m.%Y") as data1,`otz` FROM `otz` '.$sortn.''); // запрос на выборку
									//"Y/m/d H:i:s"
									// $result=mysqli_query($db,'SELECT * FROM `otz` ORDER by nn DESC'); // запрос на выборку
                                        $num_rowsi = mysqli_num_rows($result);
                                   		while($row=mysqli_fetch_array($result))
                                		{
                                   		    //echo '<p align="left" style="background: linear-gradient(to top, #FDEAA8 10%, #FFFDD0 80%, #FDEAA8 10%);");</p>';
                                			echo '<p align="left" style="background: linear-gradient(to top, #CDEAA8 20%, #F4FFFF 50%, #CDEAA8 80%);"><font color=#03AA33 size="3pt">Написал:</font><font color=#2C4480 size="4pt"> &nbsp;'.$row["name"].'</font>&nbsp;<font color=#03AA33 size="4pt">('.$row["data1"].') '.$row["mesto"].'</font></p>';
                                			echo '<div ><p id="ot" align="justify" style="background-color:#FDEAA8;">&nbsp;<font color=#911E42 size="3pt">'.$row["otz"].'</font></p></div>';
        	    		                }
                                		echo '<br><h4><font color=#03AA33 size="4pt">Всего отзывов: &nbsp;&nbsp;'.$num_rowsi.'</font></h4>';
                                /* закрываем подключение */
                                mysqli_close($db);	
                        ?>
                            <!-- LikeBtn.com BEGIN -->
                            <span class="likebtn-wrapper" data-theme="nero" data-lang="ru" data-white_label="true" data-identifier="item_1"></span>
                            <script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
                            <!-- LikeBtn.com END -->
						
		            <br><br>
					<h2>Отзывы и коментарии через facebook.</h2>	<br>
					<!--Коментарии файсбук  -->
					<div class="fb-comments" data-href="https://svitanok.01sh.ru" data-width="500" data-numposts="5"></div><br>
					<a id="up" href="#top"> &#8593; ВВЕРХ </a>
		    </div>
        <div  id="line_8" ><h3>Наши друзья и партнеры: </h3>		
          <div class="d-table">
           <div class="d-tr">
		<div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://www.klbamatar.by/">   <img title="КЛБ Аматар" src="images/logo_amatar.png" alt="КЛБ Аматар"></a></div>
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://www.klbviktoria.com/"><img title="Клуб бега Виктория" src="images/klbviktoria.png" alt="Клуб бега Виктория"  ></a></div>
              <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://ocrbelarus.by"><img title="ОСО «БЕЛОРУССКАЯ ФЕДЕРАЦИЯ ГОНОК С ПРЕПЯТСТВИЯМИ»" src="images/fpg.png" alt="БЕЛОРУССКАЯ ФЕДЕРАЦИЯ ГОНОК С ПРЕПЯТСТВИЯМИ"></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://www.nogibogi.com"><img title="Сайт Ноги-боги" src="images/nogib.png" alt="Сайт Ноги-боги"  ></a></div>
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://www.bfla.eu/"><img title="Белорусская федерация легкой атлетики" src="images/logo1_bfla.gif" alt="Белорусская федерация легкой атлетики"  ></a></div>
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://www.42195.by"><img title="Сайт 42195" src="images/42195.png" alt="Сайт 42195"  ></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="https://www.arf.by/"><img title="Федерация приключенческих гонок" src="images/arf-h120-int.png" alt="Федерация приключенческих гонок" width="50" height="45" ></a></div>
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://www.tri.by"><img title="Белорусская федерация триатлона" src="images/tribylogo2.png" alt="Белорусская федерация триатлона" width="45" height="45" ></a></div>
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://www.probeg.org/">     <img title="ПроБЕГ в России и мире" src="images/5.gif" alt="ПроБЕГ в России и мире"   ></a></div>
           </div>
           <div class="d-tr">
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="#"><img title="КЛБ Крыница Бобруйск" src="images/belshina.jpg" alt="КЛБ Крыница Бобруйск" width="50" height="45" ></a></div>
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://www.run4fun.by/"><img title="Клуб Run4Fun Барановичи" src="images/R4F.jpg" alt="Клуб Run4Fun Барановичи" width="45" height="45" ></a></div>
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="https://metallurg.zhlobin.by"><img title="ХК Металлург Жлобин" src="images/mz.png" alt="ХК Металлург Жлобин" width="45" height="45"></a></div>
           </div>
           <div class="d-tr">
              <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://bfnw.by"><img title="Федерация скандинавской ходьбы" src="images/sh.png" alt="Федерация скандинавской ходьбы" width="50" height="45"></a></div>
              <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="https://mmazhlobin.by/"><img title="MMA Жлобин | Клуб смешанных единоборств" src="images/mma.jpg" alt="MMA Жлобин | Клуб смешанных единоборств" width="45" height="45"></a></div>
              <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="https://vk.com/yogazhl"><img title="Йога студия город Жлобин в VK" src="images/yo.jpg" alt="YO! YOGA студия город Жлобин в VK" width="45" height="45"  ></a></div>
            </div>
            <div class="d-tr">
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="http://www.obelarus.net"><img title="Спортивное ориентирование в Беларуси" src="images/or.png" alt="Спортивное ориентирование в Беларуси" width="50" height="45"></a></div>
             <div class="d-td"><a target="_blank" rel="noopener noreferrer" href="https://betta.by/"><img title="BETTA OCR RACE — это гонка с препятствиями" src="images/bet.png" alt="BETTA OCR RACE — это новая гонка с препятствиями" width="45" height="45"></a></div>
            </div>    
        </div>
 	   <br><br>
 	    <?php
 	      echo "Страна: " .$ip_data->geoplugin_countryName. "<br/>"; 
          //echo "Город: " .$ip_data->geoplugin_city. "<br/>";    
          echo "Область: " .$ip_data->geoplugin_regionName. "<br/>";
        ?>
        
        <?php
            $ip = $_SERVER['REMOTE_ADDR']; 
            $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip.'?lang=ru'));
            if($query && $query['status'] == 'success') {
                echo 'Привет, посетитель из '.$query['country'].', '.$query['city'].'!';
                } else {
                echo 'Не удалось определить локацию';
            }
        ?>
        
 	    <div><!--
			    <p><a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.by/pogoda/26966" target="_blank" rel="noopener noreferrer"><img src="https://info.weather.yandex.net/26966/4_white.ru.png?domain=ua"  alt="Яндекс.Погода"/><img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt="" /></a> </p></div>			
			-->
			</div>
	   </div>
	   </div> 
		  <div id="line_9" ><h4>© КЛБ &laquo;Свитанок&raquo; г.Жлобин, 2018-2019.</h4> 
		       <div id="sch1">  
			 	 <p><!--LiveInternet counter-->
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
						</script><!--/LiveInternet-->
				 </p>
			  </div>
              <div id="sch2">
                         <p>
                            <!-- Rating@Mail.ru logo -->
                            <a href="https://top.mail.ru/jump?from=3062632">
                            <img src="//top-fwz1.mail.ru/counter?id=3062632;t=479;l=1" 
                            style="border:0;" height="31" width="88" alt="Рейтинг@Mail.ru" /></a>
                            <!-- //Rating@Mail.ru logo -->
                         </p>
              </div>
              <div id="sch3">
                                                          <!-- Yandex.Metrika informer -->
                                <a href="https://metrika.yandex.ru/stat/?id=50681851&amp;from=informer"
                                target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/50681851/3_1_FFA020FF_FF8000FF_0_pageviews"
                                style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="50681851" data-lang="ru" /></a>
                                <!-- /Yandex.Metrika informer -->
                                <!-- Yandex.Metrika counter -->
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
                                <!-- /Yandex.Metrika counter -->
              </div>
               <div id="sch4">
                         <p>
                           <!-- HotLog -->
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
                                <!-- /HotLog -->
                         </p>
              </div>
               <div id="sch5">
                         <p>
                         </p>
              </div>
</div><!--конец wrapper-->
<script defer src="js/script_sl.js"></script>
</body>
</html>