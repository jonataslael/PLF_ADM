<?php
include 'banco.php';

$id = $_POST['id'];

$sql = "delete from 'tabela' where id = $id";

$delete = $conexao->query($sql);

if($delete){
  echo "sucesso";
}else{
  echo "erro";
}

?>