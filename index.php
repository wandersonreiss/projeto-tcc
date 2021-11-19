<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <title>Login</title>
    </head>
    <body class="container vw-100 vh-100 d-flex justify-content-center align-items-center">
        <main class="d-flex justify-content-around align-items-center">
            <div class="d-flex flex-column justify-content-center align-items-center form-login-container">
                <h1 class="fs-3 text">Controle pré-natal</h1>
                <form action="controller/loginController.php" method="post" class="form-login">
                    <div>
                        <input type="text" name="email" placeholder="email@saude.com" class="input-default"/>
                    </div>
                    <div>
                        <input type="password" name="senha" placeholder="senha" class="input-default"/>
                    </div>
                    <button type="submit" class="btn btn-primary btn-personalized">
                        Entrar
                    </button>
                </form> 
            </div>
            <div class="img-pragnent">
                <img src="imagens/pragnent.png" alt="Logo" class="img-fluid"/>
            </div>
        </main>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo "<div id='errorlogin'>", $_GET["msg"], "</div>";
        }
        ?>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
