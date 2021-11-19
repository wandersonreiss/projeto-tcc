<?php

require_once 'conexao/conexao.php';

class ProfissionalDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllProfissional() {
        try {
            $sql = "SELECT * FROM profissional";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $profissionais = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $profissionais;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarProfissional(ProfissionalDTO $profissionalDTO) {
        try {
            $sql = "INSERT INTO `profissional` (`nome`, `email`, `senha`, `crm`, `coren`, `idperfil`)
                    VALUES (?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $profissionalDTO->getNome());
            $stmt->bindValue(2, $profissionalDTO->getEmail());
            $stmt->bindValue(3, $profissionalDTO->getSenha());
            $stmt->bindValue(4, $profissionalDTO->getCrm());
            $stmt->bindValue(5, $profissionalDTO->getCoren());
            $stmt->bindValue(6, $profissionalDTO->getIdPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirProfissional($id) {
        try {
            $sqlCheck = "SET foreign_key_checks = 0;";
            $stmtCheck = $this->pdo->prepare($sqlCheck);
            $stmtCheck->execute();

            $sql = "DELETE FROM profissional 
                   WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $sqlCheck = "SET foreign_key_checks = 1;";
            $stmtCheck = $this->pdo->prepare($sqlCheck);
            $stmtCheck->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getProfissionalById($id) {
        try {
            $sql = "SELECT * FROM profissional WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $profissional = $stmt->fetch(PDO::FETCH_ASSOC);
            return $profissional;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateProfissionalById(ProfissionalDTO $profissionalDTO) {
        try {
            $sql = "UPDATE profissional SET nome=?,
                                       email=?,
                                       senha=?
                    WHERE id= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $profissionalDTO->getNome());
            $stmt->bindValue(2, $profissionalDTO->getEmail());
            $stmt->bindValue(3, $profissionalDTO->getSenha());
            $stmt->bindValue(4, $profissionalDTO->getId());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
