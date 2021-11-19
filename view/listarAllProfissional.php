<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <style>
            a {
                color: inherit;
                text-decoration: none;
            }
            td {
                color: #202E55;
            }
        </style>   
    </head>
    <body>
        <div class="mb-5" style="margin-left: 40px;">
            <h1 class="fs-3 text">Profissionais</h1>
        </div>
        <div class="bg-white p-3 m-4" style="border-radius: 20px;">
            <?php
            require_once '../dao/profissionalDAO.php';
            include '../js/funcaoData.php';

            $profissionalDAO = new ProfissionalDAO();
            $profissionais = $profissionalDAO->getAllProfissional();

            echo "<table border='1' align='center' class='table border-0'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th scope='col'><small>Nome</small></th>";
            echo "      <th scope='col'><small>Email</small></th>";
            echo "      <th scope='col'><small>CRM</small></th>";
            echo "      <th scope='col'><small>COREN</small></th>";
            echo "      <th scope='col'><small>Adm</small></th>";
            echo "      <th scope='col'><small></small></th>";
            echo "      <th scope='col'><small></small></th>";
            echo "  </tr>";
            echo "</thead>";

            foreach ($profissionais as $c) {
                echo "<tbody>";
                echo "  <tr>";
                echo "      <td><small>{$c["nome"]}</small></td>";
                echo "      <td><small>{$c["email"]}</small></td>";
                echo "      <td><small>{$c["crm"]}</small></td>";
                echo "      <td><small>{$c["coren"]}</small></td>";
                echo "      <td><small>{$c["idperfil"]}</small></td>";
                echo "      <td><small><a class='bg-danger text-white p-1 rounded' href='../controller/excluirProfissionalByIdController.php?id={$c["id"]}'>Excluir</a></small></td>";
                echo "      <td><small><a class='bg-light text-secondary p-1 rounded' href='alterarProfissional.php?id={$c["id"]}'>Alterar</a></small></td>";
                echo "  </tr>";
                echo "</tbody>";
            }
            
            echo "</table>";
            ?>
        </div>
    </body>
</html>
