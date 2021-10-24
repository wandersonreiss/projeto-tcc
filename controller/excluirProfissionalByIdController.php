<?php
require_once '../dao/profissionalDAO.php';

$id= $_GET["id"];
//echo $idcliente;

$profissional = new ProfissionalDAO();
$profissional->excluirProfissional($id);

echo "<script>";
echo "window.location.href = '../view/listarAllProfissional.php';";
echo "</script> ";
?>
