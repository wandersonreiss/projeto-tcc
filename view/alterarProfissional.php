<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <?php
    require_once '../dao/profissionalDAO.php';
    
    $id = $_GET["id"];
    $profissionalDAO = new ProfissionalDAO();
    $profissional = $profissionalDAO->getProfissionalById($id);
   
    ?>
    <body style="margin-left: 40px;">
        <h1 class="fs-3 text mb-5">Cadastrar profissional</h1>
        <form action="../controller/alterarProfissionalController.php" method="post">
            <input type="hidden" name="id" value="<?php echo $profissional["id"]?>"/>
            <input type="text" name="nome" size="50" placeholder="Nome" class="input-default" value="<?php echo $profissional["nome"] ?>"/>
            <input type="text" name="email" size="50" placeholder="Email" class="input-default" value="<?php echo $profissional["email"]?>"/>             
            <input type="text" name="senha" size="50" placeholder="Senha" class="input-default" value="<?php echo $profissional["senha"]?>"/>             
            <button type="submit" class="btn btn-primary btn-personalized mt-5">Alterar</button>
        </form>       
    </body>
</html>
