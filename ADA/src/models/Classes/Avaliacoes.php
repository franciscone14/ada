<?php

class Avaliacoes {
    
    private $idAva;
    private $descricaoAva;
    private $tipoAva;
    private $pesoAva;
    private $dataAva;
    private $obsAva;
    private $idDiscAva;
    
    public function __construct($idAva = NULL, $descricaoAva = NULL, $tipoAva = NULL, $pesoAva = NULL, $dataAva = NULL, $obsAva = NULL, $idDiscAva = NULL) {
        $this->idAva = $idAva;
        $this->descricaoAva = $descricaoAva;
        $this->tipoAva = $tipoAva;
        $this->pesoAva = $pesoAva;
        $this->dataAva = $dataAva;
        $this->obsAva = $obsAva;
        $this->idDiscAva = $idDiscAva;
    }
    
    public function getIdAva() {
        return $this->idAva;
    }

    public function getDescricaoAva() {
        return $this->descricaoAva;
    }

    public function getTipoAva() {
        return $this->tipoAva;
    }

    public function getPesoAva() {
        return $this->pesoAva;
    }

    public function getDataAva() {
        return $this->dataAva;
    }

    public function getObsAva() {
        return $this->obsAva;
    }

    public function getIdDiscAva() {
        return $this->idDiscAva;
    }

    public function setIdAva($idAva) {
        $this->idAva = $idAva;
    }

    public function setDescricaoAva($descricaoAva) {
        $this->descricaoAva = $descricaoAva;
    }

    public function setTipoAva($tipoAva) {
        $this->tipoAva = $tipoAva;
    }

    public function setPesoAva($pesoAva) {
        $this->pesoAva = $pesoAva;
    }

    public function setDataAva($dataAva) {
        $this->dataAva = $dataAva;
    }

    public function setObsAva($obsAva) {
        $this->obsAva = $obsAva;
    }

    public function setIdDiscAva($idDiscAva) {
        $this->idDiscAva = $idDiscAva;
    }

    public function getAttr(){
        return get_object_vars($this);
    }

}

?>
