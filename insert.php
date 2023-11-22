<?php
  include '../../banco.php';

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $assunto = $_POST['assunto'];

  $insert = "INSERT INTO contact VALUES (null,'$nome','$email','$telefone','$assunto')";
  $add = $conexao -> query($insert);

?>