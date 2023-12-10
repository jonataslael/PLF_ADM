<?php

include('banco.php');
session_start();
  if($_SESSION['login'] != 'erro' && $_SESSION['login'] != 'ok') {
   header('Location: login_adm.php?login=semsessao');
   exit;
  }
?>

