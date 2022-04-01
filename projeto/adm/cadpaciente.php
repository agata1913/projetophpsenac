<?php
include('menu.php');

?>
  <body>
      <div class= "container"style="position:relative; background-color: gainsboro; height: 900px; border-style: double; border-top-color: black; border-right-color: black; border-left-color: black; border-bottom-color: black">
        <br>

          <h1 style="text-align: center; font-size: 40px;">Cadastro de Paciente</h1>
        </br></br>

  <form action="inspaciente.php" method ="POST">

  <div class="container" style="border-style: double; border-color: black">

    <div class="row">
    <div class="col col-sm-8">
  <div class="form-group">
    <label><b>Paciente:</b></label>
    <input type="text" class="form-control" name='nome'>
  </div>
  </div>
  </div>

    <div class="row">
    <div class="col col-sm-8">
  <div class="form-group">
    <label><b>Foto:</b></label>
    <input type="file" class="form-control" name='foto'>
  </div>
  </div>
  </div>

    <div class="row">
    <div class="col col-sm-3">
  <div class="form-group">
    <label><b>Data de internação:</b></label>
    <input type="date" class="form-control" name='dataint'>
  </div>
  </div>
  </div>

    <div class="row">
    <div class="col col-sm-3">
  <div class="form-group">
    <label><b>Leito:</b></label>
    <input type="number" class="form-control" name='leito'>
  </div>
  </div>
  </div>

    <div class="row">
    <div class="col col-sm-4">
  <div class="form-group">
    <label><b>Motivo da internação:</b></label>
    <input type="text" class="form-control" name='patologia'>
  </div>
  </div>
  </div>

    <div class="row">
    <div class="col col-sm-8">
  <div class="form-group">
    <label><b>Médico:</b></label>
    <input type="text" class="form-control" name='medico'>
  </div>
  </div>
  </div>

  <div class="row">
    <div class="col col-sm-4">
  <div class="form-group">
    <label><b>Situação:</b></label>
    <input type="text" class="form-control" name='situacao'>
  </div>
  </div>
  </div>
  </br>

  <button type="submit" class="btn btn-danger">Cadastrar</button>
</form>
</div>
 </div>

   <?php
   include('rodape.php');

   ?>

