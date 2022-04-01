<?php
include('menu.php');
include('conexao.php');
?>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Consultar paciente</title>
  </head>
  <body>
  <div class= 'container'style="position:relative; background-color: gainsboro; height: 900px; border-style: double; border-top-color: black; border-right-color: black; border-left-color: black; border-bottom-color: black">
    <a href= "cadpaciente.php" class= "btn btn+sm btn-danger">Cadastrar Novo</a>
    
    <?php
        $sql = "select * from tblpaciente";
        $qry = mysqli_query($con,$sql);
    ?>
          <div class="container" style="border-style: double; border-color: black">

            <table class= 'table table-bordered'>
                <thead class= 'thead-dark'>
                    <th scope='col'>id</th>
                    <th scope='col'>Nome</th>
                    <th scope='col'>Foto</th>
                    <th scope='col'>Data de internação</th>
                    <th scope='col'>Leito</th>
                    <th scope='col'>Motivo da internação</th>
                    <th scope='col'>Médico</th>
                    <th scope='col'>Situação</th>
                    <th scope='col'>Operações</th>
                      <style>
                        th{
                          border-style: solid;
                          border-color: white;
                          }
                      </style>
                </thead>
    <?php
        while ($linha = mysqli_fetch_array($qry)){
    ?>
            <tbody>
            <tr>
            <td scope= 'row'><?php echo $linha['idpaciente'] ?></td>
            <td><?php echo $linha['nome'] ?></td>
            <td><?php echo $linha['foto'] ?></td>
            <td><?php echo $linha['dataint'] ?></td>
            <td><?php echo $linha['leito'] ?></td>
            <td><?php echo $linha['patologia'] ?></td>
            <td><?php echo $linha['medico'] ?></td>
            <td><?php echo $linha['situacao'] ?></td>
            <td><a href= "edtpaciente.php?idpaciente=<?php echo $linha['idpaciente'] ?>"><img src="editor.png" width="25" height="25"></a> | <a href= "dltpaciente.php?idpaciente=<?php echo $linha['idpaciente'] ?>"><img src="lixo.png" width="25" height="25"></a></td>
            </tr>
            </tbody>
    <?php }  ?>
            </table>

          </div>
  </div>
