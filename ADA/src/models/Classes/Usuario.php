<?php
include_once "Endereco.php";

class Usuario extends Endereco{

    protected $idUser;
    protected $nomeUser;
    protected $dataNascUser;
    protected $cpfUser;
    protected $rgUser;
    protected $foneUser;
    protected $celularUser;
    protected $sexoUser;
    protected $imagemUser;
    protected $idLoginUser;
    protected $idInstUser;
    protected $idEndUser;
    
    public function __construct($idEnd = NULL, $ruaEnd = NULL, $bairroEnd = NULL, $complementoEnd = NULL, $cepEnd = NULL, $estadoEnd = NULL, $cidadeEnd = NULL, $numeroEnd = NULL, $idUser = NULL, $nomeUser = NULL, $dataNascUser = NULL, $cpfUser = NULL, $rgUser = NULL, $foneUser = NULL, $celularUser = NULL, $sexoUser = NULL, $imagemUser = NULL, $idLoginUser = NULL, $idInstUser = NULL, $idEndUser = NULL) {
        parent::__construct($idEnd, $ruaEnd, $bairroEnd, $complementoEnd, $cepEnd, $estadoEnd, $cidadeEnd, $numeroEnd);
        $this->idUser = $idUser;
        $this->nomeUser = $nomeUser;
        $this->dataNascUser = $dataNascUser;
        $this->cpfUser = $cpfUser;
        $this->rgUser = $rgUser;
        $this->foneUser = $foneUser;
        $this->celularUser = $celularUser;
        $this->sexoUser = $sexoUser;
        $this->imagemUser = $imagemUser;
        $this->idLoginUser = $idLoginUser;
        $this->idInstUser = $idInstUser;
        $this->idEndUser = $idEndUser;
    }
    
    public function getIdUser() {
        return $this->idUser;
    }

    public function getNomeUser() {
        return $this->nomeUser;
    }

    public function getDataNascUser() {
        return $this->dataNascUser;
    }

    public function getCpfUser() {
        return $this->cpfUser;
    }

    public function getRgUser() {
        return $this->rgUser;
    }

    public function getFoneUser() {
        return $this->foneUser;
    }

    public function getCelularUser() {
        return $this->celularUser;
    }

    public function getSexoUser() {
        return $this->sexoUser;
    }

    public function getImagemUser() {
        return $this->imagemUser;
    }

    public function getIdLoginUser() {
        return $this->idLoginUser;
    }

    public function getIdInstUser() {
        return $this->idInstUser;
    }

    public function getIdEndUser() {
        return $this->idEndUser;
    }

    public function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    public function setNomeUser($nomeUser) {
        $this->nomeUser = $nomeUser;
    }

    public function setDataNascUser($dataNascUser) {
        $this->dataNascUser = $dataNascUser;
    }

    public function setCpfUser($cpfUser) {
        $this->cpfUser = $cpfUser;
    }

    public function setRgUser($rgUser) {
        $this->rgUser = $rgUser;
    }

    public function setFoneUser($foneUser) {
        $this->foneUser = $foneUser;
    }

    public function setCelularUser($celularUser) {
        $this->celularUser = $celularUser;
    }

    public function setSexoUser($sexoUser) {
        $this->sexoUser = $sexoUser;
    }

    public function setImagemUser($imagemUser) {
        $this->imagemUser = $imagemUser;
    }

    public function setIdLoginUser($idLoginUser) {
        $this->idLoginUser = $idLoginUser;
    }

    public function setIdInstUser($idInstUser) {
        $this->idInstUser = $idInstUser;
    }

    public function setIdEndUser($idEndUser) {
        $this->idEndUser = $idEndUser;
    }

    public function getAttr(){
        return get_object_vars($this);
    }
}

?>