<?php 
session_start();
include_once 'includes/header.php';
include_once 'includes/menu.php';
?>

 <div class="row container">
     <div class="col s12">
         <h5 class="light" >Edição de contatos</h5><hr>
     </div>
 </div>

 <?php
    include_once 'banco_de_dados/conexao.php';

    $id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['id'] = $id;
    $querySelect = $link->query("SELECT  * FROM tb_clientes WHERE  id='$id'");

    while($registros = $querySelect-> fetch_assoc()){
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
    }
 ?>

 <!-- FORMULÁRIO -->

 <div class="row container">
        <p>&nbsp;</p>
        <form action="banco_de_dados/update.php" method="post" class="col s12">
        <fieldset class="formulario">
            <legend><img src="imagens/add.png" width="100"></legend>

            <?php
                if(isset($_SESSION['msg'])):
                    echo $_SESSION ['msg'];
                    session_unset();
                endif;

            ?>
            

    <!--NOME--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="50" require autofocus>
                <label for="nome">Nome:</label>
            </div>
    <!--Data de nascimento--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">play_arrow</i>
                <input type="date" name="dataNasc" id="dataNasc" value="<?php echo $dataNasc ?>" max="2001-07-18" require>
                <label for="dataNasc">Data de nascimento:</label>
            </div>
    <!--CPF--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">play_arrow</i>
                <input type="text" name="cpf" id="cpf" value="<?php echo $cpf ?>" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="CPF : xxx-xxx-xxx-xx" required>
                <label for="cpf">CPF:</label>
            </div>
    <!--telefone--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">play_arrow</i>
                <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="30" pattern="[0-9]{2}[0-9]{4}[0-9]{4}" placeholder="DDD-xxxx-xxxx" required>
                <label for="telefone">Celular:</label>
            </div>
    <!--Email--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">play_arrow</i>
                <input type="text" size="30" name="email" id="email" value="<?php echo $email ?>" maxlength="60" placeholder="Insira seu email..." required><br>
                <label for="email">Email:</label>
            </div>   
    <!--CEP--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">play_arrow</i>
                <input type="text" name="cep" id="cep" value="<?php echo $cep ?>" placeholder="Cep da sua cidade..." required><br>
                <label for="cep">CEP:</label>
            </div>
    <!--Logradouro--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">play_arrow</i>
                <input type="text" name="logradouro" id="logradouro" value="<?php echo $logradouro ?>" placeholder="Rua , avenida..." required><br>
                <label for="logradouro">Logradouro:</label>
            </div>
    <!--NúmeroCasa--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">play_arrow</i>
                <input type="number" name="numeroCasa" id="numeroCasa" value="<?php echo $numeroCasa ?>" placeholder="número da casa..." required><br>
                <label for="numeroCasa">Número:</label>
            </div>
    <!--Complemento--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">play_arrow</i>
                <input type="text" name="complemento" id="complemento" value="<?php echo $complemento ?>" required><br>
                <label for="complemento">Complemento:</label>
            </div> 
    <!--Bairro--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">play_arrow</i>
                <input type="text" name="bairro" id="bairro" value="<?php echo $bairro ?>" required><br>
                <label for="bairro">Bairro:</label>
            </div>
    <!--UF--> 
            <div class="input-field col s12">
                <i class="material-icons prefix">play_arrow</i>
                <input type="text" name="uf" id="uf" value="<?php echo $uf ?>" pattern="[A-Za-z]{2}" placeholder="EX : 'SC'" required><br>
                <label for="uf">UF:</label>
            </div>
    <!--BOTOES--> 
            <div class="input field col s12">
                <input type="submit" value="Alterar" class="btn blue">
                <a href="consultas.php" class="btn red">Cancelar</a>
            </div>     
                              
        </fieldset>

    </form>
    </div>






<?php
include_once 'includes/footer.php';
?>