<?php


class Endereco{
    protected $idEnd;
    protected $ruaEnd;
    protected $bairroEnd;
    protected $complementoEnd;
    protected $cepEnd;
    protected $estadoEnd;
    protected $cidadeEnd;
    protected $numeroEnd;
    
    public function __construct($idEnd = NULL, $ruaEnd = NULL, $bairroEnd = NULL, $complementoEnd = NULL, $cepEnd = NULL, $estadoEnd = NULL, $cidadeEnd = NULL, $numeroEnd = NULL) {
        $this->idEnd = $idEnd;
        $this->ruaEnd = $ruaEnd;
        $this->bairroEnd = $bairroEnd;
        $this->complementoEnd = $complementoEnd;
        $this->cepEnd = $cepEnd;
        $this->estadoEnd = $estadoEnd;
        $this->cidadeEnd = $cidadeEnd;
        $this->numeroEnd = $numeroEnd;
    }

    public function getIdEnd() {
        return $this->idEnd;
    }

    public function getRuaEnd() {
        return $this->ruaEnd;
    }

    public function getBairroEnd() {
        return $this->bairroEnd;
    }

    public function getComplementoEnd() {
        return $this->complementoEnd;
    }

    public function getCepEnd() {
        return $this->cepEnd;
    }

    public function getEstadoEnd() {
        return $this->estadoEnd;
    }

    public function getCidadeEnd() {
        return $this->cidadeEnd;
    }

    public function getNumeroEnd() {
        return $this->numeroEnd;
    }

    public function setIdEnd($idEnd) {
        $this->idEnd = $idEnd;
    }

    public function setRuaEnd($ruaEnd) {
        $this->ruaEnd = $ruaEnd;
    }

    public function setBairroEnd($bairroEnd) {
        $this->bairroEnd = $bairroEnd;
    }

    public function setComplementoEnd($complementoEnd) {
        $this->complementoEnd = $complementoEnd;
    }

    public function setCepEnd($cepEnd) {
        $this->cepEnd = $cepEnd;
    }

    public function setEstadoEnd($estadoEnd) {
        $this->estadoEnd = $estadoEnd;
    }

    public function setCidadeEnd($cidadeEnd) {
        $this->cidadeEnd = $cidadeEnd;
    }

    public function setNumeroEnd($numeroEnd) {
        $this->numeroEnd = $numeroEnd;
    }

    public function getAttr(){
        return get_object_vars($this);
    }
}
?>