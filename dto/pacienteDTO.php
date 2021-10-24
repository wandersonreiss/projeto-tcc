<?php

class PacienteDTO {
    private $id;
    private $nome;
    private $cpf;
    private $endereco;
    private $telefone;
    private $data_nascimento;
    private $dum;
    private $idprofissional;
    
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

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getDataNascimento() {
        return $this->data_nascimento;
    }

    public function setDataNascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function getDum() {
        return $this->dum;
    }

    public function setDum($dum) {
        $this->dum = $dum;
    }

    public function getIdProfissional() {
        return $this->idprofissional;
    }

    public function setIdProfissional($idprofissional) {
        $this->idprofissional = $idprofissional;
    }
}

?>
