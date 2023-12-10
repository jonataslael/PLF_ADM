<?php
include 'banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Use prepared statements para evitar injeção de SQL
    $stmt = $conexao->prepare("SELECT * FROM login WHERE email=? AND senha=?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['login'] = 'ok';
        $linha = $result->fetch_assoc();

        if ($linha['id'] == '1') {
            header('Location: ../dashboard.php');
            exit; // Encerre o script após o redirecionamento
        }
    } else {
        header('Location: ../login_adm.php?login=erro');
        exit; // Encerre o script após o redirecionamento
    }
}
?>