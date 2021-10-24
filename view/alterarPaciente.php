<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <?php
        require_once '../dao/pacienteDAO.php';
        include '../js/funcaoData.php';

        $id = $_GET["id"];
        $pacienteDAO = new PacienteDAO();
        $paciente = $pacienteDAO->getPacienteById($id);
   
    ?>
    <body>
        <form action="../controller/alterarPacienteController.php" method="post">
            <input type="hidden" name="id" value="<?php echo $paciente["id"]?>"/>
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" value="<?php echo $paciente["nome"] ?>" name="nome" size="50"/></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="text" value="<?php echo $paciente["cpf"]?>" name="cpf"/></td>
                </tr>                
                <tr>
                    <td>Endereço:</td>
                    <td><input type="text" value="<?php echo $paciente["endereco"]?>" name="endereco"/></td>
                </tr>                                
                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" value="<?php echo $paciente["telefone"]?>" name="telefone"/></td>
                </tr>                                                                             
                <tr>
                    <td>Data de nascimento:</td>
                    <td><input type="text" value="<?php echo dateUStoDateBR($paciente["data_nascimento"])?>" name="data_nascimento"/></td>
                </tr>  
                <tr>
                    <td>DUM:</td>
                    <td><input type="text" value="<?php echo dateUStoDateBR($paciente["dum"])?>" name="dum"/></td>
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
