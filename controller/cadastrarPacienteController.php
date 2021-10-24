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
$idprofissional = $_POST["idprofissional"];

$pacienteDTO = new PacienteDTO();
$pacienteDTO->setNome($nome);
$pacienteDTO->setCpf($cpf);
$pacienteDTO->setEndereco($endereco);
$pacienteDTO->setTelefone($telefone);
$pacienteDTO->setDataNascimento($data_nascimento);
$pacienteDTO->setDum($dum);
$pacienteDTO->setIdProfissional($idprofissional);

$pacienteDAO = new PacienteDAO();
$sucesso = $pacienteDAO->salvarPaciente($pacienteDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/cadastrarPaciente.php?msg={$msg}';";
   echo "</script> ";
}
?>

