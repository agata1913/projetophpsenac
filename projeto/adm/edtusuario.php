<?php
include('conexao.php');
include('menu.php');

$idpaciente = $_GET['idusuario'];

$sql = "select * from tblusuarios where idusuario= '$idusuario'";

$qry = mysqli_query($con,$sql);

$resultado = mysqli_fetch_array($qry);

$nome = $resultado['nome'];
$email = $resultado['email'];
$senha = $resultado['senha'];
$idnivelacesso = $resultado['idnivelacesso'];


?>
<div class="container" style="position: relative; background-color: gainsboro; border-style: double; border-top-color: black; border-right-color: black; border-left-color: black; border-bottom-color: black">
<br>

<h1 style="text-align: center; font-size: 50px">Atualizar Usuário</h1>
<br><br>
<form action="uptpaciente.php" method="post">

<div class="container" style="border-style: double; border-color: black">
<br>
<b>    Id:                      </b><br><input type="text" class="col col-sm-2" name="idusuario" value="<?php echo $idusuario ?>"> <br><br>
<b>    Nome:                    </b><br><input type="text" class="col col-sm-8" name="nome" value="<?php echo $nome ?>"> <br><br>
<b>    E-mail:                  </b><br><input type="email" class="col col-sm-3" name="email" value="<?php echo $email ?>"> <br><br>
<b>    Senha:                   </b><br><input type="password" class="col col-sm-3" name="senha" value="<?php echo $senha ?>"> <br><br>
<b>    Nível de acesso:         </b><br><input type="text" class="col col-sm-2" name="idnivelacesso" value="<?php echo $idnivelacesso ?>"> <br><br>
                                        <input type="submit" value="Atualizar Registro" class="btn btn-danger">
</div>
</form>

</div>