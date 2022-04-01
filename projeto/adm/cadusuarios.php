<?php
include('menu.php');

?>
  <body>
      <div class= "container" style="position:relative; background-color: gainsboro; height: 900px; border-style: double; border-top-color: black; border-right-color: black; border-left-color: black; border-bottom-color: black">
        <br>
          <h1 style="text-align: center; font-size: 40px">Cadastro de Usuário</h1>
        <br><br>

  <form action="insusuario.php" method ="POST">

  <div class="container" style="border-style: double; border-color: black">

    <div class="row">
    <div class="col col-sm-8">
  <div class="form-group">
    <label><b>Nome:</b></label>
    <input type="text" class="form-control" name='nome'>
    </div>
    </div>
  </div>

    <div class="row">
    <div class="col col-sm-6">
  <div class="form-group">
    <label><b>E-mail:</b></label>
    <input type="text" class="form-control" name='email'>
    </div>
    </div>
  </div>

    <div class="row">
    <div class="col col-sm-4">
  <div class="form-group">
    <label><b>Senha:</b></label>
    <input type="password" class="form-control" name='senha'>
    </div>
    </div>
  </div>

    <div class="row">
    <div class="col col-sm-2">
  <div class="form-group">
    <label><b>Nível de acesso:</b></label>
    <input type="number" class="form-control" name='idnivelacesso'>
    </div>
    </div>
  </div>
  
  <br>
  <button type="submit" class="btn btn-danger">Cadastrar</button>
</form>
</div>

<?php
   include('rodape.php');

   ?>