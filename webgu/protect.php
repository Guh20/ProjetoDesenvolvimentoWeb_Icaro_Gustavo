<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Você não tem permissão,Por Favor Logue.<p><a href=\"../index.php\">Entrar</a></p>");
}