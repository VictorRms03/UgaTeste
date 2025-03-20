<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "bancodedados2_sql";

$mysqli = mysqli_connect($host, $usuario, $senha, $bd);
mysqli_set_charset($mysqli,'utf8');
?>