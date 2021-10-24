<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/pacienteDAO.php';
        include '../js/funcaoData.php';

        $pacienteDAO = new PacienteDAO();
        $pacientes = $pacienteDAO->getAllPaciente();

        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Nome</th>";
        echo "  <th>CPF</th>";
        echo "  <th>Endereço</th>";
        echo "  <th>Telefone</th>";
        echo "  <th>Data de nascimento</th>";
        echo "  <th>DUM</th>";
        echo "</tr>";

        foreach ($pacientes as $c) {
            echo "<tr>";
            echo "  <td>{$c["nome"]}</td>";
            echo "  <td>{$c["cpf"]}</td>";
            echo "  <td>{$c["endereco"]}</td>";
            echo "  <td>{$c["telefone"]}</td>";
            echo "  <td>{$c["data_nascimento"]}</td>";
            echo "  <td>{$c["dum"]}</td>";
            echo "  <td><a href='../controller/excluirProfissionalByIdController.php?id={$c["id"]}'>Excluir</a></td>";
            echo "  <td><a href='alterarProfissional.php?id={$c["id"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
