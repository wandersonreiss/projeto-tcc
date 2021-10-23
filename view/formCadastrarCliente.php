<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../controller/cadastrarClienteController.php" method="post">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" size="50"/></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="text" name="cpf"/></td>
                </tr>                
                <tr>
                    <td>RG:</td>
                    <td><input type="text" name="rg"/></td>
                </tr>                                
                <tr>
                    <td>Data de Nascimento:</td>
                    <td><input type="text" name="datanascimento"/></td>
                </tr>                                                
                <tr>
                    <td>Sexo:</td>
                    <td>
                        Masculino <input type="radio" name="sexo" value="masc"/>
                        Feminino <input type="radio" name="sexo" value="fem"/>
                    </td>
                </tr>                                
                <tr>
                    <td>Endereço:</td>
                    <td><input type="text" size="60" name="endereco"/></td>
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
