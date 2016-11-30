<?php

class AlunoAvaliacoes {
    
    private $idAlunoAva;
    private $idNotaAva;
    private $valorNota;
    private $observacaoNota;
    
    public function __construct($idAlunoAva = NULL, $idNotaAva = NULL, $valorNota = NULL, $observacaoNota = NULL) {
        $this->idAlunoAva = $idAlunoAva;
        $this->idNotaAva = $idNotaAva;
        $this->valorNota = $valorNota;
        $this->observacaoNota = $observacaoNota;
    }

    public function getIdAlunoAva() {
        return $this->idAlunoAva;
    }

    public function getIdNotaAva() {
        return $this->idNotaAva;
    }

    public function getValorNota() {
        return $this->valorNota;
    }

    public function getObservacaoNota() {
        return $this->observacaoNota;
    }

    public function setIdAlunoAva($idAlunoAva) {
        $this->idAlunoAva = $idAlunoAva;
    }

    public function setIdNotaAva($idNotaAva) {
        $this->idNotaAva = $idNotaAva;
    }

    public function setValorNota($valorNota) {
        $this->valorNota = $valorNota;
    }

    public function setObservacaoNota($observacaoNota) {
        $this->observacaoNota = $observacaoNota;
    }

    public function getAttr(){
        return get_object_vars($this);
    }

}


?>