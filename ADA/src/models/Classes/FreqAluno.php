<?php

class FreqAluno {
    private $idAluno;
    private $idFreq;
    private $presenca;
    
    public function __construct($idAluno = NULL, $idFreq = NULL, $presenca = NULL) {
        $this->idAluno = $idAluno;
        $this->idFreq = $idFreq;
        $this->presenca = $presenca;
    }

    public function getIdAluno() {
        return $this->idAluno;
    }

    public function getIdFreq() {
        return $this->idFreq;
    }

    public function getPresenca() {
        return $this->presenca;
    }

    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    public function setIdFreq($idFreq) {
        $this->idFreq = $idFreq;
    }

    public function setPresenca($presenca) {
        $this->presenca = $presenca;
    }

    public function getAttr(){
        return get_object_vars($this);
    }

}

?>