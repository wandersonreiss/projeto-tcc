<?php

class ClienteDTO {
    private $idcliente;
    private $nome;
    private $cpf;
    private $rg;
    private $datanascimento;
    private $endereco;
    private $sexo;
    
    public function getIdcliente() {
        return $this->idcliente;
    }

    public function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
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

    public function getRg() {
        return $this->rg;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function getDatanascimento() {
        return $this->datanascimento;
    }

    public function setDatanascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }


}

?>
