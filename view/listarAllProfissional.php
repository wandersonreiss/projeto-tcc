<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/profissionalDAO.php';
        include '../js/funcaoData.php';

        $profissionalDAO = new ProfissionalDAO();
        $profissionais = $profissionalDAO->getAllProfissional();

        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Nome</th>";
        echo "  <th>Email</th>";
        echo "  <th>CRM</th>";
        echo "  <th>COREN</th>";
        echo "  <th>Permissão</th>";
        echo "</tr>";

        foreach ($profissionais as $c) {
            echo "<tr>";
            echo "  <td>{$c["nome"]}</td>";
            echo "  <td>{$c["email"]}</td>";
            echo "  <td>{$c["crm"]}</td>";
            echo "  <td>{$c["coren"]}</td>";
            echo "  <td>{$c["idperfil"]}</td>";
            echo "  <td><a href='../controller/excluirProfissionalByIdController.php?id={$c["id"]}'>Excluir</a></td>";
            echo "  <td><a href='alterarProfissional.php?id={$c["id"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
