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
    <a href= "cadusuario.php" class= "btn btn+sm btn-danger">Cadastrar Novo</a>
    
    <?php
        $sql = "select * from tblusuarios";
        $qry = mysqli_query($con,$sql);
    ?>
            <table class= 'table table-bordered'>
                <thead class= 'thead-dark'>
                    <th scope='col'>id</th>
                    <th scope='col'>Nome</th>
                    <th scope='col'>E-mail</th>
                    <th scope='col'>Senha</th>
                    <th scope='col'>Nível de acesso</th>
                    <th scope='col'>Operações</th>
                </thead>
    <?php
        while($linha = mysqli_fetch_array($qry)){
    ?>
            <tbody>
            <tr>
            <td scope= 'row'><?php echo $linha['idusuario'] ?></td>
            <td><?php echo $linha['nome'] ?></td>
            <td><?php echo $linha['email'] ?></td>
            <td><?php echo $linha['senha'] ?></td>
            <td><?php echo $linha['idnivelacesso'] ?></td>
            <td><a href= "edtusuario.php?idusuario=<?php echo $linha['idusuario'] ?>"><img src="editor.png" width="25" height="25"></a> | <a href="dltusuario.php?idusuario=<?php echo $linha['idusuario']?>"><img src="lixo.png" width="25" height="25"></a>
            </tr>
            </tbody>
    <?php }  ?>
            </table>

    
  </div>
