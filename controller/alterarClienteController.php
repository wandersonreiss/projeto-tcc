<?php

require_once '../dto/profissionalDTO.php';
require_once '../dao/profissionalDAO.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$cpf = $_POST["email"];
$rg = $_POST["senha"];
$sexo = $_POST["crm"];
$endereco = $_POST["coren"];
$id = $_POST["id"];

$profissionalDTO = new ProfissionalDTO();
$profissionalDTO->setNome($nome);
$profissionalDTO->setEmail($email);
$profissionalDTO->setSenha($senha);
$profissionalDTO->setCrm($crm);
$profissionalDTO->setCoren($coren);
$profissionalDTO->setId($id);

$profissionalDAO = new ProfissionalDAO();
$profissionalDAO->updateProfissionalById($profissionalDTO);


echo "<script>";
echo "window.location.href = '../view/listarAllProfissional.php';";
echo "</script> ";
?>
