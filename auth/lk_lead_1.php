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
    <link rel="shortcut icon" href="../favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400" rel="stylesheet">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Init jQuery and jQuery UI -->
    <script type="text/javascript" src="../jqForm/jquery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../jqForm/jquery/jquery-ui-1.8.20.custom.min.js"></script>
    <link href="../jqForm/jquery/ui-lightness/jquery-ui-1.8.20.custom.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Init jqDynaForm -->
    <link href="../jqForm/jqDynaForm/jqDynaForm.css" media="screen" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../jqForm/jqDynaForm/jqDynaForm.js"></script>

    <!-- Assets for example -->
    <link href="../jqForm/example.css" media="screen" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../jqForm/example.js"></script>
    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="../css/simple-line-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Carousel -->
    <link rel="stylesheet" href="../owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../owl-carousel/dist/assets/owl.theme.default.min.css">
    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->

</head>


<body>
<header role="banner" id="fh5co-header">0
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">ППП</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a><span>Хранитель Авторизован</span></a></li>
                        <li><a href="../index.php" class="external"><span>На главную</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<br><br>
<br>
<form name="publish" id="publish" style="padding-left: 10%">
    <h3>Выберите станцию</h3>
    <div>
        <input type="radio" id="st_choice1" name="st_choice" value="Имя_Станции1">
        <label for="st_choice1">Станция 1</label>
        <br>
        <input type="radio" id="st_choice2" name="st_choice" value="Имя_Станции2">
        <label for="st_choice2">Станция 2</label>
        <br>
        <input type="radio" id="st_choice3" name="st_choice" value="Имя_Станции3">
        <label for="st_choice3">Станция 3</label>
        <br>
    </div>
    <br>
    <h3>Выберите команду</h3>
    <div>
        <input type="radio" id="team_choice1" name="team_choice" value="Имя_Команды1">
        <label for="team_choice1">Команда 1</label>
        <br>
        <input type="radio" id="team_choice2" name="team_choice" value="Имя_Команды2">
        <label for="team_choice2">Команда 2</label>
        <br>
        <input type="radio" id="team_choice3" name="team_choice" value="Имя_Команды3">
        <label for="team_choice3">Команда 3</label>
        <br>
    </div>
    <br>
    <div>
        <button type="submit" name="submit_sent">Отправить</button>
    </div>
</form>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="../js/jquery.stellar.min.js"></script>
<!-- Counters -->
<script src="../js/jquery.countTo.js"></script>
<!-- Main JS -->
<script src="../js/main.js"></script>
<!-- Carousel -->
<script src="../owl-carousel/dist/owl.carousel.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript">
    document.forms.publish.onsubmit = function() {
        var st_choice = this.st_choice.value;
        var team_choice = this.team_choice.value;
        var jsTextt = {
            "st_choice" : st_choice,
            "team_choice" : team_choice
        };
        console.log(jsTextt);
        $.ajax({
            type: "POST",
            url: "https://ppp.spb.ru:1488/addCommand",
            data: jsTextt,
            success: function(res) {
                alert("Данные успешно отправлены на сервер");
            }
        });
    };
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("input#date_conf").change(function(){

            if ($(this).attr("checked")) {
                $('#hidd_save').fadeIn().show();
                return;
            } else {
                $('#hidd_save').fadeOut(300);
            }

        });
    })
</script>
</body>
</html>


