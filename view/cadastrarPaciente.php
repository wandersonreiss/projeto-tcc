<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <?php
        session_start();
    ?> 
    <body>
        <form action="../controller/cadastrarPacienteController.php" method="post">
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
                    <td>Endereço:</td>
                    <td><input type="text" name="endereco"/></td>
                </tr>                                
                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" name="telefone"/></td>
                </tr>  
                <tr>
                    <td>Data de nascimento:</td>
                    <td><input type="text" name="data_nascimento"/></td>
                </tr> 
                <tr>
                    <td>DUM:</td>
                    <td><input type="text" name="dum"/></td>
                </tr>
                <tr>
                    <input type="hidden" name="idprofissional" value="<?php echo $_SESSION["id"]?>"/>
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
