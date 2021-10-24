<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <?php
    require_once '../dao/profissionalDAO.php';
    
    $id = $_GET["id"];
    $profissionalDAO = new ProfissionalDAO();
    $profissional = $profissionalDAO->getProfissionalById($id);
   
    ?>
    <body>
        <form action="../controller/alterarProfissionalController.php" method="post">
            <input type="hidden" name="id" value="<?php echo $profissional["id"]?>"/>
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" value="<?php echo $profissional["nome"] ?>" name="nome" size="50"/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" value="<?php echo $profissional["email"]?>" name="email"/></td>
                </tr>                
                <tr>
                    <td>Senha:</td>
                    <td><input type="text" value="<?php echo $profissional["senha"]?>" name="senha"/></td>
                </tr>                                
                <tr>
                    <td>CRM:</td>
                    <td><input type="text" value="<?php echo $profissional["crm"]?>" name="crm"/></td>
                </tr>                                                                             
                <tr>
                    <td>COREN:</td>
                    <td><input type="text" value="<?php echo $profissional["coren"]?>" name="coren"/></td>
                </tr>                                                
                <tr>                    
                    <td colspan="2">
                        <input type="submit" value="Alterar"/>
                    </td>
                </tr>                                                                
            </table>
        </form>       
    </body>
</html>
