<?php
    
    include_once "Endereco.php";
    
class Instituicao extends Endereco{
    
    private $idInst;
    private $nomeInst;
    private $cnpjInst;
    private $facebookInst;
    private $twitterInst;
    private $instagramInst;
    private $foneInst;
    private $celularInst;
    private $modeloBoletimInst;
    private $brasaoInst;
    private $idEndInst;
    
    public function __construct($idEnd = NULL, $ruaEnd = NULL, $bairroEnd = NULL, $complementoEnd = NULL, $cepEnd = NULL, $estadoEnd = NULL, $cidadeEnd = NULL, $numeroEnd = NULL, $idInst = NULL, $nomeInst = NULL, $cnpjInst = NULL, $facebookInst = NULL, $twitterInst = NULL, $instagramInst = NULL, $foneInst = NULL, $celularInst = NULL, $modeloBoletimInst = NULL, $brasaoInst = NULL, $idEndInst = NULL) {
        parent::__construct($idEnd, $ruaEnd, $bairroEnd, $complementoEnd, $cepEnd, $estadoEnd, $cidadeEnd, $numeroEnd);
        $this->idInst = $idInst;
        $this->nomeInst = $nomeInst;
        $this->cnpjInst = $cnpjInst;
        $this->facebookInst = $facebookInst;
        $this->twitterInst = $twitterInst;
        $this->instagramInst = $instagramInst;
        $this->foneInst = $foneInst;
        $this->celularInst = $celularInst;
        $this->modeloBoletimInst = $modeloBoletimInst;
        $this->brasaoInst = $brasaoInst;
        $this->idEndInst = $idEndInst;
    }

    public function getIdInst() {
        return $this->idInst;
    }

    public function getNomeInst() {
        return $this->nomeInst;
    }

    public function getCnpjInst() {
        return $this->cnpjInst;
    }

    public function getFacebookInst() {
        return $this->facebookInst;
    }

    public function getTwitterInst() {
        return $this->twitterInst;
    }

    public function getInstagramInst() {
        return $this->instagramInst;
    }

    public function getFoneInst() {
        return $this->foneInst;
    }

    public function getCelularInst() {
        return $this->celularInst;
    }

    public function getModeloBoletimInst() {
        return $this->modeloBoletimInst;
    }

    public function getBrasaoInst() {
        return $this->brasaoInst;
    }

    public function getIdEndInst() {
        return $this->idEndInst;
    }

    public function setIdInst($idInst) {
        $this->idInst = $idInst;
    }

    public function setNomeInst($nomeInst) {
        $this->nomeInst = $nomeInst;
    }

    public function setCnpjInst($cnpjInst) {
        $this->cnpjInst = $cnpjInst;
    }

    public function setFacebookInst($facebookInst) {
        $this->facebookInst = $facebookInst;
    }

    public function setTwitterInst($twitterInst) {
        $this->twitterInst = $twitterInst;
    }

    public function setInstagramInst($instagramInst) {
        $this->instagramInst = $instagramInst;
    }

    public function setFoneInst($foneInst) {
        $this->foneInst = $foneInst;
    }

    public function setCelularInst($celularInst) {
        $this->celularInst = $celularInst;
    }

    public function setModeloBoletimInst($modeloBoletimInst) {
        $this->modeloBoletimInst = $modeloBoletimInst;
    }

    public function setBrasaoInst($brasaoInst) {
        $this->brasaoInst = $brasaoInst;
    }

    public function setIdEndInst($idEndInst) {
        $this->idEndInst = $idEndInst;
    }

    public function getAttr(){
        return get_object_vars($this);
    }

}

?>