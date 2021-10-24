<?php
require_once '../dao/pacienteDAO.php';

$id= $_GET["id"];
//echo $idcliente;

$paciente = new PacienteDAO();
$paciente->excluirPaciente($id);

echo "<script>";
echo "window.location.href = '../view/listarAllPaciente.php';";
echo "</script> ";
?>
