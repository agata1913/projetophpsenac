<?php
include('menu.php');
include('conexao.php');

$idpaciente     = $_POST['idpaciente'];
$nome           = $_POST['nome'];
$foto           = $_POST['foto'];
$dataint        = $_POST['dataint'];
$leito          = $_POST['leito'];
$patologia      = $_POST['patologia'];
$medico         = $_POST['medico'];
$situacao       = $_POST['situacao'];



$sql = "UPDATE tblpaciente set nome='$nome',foto='$foto',dataint= '$dataint',leito='$leito',patologia='$patologia',medico='$medico',situacao='$situacao' where idpaciente='$idpaciente'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("Location:conpaciente.php");
}