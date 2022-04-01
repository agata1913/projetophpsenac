<?php
include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$idnivelacesso = $_POST['idnivelacesso'];

$sql = "INSERT INTO tblusuarios (nome,email,senha,idnivelacesso) values ('$nome','$email','$senha','$idnivelacesso')";

$qry = mysqli_query($con,$sql); ?>
<html><div class= 'container'style="position:relative; background-color: gainsboro; height: 900px; border-style: double; ; height: 900px; border-style: double; border-top-color: black; border-right-color: black; border-left-color: black; border-bottom-color: gainsboro">
<br><br>
<?php
if(@qry){
    echo "<h1 style='text-align: center; font-size: 50px'>Cadastrado com sucesso</h1><br><br>";
    echo "<a href='cadpaciente.php'class='btn btn+sm btn-danger' type='submit'>Continuar</a> - <a href='menu.php' class='btn btn+sm btn-light'>Voltar</a>";

} else {
    echo "<h1 style='text-align: center; font-size: 50px'>Não cadastrado</h1><br><br>";
    echo "<h1 style='text-align: center; font-size: 50px'>Informe ao adm - <a href='menu.php' class='btn btn+sm btn-light'>Voltar</a>";
}