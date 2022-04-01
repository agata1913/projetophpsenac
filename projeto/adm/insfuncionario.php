<?php //inscliente.php
include('conexao.php');
include('menu.php');

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$dataadm = $_POST['dataadm'];

$sql = "INSERT INTO tblfunci (nome,cargo,dataadm) values ('$nome','$cargo','$dataadm')";

$qry = mysqli_query($con,$sql);?>
<html><div class = 'container'style="position:relative; background-color: gainsboro; height: 900px; border-style: double; ; height: 900px; border-style: double; border-top-color: black; border-right-color: black; border-left-color: black; border-bottom-color: gainsboro"><br><?php
if(@qry){
    echo "<h1 style='text-align: center; font-size: 50px'>Cadastrado com sucesso</h1><br><br>";
    echo "<a href='cadfuncionario.php' class='btn btn+sm btn-danger' type='submit'> Continuar</a> - <a href='menu.php' class='btn btn+sm btn-light'>Voltar</a>";

} else {
    echo "<h1 style='text-align: center; font-size: 50px'>Não cadastrado</h1><br><br>";
    echo "<h1 style='text-align: center; font-size: 50px'>Informe ao adm - <a href='menu.php'>Voltar</a>";
}?>
</html>
