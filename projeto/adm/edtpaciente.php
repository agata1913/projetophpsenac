<?php
include('conexao.php');
include('menu.php');

$idpaciente = $_GET['idpaciente'];

$sql = "select * from tblpaciente where idpaciente= '$idpaciente'";

$qry = mysqli_query($con,$sql);

$resultado = mysqli_fetch_array($qry);

$nome = $resultado['nome'];
$dataint = $resultado['dataint'];
$leito = $resultado['leito'];
$patologia = $resultado['patologia'];
$medico = $resultado['medico'];
$situacao = $resultado['situacao'];



?>
<div class="container" style="position: relative; background-color: gainsboro; border-style: double; border-top-color: black; border-right-color: black; border-left-color: black; border-bottom-color: black">
<br>

<h1 style="text-align: center; font-size: 50px">Atualizar Paciente</h1>
<br><br>
<form action="uptpaciente.php" method="post">

<div class="container" style="border-style: double; border-color: black">
<br>
<b>    Id:                      </b><br><input type="text" class="col col-sm-2" name="idpaciente" value="<?php echo $idpaciente ?>"> <br><br>
<b>    Paciente:                </b><br><input type="text" class="col col-sm-8" name="nome" value="<?php echo $nome ?>"> <br><br>
<b>    Foto:                    </b><br><input type="file" class="col col-sm-8" name="foto" value="<?php echo $foto ?>"> <br><br>
<b>    Data de internação:      </b><br><input type="date" class="col col-sm-3" name="dataint" value="<?php echo $dataint ?>"> <br><br>
<b>    Leito:                   </b><br><input type="number" class="col col-sm-3" name="leito" value="<?php echo $leito ?>"> <br><br>
<b>    Motivo da internação:    </b><br><input type="text" class="col col-sm-4" name="patologia" value="<?php echo $patologia ?>"> <br><br>
<b>    Médico:                  </b><br><input type="text" class="col col-sm-8" name="medico" value="<?php echo $medico ?>"> <br><br>
<b>    Situação:                </b><br><input type="text" class="col col-sm-4" name="situacao" value="<?php echo $situacao ?>"> <br><br>
                                        <input type="submit" value="Atualizar Registro" class="btn btn-danger">
</div>
</form>

</div>