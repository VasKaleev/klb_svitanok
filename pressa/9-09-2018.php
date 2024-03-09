<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
	<meta name="description" content="Статья о КЛБ Свитанок Минский полумарафон 9 сентября 2018">
	<meta name="keywords" content="Статья о КЛБ Свитанок Минский полумарафон 9 сентября 2018">
	<link rel="stylesheet" href="../style.css" />
    <title>КЛБ &laquo;Свитанок&raquo;-Минский полумарафон 9.09.2018 </title> 
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
					mysqli_free_result($result); 
					mysqli_close($db);
				?>
				</em></span>
				</div>
			</div>
			<div id="conteiner">
				<div id="line_6">
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
					</ul>
			    </div>
		    <div  id="line_7" >
					<h2>БЕГИ, ИДИ, ПОЛЗИ, НО НЕ СДАВАЙСЯ!</h2><br>
					<p>По материалам газеты "Металлург" от 13/09/2018.</p>
				    <img style="margin:0px 10px" src="../images/9-09-2018.jpg"  alt= "КЛБ Свитанок"/>
					<pre><span style="color: #4a76a8; font-size: 1.1em">Команда клуба Свитанок на Минском полумарафоне-2018.</span></pre><br>
					<p>9 сентября в столице прошел Минский полумарафон-2018. На старт вышли рекордные 35 тыс. человек из 53 стран мира. БМЗ на этом празднике спорта представили 42 человека. Команда завода под патронажем КЛБ «Свитанок» и профкома БМЗ ежегодно принимает участие в полумарафоне, в этот раз «Металлург» отправился вместе с заводчанами покорять беговые рубежи. О впечатлениях — от первого лица.</p>
                    <p>Оказывается, самое сложное в спорте — ранний подъем. Отправление автобуса в 5 утра, и когда будильник в воскресенье звенит в такую рань, кажется, что не так уж тебе и нужно куда-то ехать. Но собираюсь с силами, встаю, иду. По дороге встречаю попутчиков на сегодняшний день. В темноте присматриваюсь — наши ветераны! Бодро шагают, хохочут, весело здороваются. Компания намечается замечательная.</p>
                    <p>В Минске непривычно тихо: движение транспорта в центре ограничено. Место для парковки находим с трудом, даже с помощью представителей дежурных ГАИ. Через 40 минут по приезду наши первые участники, замахнувшиеся на самую длинную дистанцию полумарафона — 21 км — стартуют. Хотя пятикилометровый забег, на который заявилась большая часть команды, начинается только через 3,5 часа, выдвигаемся следом за ними: надо поддержать своих. Болельщиков в этом году как никогда много: вдоль ограничительных лент уже с самого утра собрались люди, подбадривающие участников первого старта. По окончанию дистанции наши спортсмены скажут, что трасса в этом году сложная, извилистая, с подъемами и спусками. Максим Комаров, оператор ПУ на стане 320, в рамках этого забега установил свой личный рекорд: 21 км выбежал за 1 час 27 минут и стал 65-ым финишировавшим в своей категории (а это, на минуточку, 982 спортсмена!).</p>
                    <p>Следом бежит «десятка». В числе стартующих на 10,5 км и несколько бмзовцев. Заместитель генерального директора по металлургическому производству Виктор Старков, традиционно принимающий участие в полумарафоне, в своей возрастной категории занял 5-е место.</p>
                    <p>Наступило время самого массового забега: к стартовой арке выстроилась тридцатитысячная толпа. Встаешь на носочки, чтобы заглянуть поверх голов туда, вдаль, и конца не видишь! Ветераны БМЗ, пританцовывающие, делятся впечатлениями: «Нам так нравится! Уже успели дать интервью!». Полдень, солнце жарит, а среди такого количество людей еще и душно. В ожидании старта участников развлекают разминкой, запускают большие надувные шары над толпой. И вот — слышен залп, в воздух взметается серебряное конфетти. На «пятерку» обычно выходят самые интересные участники: бегут коробками, выкрикивая лозунги, представители военных факультетов университетов столицы, бегут в костюмах, бегут команды предприятий. Волонтеры, стоящие по всей длине дистанции, размахивают плакатами с забавными надписями, подбадривают. К ним присоединяются простые горожане и те, кто уже преодолел забеги на 21 и 10 км. В толпе хоть и весело, но все же неудобно: из-за бегущих впереди приходится постоянно снижать темп, выходить за газоны, тротуары, так как на трассу люди не вмещались. В конце — увесистая медаль и такая желанная бутылка воды. На дистанции 5,5 км в 20-ку лучших попали трое жлобинчан.</p>
                    <p>Полумарафон, приуроченный к Дню города, проходит уже в четвертый раз, и заводская команда каждый год принимает в нем участие. Надеемся, что в следующем году под развернутым флагом БМЗ побежит еще больше заводчан!</p>
                    <p>Успешно добежала до финиша Алина ВОРОНИНА.</p>
                    
                     <div>
                       <br>
                       <!-- Put this script tag to the <head> of your page -->
                            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
                            
                            <script type="text/javascript">
                              VK.init({apiId: 6717926, onlyWidgets: true});
                            </script>
                            
                            <!-- Put this div tag to the place, where the Like block will be -->
                            <div id="vk_like"></div>
                            <script type="text/javascript">
                            VK.Widgets.Like("vk_like", {type: "button", height: 20});
                            </script>
                        <br>    
            </div>    
		    </div>
        <div  id="line_8" ><h3>Наши друзья и партнеры: </h3>		
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
			    <p><a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.by/pogoda/26027" target="_blank"><img src="https://info.weather.yandex.net/26027/4_white.ru.png?domain=ua"  alt="Яндекс.Погода"/><img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt="" /></a> </p></div>			
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
</body>
</html>