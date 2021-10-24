<?php

class ProfissionalDTO {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $crm;
    private $coren;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getCrm() {
        return $this->crm;
    }

    public function setCrm($crm) {
        $this->crm = $crm;
    }

    public function getCoren() {
        return $this->coren;
    }

    public function setCoren($coren) {
        $this->coren = $coren;
    }
}

?>
