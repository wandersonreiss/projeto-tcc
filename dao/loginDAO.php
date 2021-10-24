<?php

require_once 'conexao/conexao.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($email,$senha) {
        try {
            $sql = "SELECT prof.email, p.perfil, prof.id FROM profissional prof
                    INNER JOIN perfil p ON (prof.idperfil = p.id)
                    WHERE email=? AND senha=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>


SELECT u.usuario,p.perfil FROM usuario u
INNER JOIN perfil p ON (u.perfil_idperfil = p.idperfil)
WHERE usuario="otavio" AND senha="123456789";