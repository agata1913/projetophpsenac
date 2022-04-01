<?php

function seguranca_adm(){
    if (
        (empty($_SESSION['usuarioId'])) || 
        (empty($_SESSION['usuarioEmail'])) ||
        (empty($_SESSION['usuarioNivelAcessoId']))
       )
       {
           $_SESSION['loginErro'] = "Área Restrita - Necessário LOGIN";
           header("Location:index.php");
       }
    }
?>