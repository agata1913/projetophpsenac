<?php
include('menu.php');
include('conexao.php');

$idfuncionario = $_POST['idfuncionario'];
$nome = $_POST['nome'];
$foto = $_POST['foto'];
$cargo = $_POST['cargo'];
$dataadm = $_POST['dataadm'];


$sql = "UPDATE tblfunci set nome='$nome',foto='$foto,cargo='$cargo',dataadm= '$dataadm' where idfuncionario='$idfuncionario'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("Location:confuncionario.php");
}