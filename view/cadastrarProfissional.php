<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../controller/cadastrarProfissionalController.php" method="post">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" size="50"/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"/></td>
                </tr>                
                <tr>
                    <td>Senha</td>
                    <td><input type="text" name="senha"/></td>
                </tr>                                
                <tr>
                    <td>CRM:</td>
                    <td><input type="text" name="crm"/></td>
                </tr>  
                <tr>
                    <td>COREN:</td>
                    <td><input type="text" name="coren"/></td>
                </tr>  
                <tr>                    
                    <td colspan="2">
                        <input type="submit" value="Cadastrar"/>
                    </td>
                </tr>                                                                
            </table>
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
