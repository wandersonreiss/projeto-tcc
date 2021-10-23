<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title>Login</title>
    </head>
    <body>
        <center>
        <div id="divlogin">
            <p id="logologin">
                <img src="imagens/logoetc.png" alt="Logo"/>
            </p>
            <form action="controller/loginController.php" method="post" id="formlogin">
                <table align="center">
                    <tr>
                        <td>Usuário:</td>
                        <td><input type="text" name="usuario"/></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="senha"/></td>
                    </tr>                
                    <tr>                    
                        <td>&nbsp;</td>
                        <td>
                            <input type="reset" value="Limpar"/>
                            <input type="submit" value="Entrar"/>
                        </td>
                    </tr>                                                                
                </table>
            </form> 
        </div>
        </center>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo "<div id='errorlogin'>", $_GET["msg"], "</div>";
        }
        ?>
    </center>
    <?php
        include './footer.php';
    ?>
</body>
</html>
