<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                        <td>Email:</td>
                        <td><input type="text" name="email"/></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
