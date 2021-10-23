<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="../imagens/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <title>Home</title>
    </head>
    <body>
        <?php
        session_start();
        include 'validaLogin.php';
        ?> 
        <table width="100%">
            <tr>
                <td width="85%">
                    <?php
                    switch ($_SESSION["perfil"]) {
                        case "Administrador":
                            include './menuAdministrador.php';
                            break;
                        case "Usuario":
                            include './menuUsuario.php';
                            break;
                    }
                    ?>
                    <br>
                </td>
                <td align="right" width="15%">
                    <?php
                    if (isset($_SESSION["usuario"])) {
                        echo "Usuário logado: ", $_SESSION["usuario"];
                        echo "<br>";
                        echo "Perfil: ", $_SESSION["perfil"];
                    }
                    ?>
                    <br>
                    <a href="../controller/logoffController.php">sair</a>
                </td>
            </tr>
        </table>
        <table id="tablehome">
            <tr>         
                <td>
                    <iframe name="centro" src="" width="100%" height="100%" frameborder="0"></iframe>
                </td>
            </tr>                
        </table>
        <?php include '../footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
