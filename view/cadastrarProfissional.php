<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body style="margin-left: 40px;">
        <h1 class="fs-3 text mb-5">Cadastrar profissional</h1>
        <form action="../controller/cadastrarProfissionalController.php" method="post">
            <input type="text" name="nome" size="50" placeholder="Nome" class="input-default"/>
            <input type="text" name="email" size="50" placeholder="Email" class="input-default"/>
            <input type="text" name="senha" size="50" placeholder="Senha" class="input-default"/>
            <div class="d-flex">
                <input type="text" name="crm" size="50" placeholder="CRM" class="input-default"/>
                <input type="text" name="coren" size="50" placeholder="COREN" class="input-default"/>
            </div>
            <div class="text-center">
                <input type="checkbox" name="idperfil" value="on">
                <span class="text-secondary">Administrador</span>
            </div>
            <button type="submit" class="btn btn-primary btn-personalized mt-5">Cadastrar</button>
        </form>
        <center>
            <?php 
                if (!empty($_GET["msg"])){
                    echo $_GET["msg"]; 
                }
            ?>
        </center>
    </body>
</html>
