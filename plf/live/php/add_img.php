<?php

include("php/banco.php");

$foto = $_FILES['arquivo']['tmp_name'];

$pasta = 'assets/images/gallery/';

if (!empty($foto)){
    $file = getimagesize($foto);
    
    //TESTA A EXTENSÃO DO ARQUIVO
    if(!preg_match('/^image\/(?:jpg|jpeg|png)$/i', $file['mime'])){
        echo "erro - extensão não permitida";
        exit();
    }

    //CAPTURA A EXTENSÃO DO ARQUIVO
    $extensao = str_ireplace("/", "", strchr($file['mime'], "/"));

    //MONTA O CAMINHO DO NOVO DESTINO
    $new_name = uniqid('', true);
    $path = "{$pasta}". $new_name . '.' . $extensao;  
    move_uploaded_file ($foto , $path );

    $sql = "insert into arquivo (id, nome, local) VALUES('null', '$new_name', '$path')";
    $add = $conexao->query($sql);

} 

   

    if(isset($_GET['deletar'])) {

      $id = intval($_GET['deletar']);
      $sql_query = $mysqli-> {"SELECT * FROM arquivos WHERE id = '$id'"};
      $arquivo = $sql_query->fetch_assoc();
  
      if(unlink($arquivo['path'])) {
        $deu_crt = $mysqli->{"DELETE FROM arquivos WHERE id = '$id'"};
      }
  
    };
    
  ?>