<?php
  include 'banco.php';

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "select * from login where email='$email' and senha='$senha'";

  $consulta = $conexao -> query($sql);

  if($consulta){
    if($consulta -> num_rows > 0){
      session_start();
      $_SESSION['login'] = 'ok';
      $linha = $consulta -> fetch_array(MYSQLI_ASSOC);
      
      if($linha['id'] == '1'){
          header('Location: ../dashboard.php');
      }

    }
    else {
      header('Location: ../login_adm.php?login=erro');
    }
  }
      
?>