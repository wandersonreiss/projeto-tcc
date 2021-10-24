<?php
require_once '../dto/profissionalDTO.php';
require_once '../dao/profissionalDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$crm = $_POST["crm"];
$coren = $_POST["coren"];
$datanascimento = dateBRtoDateUS($_POST["datanascimento"]);
$sexo = $_POST["sexo"];
$endereco = $_POST["endereco"];

$profissionalDTO = new ProfissionalDTO();
$profissionalDTO->setNome($nome);
$profissionalDTO->setEmail($email);
$profissionalDTO->setSenha($senha);
$profissionalDTO->setCrm($crm);
$profissionalDTO->setCoren($coren);

$profissionalDAO = new ProfissionalDAO();
$sucesso = $profissionalDAO->salvarProfissional($profissionalDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/cadastrarProfissional.php?msg={$msg}';";
   echo "</script> ";
}
?>

