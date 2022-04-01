<?php
include('conexao.php');
include('menus/menu_adm.php');
?>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Consultar funcionário</title>
  </head>
  <body>
  <div class= 'container'style="position:relative; background-color: gainsboro; height: 900px; border-style: double; border-top-color: black; border-right-color: black; border-left-color: black; border-bottom-color: black">
    <a href= "cadfuncionario.php" class= "btn btn+sm btn-danger">Cadastrar Novo</a>
    
    <?php
        $sql = "select * from tblfunci";
        $qry = mysqli_query($con,$sql);
    ?>
            <div class="container" style="border-style: double; border-color: black">

            <table class= 'table table-bordered'>
                <thead class= 'thead-dark'>
                    <th scope='col'>id</th>
                    <th scope='col'>Nome</th>
                    <th scope='col'>Foto</th>
                    <th scope='col'>Cargo</th>
                    <th scope='col'>Data Admissão</th>
                    <th scope='col'>Operações</th>
                </thead>
    <?php
        while($linha = mysqli_fetch_array($qry)){
    ?>
            <tbody>
            <tr>
            <td scope= 'row'><?php echo $linha['idfuncionario'] ?></td>
            <td><?php echo $linha['nome'] ?></td>
            <td><?php echo $linha['foto'] ?></td>
            <td><?php echo $linha['cargo'] ?></td>
            <td><?php echo $linha['dataadm'] ?></td>
            <td><a href= "edtfuncionario.php?idfuncionario=<?php echo $linha['idfuncionario'] ?>"><img src="editor.png" width="25" height="25"></a> | <a href="dltfuncionario.php?idfuncionario=<?php echo $linha['idfuncionario']?>"><img src="lixo.png" width="25" height="25"></a>
            </tr>
            </tbody>
    <?php }  ?>
            </table>

        </div>
  </div>
