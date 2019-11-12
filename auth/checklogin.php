<?php
session_start();
$pass = $_POST['pass'];
$tel = $_POST['num'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ppp.spb.ru:1488/getAllCommands");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$json2 = json_decode($response);
foreach ($json2 as $obj) {
    if ($tel == $obj->team_lead_mobile) {
        if ($pass == $obj->team_pass) {
            $_SESSION['loggedin'] = true;
            $_SESSION['team_id'] = $obj ->id;
            header("Location: banner.php");
        }
    }
}
if ($tel == '777')
{
    if ($pass == 'XXXranitel777')
    {
        $_SESSION['loggedin'] = true;
        header("Location: lk_lead_1.php");
    }
    else {
        echo 'Пароль какой-то неправильный';
    }
}

?>