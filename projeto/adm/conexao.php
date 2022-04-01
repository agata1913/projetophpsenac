<?php  //conexao.php
//cria uma conexão com o banco de dados

$servidor = "127.0.0.1";
$usuario  = "root";
$senha    = "";
$bd       = "bdhospital";

$con = mysqli_connect($servidor,$usuario,$senha,$bd);
//var_dump ($con);

mysqli_set_charset($con,"UTF-8");