<?php
include_once "Login.php";

class Professor extends Login{
    private $idProf;
    private $idUserProf;
    private $dataAdmissaoProf;
    
    public function __construct($idEnd = NULL, $ruaEnd = NULL, $bairroEnd = NULL, $complementoEnd = NULL, $cepEnd = NULL, $estadoEnd = NULL, $cidadeEnd = NULL, $numeroEnd = NULL, $idUser = NULL, $nomeUser = NULL, $dataNascUser = NULL, $cpfUser = NULL, $rgUser = NULL, $foneUser = NULL, $celularUser = NULL, $sexoUser = NULL, $imagemUser = NULL, $idLoginUser = NULL, $idInstUser = NULL, $idEndUser = NULL, $idLogin = NULL, $emailLogin = NULL, $codLogin = NULL, $tipoLogin = NULL, $senhaLogin = NULL, $idProf = NULL, $idUserProf = NULL, $dataAdmissaoProf = NULL) {
        parent::__construct($idEnd, $ruaEnd, $bairroEnd, $complementoEnd, $cepEnd, $estadoEnd, $cidadeEnd, $numeroEnd, $idUser, $nomeUser, $dataNascUser, $cpfUser, $rgUser, $foneUser, $celularUser, $sexoUser, $imagemUser, $idLoginUser, $idInstUser, $idEndUser, $idLogin, $emailLogin, $codLogin, $tipoLogin, $senhaLogin);
        $this->idProf = $idProf;
        $this->idUserProf = $idUserProf;
        $this->dataAdmissaoProf = $dataAdmissaoProf;
    }

    public function getIdProf() {
        return $this->idProf;
    }

    public function getIdUserProf() {
        return $this->idUserProf;
    }

    public function getDataAdmissaoProf() {
        return $this->dataAdmissaoProf;
    }

    public function setIdUserProf($idUserProf) {
        $this->idUserProf = $idUserProf;
    }
    public function setIdProf($idProf) {
        $this->idProf = $idProf;
    }

    public function setDataAdmissaoProf($dataAdmissaoProf) {
        $this->dataAdmissaoProf = $dataAdmissaoProf;
    }

    public function getAttr(){
        return get_object_vars($this);
    }

}

?>