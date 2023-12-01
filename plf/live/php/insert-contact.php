<?php
    try {
        include 'banco.php';

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $assunto = $_POST['assunto'];

        $sql = "insert into contact values (null,'$nome','$email','$telefone','$assunto')";

        $inserir = $conexao->query($sql);
       echo "<script>alert('hi') </script>";
    } catch (\Throwable $th) {
        echo $th;
    }

?>