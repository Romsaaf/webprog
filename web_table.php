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

    <!-- Init jqDynaForm -->
    <link href="jqForm/jqDynaForm/jqDynaForm.css" media="screen" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jqForm/jqDynaForm/jqDynaForm.js"></script>

    <!-- Assets for example -->
    <link href="jqForm/example.css" media="screen" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jqForm/fakeData.js"></script>
    <script type="text/javascript" src="jqForm/example.js"></script>

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <link rel="icon" type="image/png" href="auth/log/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/log/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/log/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/log/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/log/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/log/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/log/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/log/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="auth/log/css/util.css">
    <link rel="stylesheet" type="text/css" href="auth/log/css/main.css">
    <!--===============================================================================================-->

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<section>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
					<span class="login100-form-title p-b-26" style="font-family: Roboto Mono">
						Авторизация
					</span>
                    <div class="wrap-input100 validate-input" data-validate="Введите количество строк">
                        <input class="input100" id="rown" name="rown" type="number">
                        <span class="focus-input100" data-placeholder="Количество строк" style="font-family: Roboto Mono"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Введите количество столбцов">
                        <input class="input100" id="coln" name="coln" type="number">
                        <span class="focus-input100" data-placeholder="Количество столбцов" style="font-family: Roboto Mono"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <a class="command" id="val_tab"><button class="login100-form-btn" style="font-family: Roboto Mono">Создать</button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
</section>

<script src="js/main.js"></script>
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
<!-- Table scripts -->
<script>
    $(document).ready(function() {
        function buildtable {
            var body = document.querySelector('body'),
            rown = document.getElementById(rown),
            coln = document.getElementById(coln),
            columns = coln.value,
            rows = rown.value,
            tr = " ",
            td = " ",
            ttable = document.querySelector('table');
            table = document.createElement('table');
            ver = document.getElementById(val_tab);
            ver.onclick = function () {
                for (var i = 0; i < rows; i++) {
                    tr = document.createElement('tr');
                    for (var j = 0; j < columns; j++) {
                        td = document.createElement('td');
                        tr.appendChild(td)
                    }
                    table.appendChild(tr);
                }
                if (ttable == null){
                    return body.appendChild('table');
                }
            }
        }
    }
</script>
<!-- LOG -->
<script src="auth/log/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="auth/log/vendor/bootstrap/js/popper.js"></script>
<script src="auth/log/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="auth/log/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="auth/log/vendor/daterangepicker/moment.min.js"></script>
<script src="auth/log/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="auth/log/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
</body>
</html>

