<?php
session_start();
require_once '../dao/loginDAO.php';

$profissional = $_POST["email"];
// $senha = md5($_POST["senha"]);
$senha = $_POST["senha"];

$loginDAO = new LoginDAO();
$profissional = $loginDAO->login($profissional, $senha, $id);

if (!empty($profissional)) {

    $_SESSION["usuario"] = $profissional["email"];
    $_SESSION["perfil"] = $profissional["perfil"];
    $_SESSION["id"] = $profissional["id"];
    echo "<script>";
    echo "window.location.href = '../view/principal.php';";
    echo "</script> ";
} else {
    $msg = "Usuário e/ou senha invalido";
    echo "<script>";
    echo "window.location.href = '../index.php?msg={$msg}';";
    echo "</script> ";
    
}
?>
