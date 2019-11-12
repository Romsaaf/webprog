<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ППП &mdash; Первому Перваку Приготовиться</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400" rel="stylesheet">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <!-- Init jQuery and jQuery UI -->
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="jqForm/jquery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="jqForm/jquery/jquery-ui-1.8.20.custom.min.js"></script>
    <link href="jqForm/jquery/ui-lightness/jquery-ui-1.8.20.custom.css" media="screen" rel="stylesheet" type="text/css">
    
    <!-- Init jqDynaForm -->
    <link href="jqForm/jqDynaForm/jqDynaForm.css" media="screen" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jqForm/jqDynaForm/jqDynaForm.js"></script>
    
    <!-- Assets for example -->
    <link href="jqForm/example.css" media="screen" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jqForm/example.js"></script>
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
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
    
    
<body style="background-image: url(images/city_ppp.png)" class="reg_body">
    <header role="banner" id="fh5co-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top navig">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php" style="float: left;display: block;font-size: 24px;font-weight: bold;padding-left: 0;text-transform: uppercase;letter-spacing: 3px;color: #000;"><img class="logo_m" src="images/Avatarka_PPP.png" style="height: 82px; margin-top: -40%; margin-left: -85%"></a>
                    </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="external" href="index.php"><span style="color: whitesmoke">На главную</span></a></li>
                                </ul>
                            </div>
                </nav>
            </div>
      </div>
    </header>
    <br><br><br><br>
    <div class="center-block" style="margin-right: 10%">
        <div class="col-md-8 col-md-offset-3 text-center">
            <div id="smallForm">
                <div id="form_text">
                    <h1 style="padding-top: 15px">Регистрация</h1>
                    <br>
                    <h3>Команда</h3>
                    <p>Название: <input name="team_name" size="30"><br><br> Пароль для ЛК: <input title="Пароль должен состоять минимум из 6 символов и содержать цифры и латинские буквы верхнего и нижнего регистров "
                                                                                                  type="text" name="team_pass" size="26" minlength="6"></p>
                    <h3>Капитан</h3>
                    <p>Фамилия: <input name="team_lead_sur" class="form_field" size="14"> Имя: <input name="team_lead_name" class="form_field" size="10"><br><br>
                        Ссылка ВК: <input type="url" name="team_lead_vk" class="form_field" size="30"><br><br>Номер телефона: <input type="tel" class="form_field" title="Введите номер телефона" name="team_lead_mobile" size="12"></p>
                    <h3>Члены команды</h3>
                    <div data-holder-for="team_member"></div>

                    <p>&nbsp;</p>

                    <div id="hidd_save"><input type="button"  class="form_field" value="Отправить" id="saveSmallForm"></div>
                </div>
            </div>
            <div style="display:none">
                <div data-name="team_member" data-label="Member" class="member_choice">
                    <p>Фамилия: <input name="team_member_sur" class="form_field mem_extr" size="14"> Имя: <input name="team_member_name" class="form_field mem_extr" size="10">
                        Ссылка ВК: <input type="url" class="form_field mem_extr" name="team_member_vk" size="30"></p>
                </div>
            </div>
            <div id="popup"></div>
        </div>
    </div>

    <br><br>
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
    </body> 
</html> 