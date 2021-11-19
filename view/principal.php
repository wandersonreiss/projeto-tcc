<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="../imagens/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <title>Controle pré-natal</title>
    </head>
    <body>
        <?php
        session_start();
        include 'validaLogin.php';
        ?> 
        <main class="container d-flex vw-100">
            <div>
                <?php
                    switch ($_SESSION["perfil"]) {
                        case "Administrador":
                            include './menuAdministrador.php';
                            break;
                        case "Usuario":
                            include './menuUsuario.php';
                            break;
                        case "Cliente":
                            include './menuCliente.php';
                            break;
                    }
                ?>
            </div>
            <session class="d-flex flex-column mt-4" style="width: 75vw;">
                <div class="d-flex flex-column align-items-end">
                    <?php
                        if (isset($_SESSION["usuario"])) {
                            echo '<div class="d-flex flex-column">';
                            echo "  <span>{$_SESSION["usuario"]}</span>";
                            echo "  <span>{$_SESSION["perfil"]}</span>";
                            echo "</div>";
                        }
                    ?>
                    <a href="../controller/logoffController.php">sair</a>
                </div>
                <div>
                    <iframe name="centro" src="" frameborder="0" style="width: 50vw; height: 100vh;"></iframe>
                </div>
            </session>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
