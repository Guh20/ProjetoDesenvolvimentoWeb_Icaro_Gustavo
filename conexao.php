<?php

$usuario = 'id21494642_admin';
$senha = '74100147iI@';
$database = 'id21494642_loginphp';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}