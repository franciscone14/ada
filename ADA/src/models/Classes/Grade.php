<?php


class Grade {
    private $idGrade;
    private $anoGrade;
    private $descricaoGrade;
    private $tipoGrade;
    
    public function __construct($idGrade = null, $anoGrade = null, $descricaoGrade = null, $tipoGrade = null) {
        $this->idGrade = $idGrade;
        $this->anoGrade = $anoGrade;
        $this->descricaoGrade = $descricaoGrade;
        $this->tipoGrade = $tipoGrade;
    }

    public function getIdGrade() {
        return $this->idGrade;
    }

    public function getAnoGrade() {
        return $this->anoGrade;
    }

    public function getDescricaoGrade() {
        return $this->descricaoGrade;
    }

    public function getTipoGrade() {
        return $this->tipoGrade;
    }

    public function setIdGrade($idGrade) {
        $this->idGrade = $idGrade;
    }

    public function setAnoGrade($anoGrade) {
        $this->anoGrade = $anoGrade;
    }

    public function setDescricaoGrade($descricaoGrade) {
        $this->descricaoGrade = $descricaoGrade;
    }

    public function setTipoGrade($tipoGrade) {
        $this->tipoGrade = $tipoGrade;
    }

    public function getAttr(){
        return get_object_vars($this);
    }

    // public function getAttr(){
    //     return get_object_vars($this);
    // }

}
