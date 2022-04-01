<?php
include('conexao.php');
include('menu.php');

$idpaciente = $_GET['idpaciente'];

$sql = "delete from tblpaciente where idpaciente= '$idpaciente'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("Location:conpaciente.php");
}