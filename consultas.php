<?php include_once "includes/header.php"; ?>
<?php include_once "includes/menu.php"; ?>


<div class="row container">
    <div class="col s12">
        <h5 class="light">Consultas</h5><hr>

        <table class="stripped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de nascimento</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>CEP</th>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>UF</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once 'banco_de_dados/read.php' ?>
            </tbody>

        </table>
    </div>
</div>














<?php include_once "includes/footer.php"; ?>