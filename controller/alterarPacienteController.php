<?php

require_once '../dto/pacienteDTO.php';
require_once '../dao/pacienteDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$data_nascimento = dateBRtoDateUS($_POST["data_nascimento"]);
$dum = dateBRtoDateUS($_POST["dum"]);
$id = $_POST["id"];

$pacienteDTO = new PacienteDTO();
$pacienteDTO->setNome($nome);
$pacienteDTO->setCpf($cpf);
$pacienteDTO->setEndereco($endereco);
$pacienteDTO->setTelefone($telefone);
$pacienteDTO->setDataNascimento($data_nascimento);
$pacienteDTO->setDum($dum);
$pacienteDTO->setId($id);

$pacienteDAO = new PacienteDAO();
$pacienteDAO->updatePacienteById($pacienteDTO);


echo "<script>";
echo "window.location.href = '../view/listarAllPaciente.php';";
echo "</script> ";
?>
