<?php
session_start();
if (isset($_POST['submit_sent']))
{
    $jsonst[] = array(
        "st_name" => $_POST['st_choice'],
        "team_name" => $_POST['team_choice'],
    );
    print_r($jsonst);
    json_encode($jsonst);
    print_r($jsonst);
}
