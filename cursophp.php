<?php

$host = 'localhost';
$username = 'root';
$password = '';
$bancodedados = 'calcula';

$conectar = new mysqli($host, $username, $password, $bancodedados);

include_once('cursophp.php');

$primeira_nota = $_post['nota1'];
$segunda_nota = $_post['nota2'];
$terceira_nota = $_post['nota3'];
$média_em_conceito = $_post['mediaemconceito.innerHTML'];
$média_em_nota = $_post['mediaemnota.innerHTML'];

$resultado = mysqli_query($conectar, "insert into media(nome, primeira_nota, segunda_nota, terceira_nota, média_em_conceito, média_em_nota)
values ($nome, $primeira_nota, $segunda_nota, $terceira_nota, $média_em_conceito, $média_em_nota)");