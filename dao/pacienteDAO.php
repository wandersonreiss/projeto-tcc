<?php

require_once 'conexao/conexao.php';

class PacienteDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllPaciente() {
        try {
            $sql = "SELECT * FROM paciente";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $pacientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $pacientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarPaciente(PacienteDTO $pacienteDTO) {
        try {
            $sql = "INSERT INTO `paciente` (`nome`, `cpf`, `endereco`, `telefone`, `data_nascimento`, `dum`, `idprofissional`)
                    VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $pacienteDTO->getNome());
            $stmt->bindValue(2, $pacienteDTO->getCpf());
            $stmt->bindValue(3, $pacienteDTO->getEndereco());
            $stmt->bindValue(4, $pacienteDTO->getTelefone());
            $stmt->bindValue(5, $pacienteDTO->getDataNascimento());
            $stmt->bindValue(6, $pacienteDTO->getDum());
            $stmt->bindValue(7, $pacienteDTO->getIdProfissional());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirPaciente($id) {
        try {
            $sqlCheck = "SET foreign_key_checks = 0;";
            $stmtCheck = $this->pdo->prepare($sqlCheck);
            $stmtCheck->execute();

            $sql = "DELETE FROM paciente 
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

    public function getPacienteById($id) {
        try {
            $sql = "SELECT * FROM paciente WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $paciente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $paciente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updatePacienteById(PacienteDTO $pacienteDTO) {
        try {
            $sql = "UPDATE paciente SET nome=?,
                                       cpf=?,
                                       endereco=?,
                                       telefone=?,
                                       data_nascimento=?,
                                       dum=?
                    WHERE id= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $pacienteDTO->getNome());
            $stmt->bindValue(2, $pacienteDTO->getCpf());
            $stmt->bindValue(3, $pacienteDTO->getEndereco());
            $stmt->bindValue(4, $pacienteDTO->getTelefone());
            $stmt->bindValue(5, $pacienteDTO->getDataNascimento());
            $stmt->bindValue(6, $pacienteDTO->getDum());
            $stmt->bindValue(7, $pacienteDTO->getId());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
