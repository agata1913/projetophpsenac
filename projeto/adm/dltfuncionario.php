<?php
include('conexao.php');
include('menu.php');

$idfuncionario = $_GET['idfuncionario'];

$sql = "delete from tblfunci where idfuncionario= '$idfuncionario'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("Location:confuncionario.php");
}