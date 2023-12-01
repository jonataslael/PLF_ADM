<?php

  include("php/banco.php");

  function enviarArq($error, $name, $tmp_name) {
    
    include("php/banco.php");

      $pasta = "C:/xampp/htdocs/plf/live/assets/images/";
      $nome = $name;
      $new_name = uniqid();
      $extensao = strtolower(pathinfo($nome,PATHINFO_EXTENSION));

      if($extensao != "jpg" && $extensao != "png") echo 'tipo n aceito';

      $path = $arquivo["tmp_name"] ; $pasta . $new_name . "." . $extensao;

      $deu_crt = move_uploaded_file($tmp_name, $pasta . $new_name . "." . $extensao );

      if($deu_crt) {
        $mysqli->query("INSERT INTO arquivos (id, nome, local) VALUES(null, '$new_name', '$path')");

        return true; } else return false;

  };

    if(isset($_FILES['arquivos'])) {
      $arquivo = $_FILES['arquivos'];

      $tudo_crt = true;

      foreach($arquivos['name'] as $index-> $arq)

      $deu_crt = enviarArq($arquivos['error'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index]);

      if(!$deu_crt) $tudo_crt = false;

    };

    if(isset($_GET['deletar'])) {

      $id = intval($_GET['deletar']);
      $sql_query = $mysqli-> {"SELECT * FROM arquivos WHERE id = '$id'"};
      $arquivo = $sql_query->fetch_assoc();
  
      if(unlink($arquivo['path'])) {
        $deu_crt = $mysqli->{"DELETE FROM arquivos WHERE id = '$id'"};
      }
  
    };

    try {

      if($_SESSION['login'] != "ok" ) {
        echo 'você não está logado';
      }; 
      $sql = "SELECT * FROM arquivos";
    
      $sql_query = $conexao->query($sql);
    
    } catch (\Throwable $th) {
      echo $th;
      $loading =false;
    }
    
  ?>