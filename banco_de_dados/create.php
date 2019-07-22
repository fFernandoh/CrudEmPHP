<?php

    session_start();
    include_once 'conexao.php';

    $nome        = $_POST['nome'];
    $dataNasc    = $_POST['dataNasc'];
    $cpf         = $_POST['cpf'];
    $email       = $_POST['email'];
    $telefone    = $_POST['telefone'];
    $cep         = $_POST['cep'];
    $logradouro  = $_POST['logradouro'];
    $numeroCasa  = $_POST['numeroCasa'];
    $complemento = $_POST['complemento'];
    $bairro      = $_POST['bairro'];
    $uf          = $_POST['uf'];


    $querySelect = $link->query("SELECT email FROM tb_clientes");
    $array_emails = [];

    while($emails = $querySelect->fetch_assoc()):
        $emails_existentes = $emails['email'];
        array_push($array_emails,$emails_existentes);
    endwhile;

    if(in_array($email,$array_emails)):
        $_SESSION['msg'] = "<p class='center red-text'>".'Já existe um cliente cadastro com esse e-mail'."<br>"; 
        header("Location:../"); 
    else:
        $queryInsert = $link->query("INSERT INTO tb_clientes VALUES(default, '$nome','$dataNasc','$cpf','$email','$telefone','$cep','$logradouro','$numeroCasa','$complemento','$bairro','$uf')");
        $affected_rows = mysqli_affected_rows($link);
    
    if($affected_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso'."<br>";
        header("Location:../");

    endif;

endif;


