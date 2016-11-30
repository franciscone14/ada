<?php

class AlunoEstudaEm {
    private $idAluno;
    private $idDiscAlu;
    
    public function __construct($idAluno = NULL, $idDiscAlu = NULL){
        $this->idAluno = $idAluno;
        $this->idDiscAlu = $idDiscAlu;
    }

    public function getIdAluno() {
        return $this->idAluno;
    }

    public function getIdDiscAlu() {
        return $this->idDiscAlu;
    }

    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    public function setIdDiscAlu($idDiscAlu) {
        $this->idDiscAlu = $idDiscAlu;
    }

    public function getAttr(){
        return get_object_vars($this);
    }
}


?>