<?php
include_once 'conexao.php';
session_start();
$id = $_SESSION['id'];

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


    $queryUpdate = $link->query("UPDATE tb_clientes SET nome='$nome', dataNasc='$dataNasc',cpf='$cpf',email='$email',
                                telefone='$telefone', cep='$cep', logradouro='$logradouro',numeroCasa='$numeroCasa',
                                complemento='$complemento',bairro='$bairro',uf='$uf' WHERE id='$id'");

    $affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0){
        header("Location:../consultas.php");     
    }