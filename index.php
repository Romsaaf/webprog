<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" id="highbr"> <!--<![endif]-->
	<head>
         <?php
                    session_start();
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, "https://ppp.spb.ru:1488/getAllCommandsSimplify");
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($ch);
                    curl_close($ch);
                    ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ППП &mdash; Первому Перваку Приготовиться</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Carousel -->
	<link rel="stylesheet" href="owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl-carousel/dist/assets/owl.theme.default.min.css">
	<!-- Init jQuery and jQuery UI -->
	<script type="text/javascript" src="jqForm/jquery/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="jqForm/jquery/jquery-ui-1.8.20.custom.min.js"></script>
	<link href="jqForm/jquery/ui-lightness/jquery-ui-1.8.20.custom.css" media="screen" rel="stylesheet" type="text/css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<header role="banner" id="fh5co-header">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default navbar-fixed-top navig">
					<div class="navbar-header">
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand" href="index.php"><img class="logo_m" src="images/Avatarka_PPP.png" style="height: 82px; margin-top: -40%; margin-left: -85%"></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" data-nav-section="home"><span>В начало</span></a></li>
							<li><a href="#" data-nav-section="about"><span>О проекте</span></a></li>
							<li><a href="#" data-nav-section="dates"><span>Даты</span></a></li>
                            <li><a href="#" data-nav-section="team"><span>Наша команда</span></a></li>
                          <!--  <li><a href="#" data-nav-section = "bready"><span>Уже готовы к бою</span></a></li> -->
                            <li><a class="external" href="regg.php"><span>Регистрация</span></a></li>
                            <li><a class="external" href="auth/banner.php"><span>Профиль</span></a></li>
                        </ul>
					</div>
				</nav>
			</div>
	  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/spa_ppp.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1 class="animate-box"><span class="big">ППП</span> <br><span style="font-size: 18px">Первому Перваку Приготовиться - Первый неклассический городской квест</span></h1>
							<h2 class="animate-box" style="font-size: 22px">Сделано с любовью</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="fh5co-services" data-section="about">
		<div class="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="box-services">
							<div class="fh5co-post animate-box">
								<h3>Десять. Девять. Восемь. Семь. <br>
                                    Каждая минута на счету. Готовы?</h3>
								<p>Прошло уже несколько месяцев с тех пор, как произошел сбой. Герои и чудовища других миров стучатся к нам в окна и лезут в двери. Должно быть, вам интересно, как это произошло… Ну, сами напросились. Слушайте.</p>
							</div>
						</div>

						<div class="box-services">
							<div class="fh5co-post animate-box">
								<p>Несколько недель назад, 13 сентября, наши сисадмины обнаружили ошибку в матрице. Начиналось с малого - 2-3 аномалии в день, по 15 минут. Наши люди выезжали и оперативно разбирались с… “проблемами”. Но ситуация ухудшается. Теперь повсюду дежурят наши патрули. Прогнозируемый пик активности - 13 октября, ровно месяц с начала всей этой истории. После этого <em>игра будет окончена</em>. </p>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="box-services">
							<div class="fh5co-post animate-box">
								<p>Наше эффективнейшее оружие в этой ситуации - информация. Время вооружиться и тебе, новобранец.
                                </p>
							</div>
						</div>

						<div class="box-services">
							<div class="fh5co-post animate-box">
								<p>Время и место начала квеста появится у тебя в личном кабинете. Каждая аномалия открыта ровно 15 минут, и если вы не успеете… Ну, эту проблему будем решать на месте.
                                    На дорогу между аномалиями вам тоже будет дано <u>ровно 15 минут</u>. Для входа в аномалию <strong>бросьте вызов</strong> боссам.
                                    Пожалуй, это все, что вам надо знать. Удачи.
                                </p>
							</div>
						</div>
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="box-services">
                                <div class="fh5co-post animate-box">
                                    <p>
                                        <h3>Герой, вот твой план действий: </h3>
                                        <br>1. Собери команду из 4-6 человек.
                                        <br>2. Выберите капитана и зарегистрируйтесь в системе. Следите за обновлениями <a href="https://vk.com/first_student_ready"> группы</a>.
                                        <br>3. Вскоре информация о месте и времени (уникально для каждой команды!) появится в личном кабинете.
                                        <br>4. Будьте на этом месте в это время! Без опозданий - цена за ошибку слишком велика.
                                        <br>5. Брось вызов боссам и одолей их!
                                        По окончании станции в ЛК появится информация о вашей следующей цели.
                                        <br>6. Пройдите весь маршрут и выиграйте главный приз! Помни - <em>время имеет значение</em>.
                                    </p>
                                </div>
                            </div>
					</div>
				</div>
			</div>
			<div class="container">	
				<div class="col-md-12 animate-box">
					<div class="owl-carousel">
								<div> <img src="images/image1.jpg"> </div>
  								<div> <img src="images/image2.jpg"> </div>
  								<div> <img src="images/image3.jpg"> </div>
  								<div> <img src="images/image4.jpg"> </div>
  								<div> <img src="images/image5.jpg"> </div>
  								<div> <img src="images/image6.jpg"> </div>
  								<div> <img src="images/image7.jpg"> </div>
  								<div> <img src="images/image8.jpg"> </div>
  								<div> <img src="images/image9.jpg"> </div>
  								<div> <img src="images/image10.jpg"> </div>
  								<div> <img src="images/image11.jpg"> </div>
  								<div> <img src="images/image12.jpg"> </div>
  								<div> <img src="images/image13.jpg"> </div>
  								<div> <img src="images/image14.jpg"> </div>
  								<div> <img src="images/image15.jpg"> </div>
  						</div>
  					</div>
				</div>
			</div>
		</section>
	<section id="fh5co-testimony" data-section="dates">
        <div style="background: whitesmoke" class="col-md-12 section-heading text-center">
            <h2 class="animate-box"><span>Главные даты проекта</span></h2>
        </div>
        <div class="gradient">
		<div class="container" style="background-image: url(images/ju_ppp.jpg);" id="dates_div">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<br><br><br>
					<div class="row">
						<div class="col-md-6 text-center">
							<div class="fh5co-post animate-box">
                                <div  class="div_text">
                                    <h3 class = "h_text">8.10.2019 - 12.10.2019</h3>
                                </div>
								<div class = "div_text">
                                    <p class = "p_text">Регистрация на квест.</p>
                                </div>
							</div>
						</div>
						<div class="col-md-6 text-center">
							<div class="fh5co-post animate-box">
                                <div  class = "div_text">
                                    <h3 class = "h_text">13.10.2019</h3>
                                </div>
                                <div class = "div_text">
                                    <p class = "p_text">День проведения.</p>
                                </div>
							</div>
						</div>
						<br><br>
						<div class="col-md-6 text-center">
							<div class="fh5co-post animate-box">
                                <div  class = "div_text">
                                    <h3 class = "h_text">18.10.2019</h3>
                                </div>
                                <div class = "div_text">
                                    <p class = "p_text">Подведение итогов.</p>
                                </div>
							</div>
						</div>
						<div class="col-md-6 text-center">
							<div class="fh5co-post animate-box">
                                <div  class = "div_text">
                                    <h3 class = "h_text">20.10.2019</h3>
                                </div>
                                <div class = "div_text">
                                    <p class = "p_text">Награждение.</p>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        </div>
	</section>
    <section id="fh5co-explore" data-section="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="animate-box">Над проектом работали</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext animate-box">
                            <h3>Вот эти замечательные люди.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12 animate-box">
                <div class="owl-carousel">
                    <div>
                        <img src="images/team-1.jpg">
                        <br>
                        <p>Курятов Евгений</p>
                        <p style="text-align: left">
                            Сила: 100% <br>
                            Ловкость: 100% <br>
                            Интеллект: 100% <br>
                            Ульта: Какать вверх ногами</p>
                    </div>
                    <div> <img src="images/team-2.jpg">
                        <br>
                        <p>Заболотских Председатель</p>
                        <p style="text-align: left">
                            Сила: 120% <br>
                            Ловкость: 300% <br>
                            Интеллект: 0,1% <br>
                            Ульта: Готов стать председателем вашей хуйни</p>
                    </div>
                    <div> <img src="images/team-3.jpg">
                        <br>
                        <p>Сафиуллин Роман</p>
                        <p style="text-align: left">
                            Сила: 300% <br>
                            Ловкость: 5% (если повезёт) <br>
                            Интеллект: Не измерить <br>
                            Ульта: Бежит, орёт</p>
                    </div>
                    <div> <img src="images/team-4.jpg">
                        <br>
                        <p>Казакова Софья</p>
                        <p style="text-align: left">
                            Сила: Физическая 20, моральная 700% <br>
                            Ловкость: 20% <br>
                            Интеллект: 300% <br>
                            Ульта: Заканчиваю 12894739 проектов впритык к дедлайну</p>
                    </div>
                    <div> <img src="images/team-5.jpg">
                        <br>
                        <p>Якимов Ярослав</p>
                        <p style="text-align: left">
                            Сила: Физика на 5 <br>
                            Ловкость: 80%) <br>
                            Интеллект: 106% <br>
                            Ульта: Hackerman</p>
                    </div>
                    <div> <img src="images/team-6.jpg">
                        <br>
                        <p>Керимбай Акылжан </p>
                        <p style="text-align: left">
                            Сила: 82% <br>
                            Ловкость: Казах-100% <br>
                            Интеллект: 515% <br>
                            Ульта: Достаёт плётку и вешается на ней</p>
                    </div>
                    <div> <img src="images/team-8.jpg">
                        <br>
                        <p>Леонтьева Полина </p>
                        <p style="text-align: left">
                            Сила: Держу в страхе весь район (100) <br>
                            Ловкость: 80% <br>
                            Интеллект: 50/50 как повезёт  <br>
                            Ульта: Превращаюсь из доброй и пушистой в дьявола за 0,5 секунды </p>
                    </div>
                    <div> <img src="images/team-9.jpg">
                        <br>
                        <p>Брунова Анастасия</p>
                        <p style="text-align: left">
                            Сила: 46% <br>
                            Ловкость: 51%<br>
                            Интеллект: 73% <br>
                            Ульта: ???</p>
                    </div>
                    <div> <img src="images/team-10.jpg">
                        <br>
                        <p>Муслакова Наталья</p>
                        <p style="text-align: left">
                            Сила: 40% <br>
                            Ловкость: 70% <br>
                            Интеллект: 70% <br>
                            Ульта: Жена казаха</p>
                    </div>
                    <div> <img src="images/team-11.jpg">
                        <br>
                        <p>Датская София</p>
                        <p style="text-align: left">
                            Сила: 0% <br>
                            Ловкость: 70% <br>
                            Интеллект: 99% <br>
                            Ульта: Царапаюсь и кусаюсь </p>
                    </div>
                    <div> <img src="images/team-12.jpg">
                        <br>
                        <p>Диденко Екатерина</p>
                        <p style="text-align: left">
                            Сила: уже можно говорить,
                            что я сильная? <br>
                            Ловкость: как у кисы :з <br>
                            Интеллект: 50% <br>
                            Ульта: все кисы меня любят :з </p>
                    </div>
                    <div> <img src="images/team-13.jpg">
                        <br>
                        <p>Асланова Наргиз </p>
                        <p style="text-align: left">
                            Сила: сила (100%)  в духе  <br>
                            Ловкость: Сотка  <br>
                            Интеллект: Хочу все соточки (не чсв) <br>
                            Ульта: Набиваю хэдшоты с авапы </p>
                    </div>
                    <div> <img src="images/team-14.jpg">
                        <br>
                        <p>Ермолаева Асия</p>
                        <p style="text-align: left">
                            Сила: 32+2 <br>
                            Ловкость: 70+7 <br>
                            Интеллект: 54+6 <br>
                            Ульта: Обнимаю насмерть</p>
                    </div>
                    <div> <img src="images/team-15.jpg">
                        <br>
                        <p>Шепелев Михаил</p>
                        <p style="text-align: left">
                            Сила: Тупо больше полтоса жму (на весах) <br>
                            Ловкость: 69/96 <br>
                            Интеллект: prime 97/ ultimate 96 <br>
                            Ульта: Получать справку в бухгалтерии за Лупу </p>
                    </div>
                    <div> <img src="images/team-17.jpg">
                        <br>
                        <p>Цынгаева Юлия</p>
                        <p style="text-align: left">
                            Сила: (80%)сама собрала комод и каркас дивана <br>
                            Ловкость: 75% <br>
                            Интеллект: (98%) достаточно для высокоинтеллектуальных шуток <br>
                            Ульта: Генерировать шутки (короночка - про Магадан)</p>
                    </div>
                    <div> <img src="images/team-18.jpg">
                        <br>
                        <p>Крисанов Максим</p>
                        <p style="text-align: left">
                            Сила: 42% <br>
                            Ловкость: 42% <br>
                            Интеллект: 42% <br>
                            Ульта: Смотреть аниме 30 часов подряд</p>
                    </div>
                    <div> <img src="images/team-19.jpg">
                        <br>
                        <p>Фролова Даша</p>
                        <p style="text-align: left">
                            Сила: Дохожу до пар в 8:20 <br>
                            Ловкость: Капитан неловкость <br>
                            Интеллект: 13% <br>
                            Ульта: Стираю носки взглядом</p>
                    </div>
                    <div> <img src="images/team-20.jpg">
                        <br>
                        <p>Майорова Олеся</p>
                        <p style="text-align: left">
                            Сила: 20% <br>
                            Ловкость: 30%<br>
                            Интеллект: 50% <br>
                            Ульта: Резать воду 10 часов</p>
                    </div>
                    <div> <img src="images/team-21.jpg">
                        <br>
                        <p>Примак Юлия</p>
                        <p style="text-align: left">
                            Сила: Зависит от части тела <br>
                            Ловкость: Лучше чем гибкость <br>
                            Интеллект: 89111032194% ;) <br>
                            Ульта: Давать всем пиздюлей </p>
                    </div>
                    <div> <img src="images/team-22.jpg">
                        <br>
                        <p>Тюлина Ирина</p>
                        <p style="text-align: left">
                            Сила: 69% <br>
                            Ловкость: В битвах 100%, по жизни 10%... <br>
                            Интеллект: Сама по себе 50%, при объединении с другими игроками добираю до соточки <br>
                            Ульта: дружелюбный дьяволёнок 😈</p>
                    </div>
                    <div> <img src="images/team-23.jpg">
                        <br>
                        <p>Тюрин Кирилл</p>
                        <p style="text-align: left">
                            Сила: 14% <br>
                            Ловкость: 88% <br>
                            Интеллект: -1% <br>
                            Ульта: Призываю всех парней на военку или на флорбол (хз что хуже)</p>
                    </div>
                    <div> <img src="images/team-24.jpg">
                        <br>
                        <p>Бакке Егор</p>
                        <p style="text-align: left">
                            Сила: 100% <br>
                            Ловкость: 50% <br>
                            Интеллект: 300$ <br>
                            Ульта: Призыв Dungeon Master'а </p>
                    </div>
                    <div> <img src="images/team-25.jpg">
                        <br>
                        <p>Воронкова Полина</p>
                        <p style="text-align: left">
                            Сила: 42% <br>
                            Ловкость: 69% <br>
                            Интеллект: 146% <br>
                            Ульта: Манипулирую кошками за деньги </p>
                    </div>
                    <div> <img src="images/team-26.jpg">
                        <br>
                        <p>Лазарев Эдуард</p>
                        <p style="text-align: left">
                            Сила: 80% <br>
                            Ловкость: 69%<br>
                            Интеллект: 9999% <br>
                            Ульта: Не парюсь</p>
                    </div>
                    <div> <img src="images/team-27.jpg">
                        <br>
                        <p>Хачикян Гарри </p>
                        <p style="text-align: left">
                            Сила: Соточка <br>
                            Ловкость: Соточка <br>
                            Интеллект: Соточка, но как только вижу Максимову - 0 <br>
                            Ульта: Впихиваю невпихуемое в таблицы </p>
                    </div>
                    <div> <img src="images/team-28.jpg">
                        <br>
                        <p>Фролова (Мельц) Мария</p>
                        <p style="text-align: left">
                            Сила: 40% <br>
                            Ловкость: 10% <br>
                            Интеллект: 70% <br>
                            Ульта: Сплю за всю команду</p>
                    </div>
                    <div> <img src="images/team-29.jpg">
                        <br>
                        <p>Винокуров Илья</p>
                        <p style="text-align: left">
                            Сила: 49.5 см <br>
                            Ловкость: Жiдкий <br>
                            Интеллект: 69% <br>
                            Ульта: Рассказывает анек про шляпу и у всех отваливается жопа</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<div id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4 animate-box">
					<h3 class="section-title">Roma&Roma</h3>
					<p>Лучшие
					(по их собственному мнению) веб-программисты ИТМО.</p>
				</div>

				<div class="col-md-4 animate-box">
					<h3 class="section-title">Контакты</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>Университет ИТМО</li>
						<li><i class="icon-phone"></i>+ 7 921 652 4691</li>
						<li><i class="icon-envelope"></i><a href="mailto:romsaaf@mail.ru">romsaaf@mail.ru</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="copy-right">&copy; 2019 Pervomy Pervaky Prigotovitsya. All Rights Reserved. <br>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<!-- Carousel -->
	<script src="owl-carousel/dist/owl.carousel.min.js"></script>
	<script>
		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    autoplay:true,
		    responsiveClass:true,
            rewind:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:2,
		            nav:false
		        },
		        1000:{
		            items:3,
		            nav:true,
		            loop:false
		        }
		    }
		})
	</script>
	</body>
</html>

