<?php
include_once "Usuario.php";

class Login extends Usuario{
    protected $idLogin;
    protected $emailLogin;
    protected $codLogin;
    protected $tipoLogin;
    protected $senhaLogin;
    
    public function __construct($idEnd = NULL, $ruaEnd = NULL, $bairroEnd = NULL, $complementoEnd = NULL, $cepEnd = NULL, $estadoEnd = NULL, $cidadeEnd = NULL, $numeroEnd = NULL, $idUser = NULL, $nomeUser = NULL, $dataNascUser = NULL, $cpfUser = NULL, $rgUser = NULL, $foneUser = NULL, $celularUser = NULL, $sexoUser = NULL, $imagemUser = NULL, $idLoginUser = NULL, $idInstUser = NULL, $idEndUser = NULL, $idLogin = NULL, $emailLogin = NULL, $codLogin = NULL, $tipoLogin = NULL, $senhaLogin = NULL) {
        parent::__construct($idEnd, $ruaEnd, $bairroEnd, $complementoEnd, $cepEnd, $estadoEnd, $cidadeEnd, $numeroEnd, $idUser, $nomeUser, $dataNascUser, $cpfUser, $rgUser, $foneUser, $celularUser, $sexoUser, $imagemUser, $idLoginUser, $idInstUser, $idEndUser);
        $this->idLogin = $idLogin;
        $this->emailLogin = $emailLogin;
        $this->codLogin = $codLogin;
        $this->tipoLogin = $tipoLogin;
        $this->senhaLogin = $senhaLogin;
    }

    public function getIdLogin() {
        return $this->idLogin;
    }

    public function getEmailLogin() {
        return $this->emailLogin;
    }

    public function getCodLogin() {
        return $this->codLogin;
    }

    public function getTipoLogin() {
        return $this->tipoLogin;
    }

    public function getSenhaLogin() {
        return $this->senhaLogin;
    }

    public function setIdLogin($idLogin) {
        $this->idLogin = $idLogin;
    }

    public function setEmailLogin($emailLogin) {
        $this->emailLogin = $emailLogin;
    }

    public function setCodLogin($codLogin) {
        $this->codLogin = $codLogin;
    }

    public function setTipoLogin($tipoLogin) {
        $this->tipoLogin = $tipoLogin;
    }

    public function setSenhaLogin($senhaLogin) {
        $this->senhaLogin = $senhaLogin;
    }

    public function getAttr(){
        return get_object_vars($this);
    }

}

?>