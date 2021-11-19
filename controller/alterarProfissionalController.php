<?php

require_once '../dto/profissionalDTO.php';
require_once '../dao/profissionalDAO.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$id = $_POST["id"];

$profissionalDTO = new ProfissionalDTO();
$profissionalDTO->setNome($nome);
$profissionalDTO->setEmail($email);
$profissionalDTO->setSenha($senha);
$profissionalDTO->setId($id);

$profissionalDAO = new ProfissionalDAO();
$profissionalDAO->updateProfissionalById($profissionalDTO);


echo "<script>";
echo "window.location.href = '../view/listarAllProfissional.php';";
echo "</script> ";
?>
