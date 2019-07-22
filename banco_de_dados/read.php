<?php
include_once 'conexao.php';

$querySelect = $link->query("SELECT * FROM tb_clientes");

while($registros = $querySelect->fetch_assoc()){

    $id = $registros['id'];
    $nome = $registros['nome'];
    $email = $registros['email'];
    $dataNasc = $registros['dataNasc'];
    $cpf = $registros['cpf'];
    $telefone = $registros['telefone'];
    $cep = $registros['cep'];
    $logradouro = $registros['logradouro'];
    $numeroCasa = $registros['numeroCasa'];
    $complemento = $registros['complemento'];
    $bairro = $registros['bairro'];
    $uf = $registros['uf'];


    echo "<tr>";

    echo "<td>$nome</td><td>$email</td><td>$dataNasc</td>
          <td>$cpf</td><td>$telefone</td><td>$cep</td>
          <td>$logradouro</td><td>$numeroCasa</td><td>$complemento</td>
          <td>$bairro</td><td>$uf</td><td><a href='editar.php?id=$id'><i class = 'material-icons'>edit</i></td>
          <td><a href='banco_de_dados/delete.php?id=$id'><i class = 'material-icons'>delete</i> </td>";
  
    echo "</tr>";




}