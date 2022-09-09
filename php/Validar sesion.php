<?php

session_start();

if (isset($_SESSION["user"])) {
    $login = $_SESSION ['login'];
    $Username = $_SESSION['user'];
} else{
    $Username = "";
    $login = "";
}

function esconder(){
    if (isset($_SESSION['user'])) {
        echo "esconder";
    }
}

function esconderv2(){
    if (!isset($_SESSION["user"])) {
        echo "esconder";
    }
}


?>