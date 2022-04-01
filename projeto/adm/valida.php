<?php     //valida.php
session_start();

include('conexao.php');  //.. retorna um nivel

if ((isset($_POST['txt_usuario']))  && (isset($_POST['txt_senha'])))
   {
$usuario = mysqli_real_escape_string($con,$_POST['txt_usuario']);
$senha   = mysqli_real_escape_string($con,$_POST['txt_senha']);
$senha = md5($senha);
   
    $sql = "SELECT * FROM tblusuarios where email='$usuario' && senha='$senha'";
$qry = mysqli_query($con,$sql);
$resultado = mysqli_fetch_assoc($qry);

if ($resultado)
{
$_SESSION['usuarioId']            = $resultado['idusuario'];
$_SESSION['usuarioNome']          = $resultado['nome'];
$_SESSION['usuarioNivelAcessoId'] = $resultado['idnivelacesso'];
$_SESSION['usuarioEmail']         = $resultado['email'];

if($_SESSION['usuarioNivelAcessoId']=="1")
{
 header("Location:administrador.php");

} elseif ($_SESSION['usuarioNivelAcessoId']=="2")
    {
      header("Location:medico.php");
   }

else{
$_SESSION['loginErro'] = "Erro - Entre em contato  ";
header("Location: index.php");
}

}  else{
$_SESSION['loginErro'] = "Usuário ou senha inválido";
header("Location: index.php");
}
   }