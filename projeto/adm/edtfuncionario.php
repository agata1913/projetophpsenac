<?php
include('conexao.php');
include('menu.php');

$idfuncionario = $_GET['idfuncionario'];

$sql = "select * from tblfunci where idfuncionario= '$idfuncionario'";

$qry = mysqli_query($con,$sql);

$resultado = mysqli_fetch_array($qry);

$nome = $resultado['nome'];
$foto = $resultado['foto'];
$cargo = $resultado['cargo'];
$dataadm = $resultado['dataadm'];

?>
<div class="container">
<h1>Atualizar Funcionário</h1>
<form action="uptfuncionario.php" method="post">
<b>    Id:                          </b><br><input type="text" class="col col-sm-2" name="idfuncionario" value="<?php echo $idfuncionario ?>"> <br><br>
<b>    Nome:                        </b><br><input type="text" class="col col-sm-2" name="nome" value="<?php echo $nome ?>"> <br><br>
<b>    Foto:                        </b><br><input type="file" class="col col-sm-2" name="foto" value="<?php echo $foto ?>"> <br><br>
<b>    Cargo:                       </b><br><input type="text" class="col col-sm-2" name="cargo" value="<?php echo $cargo ?>"> <br><br>
<b>    Data de Admissão:            </b><br><input type="date" class="col col-sm-2" name="dataadm" value="<?php echo $dataadm ?>"> <br><br>
                                            <input type="submit" value="Atualizar Registro" class="btn btn-primary">
</form>

</div>