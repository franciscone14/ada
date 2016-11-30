<?php

class Frequencia {
    private $idFreq;
    private $contProgFreq;
    private $dataFreq;
    
    public function __construct($idFreq = NULL, $contProgFreq = NULL, $dataFreq = NULL) {
        $this->idFreq = $idFreq;
        $this->contProgFreq = $contProgFreq;
        $this->dataFreq = $dataFreq;
    }

    public function getIdFreq() {
        return $this->idFreq;
    }

    public function getContProgFreq() {
        return $this->contProgFreq;
    }

    public function getDataFreq() {
        return $this->dataFreq;
    }

    public function setIdFreq($idFreq) {
        $this->idFreq = $idFreq;
    }

    public function setContProgFreq($contProgFreq) {
        $this->contProgFreq = $contProgFreq;
    }

    public function setDataFreq($dataFreq) {
        $this->dataFreq = $dataFreq;
    }

    public function getAttr(){
        return get_object_vars($this);
    }

}

?>