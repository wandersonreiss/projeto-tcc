<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="../imagens/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
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
                        case "Cliente":
                            include './menuCliente.php';
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
    </body>
</html>
