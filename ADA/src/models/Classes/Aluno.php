<?php
include_once "Login.php";

class Aluno extends Login{
    private $idAluno;
    private $idUserAluno;
    private $nomeMaeAluno;
    private $nomePaiAluno;
    private $anoIngressoAluno;
    private $idTurmaAluno;

    public function __construct($idEnd = NULL, $ruaEnd = NULL, $bairroEnd = NULL, $complementoEnd = NULL, $cepEnd = NULL, $estadoEnd = NULL, $cidadeEnd = NULL, $numeroEnd = NULL, $idUser = NULL, $nomeUser = NULL, $dataNascUser = NULL, $cpfUser = NULL, $rgUser = NULL, $foneUser = NULL, $celularUser = NULL, $sexoUser = NULL, $imagemUser = NULL, $idLoginUser = NULL, $idInstUser = NULL, $idEndUser = NULL, $idLogin = NULL, $emailLogin = NULL, $codLogin = NULL, $tipoLogin = NULL, $senhaLogin = NULL,$idAluno = NULL, $idUserAluno = NULL, $nomeMaeAluno = NULL, $nomePaiAluno = NULL, $anoIngressoAluno = NULL, $idTurmaAluno = NULL) {
        parent::__construct($idEnd, $ruaEnd, $bairroEnd, $complementoEnd, $cepEnd, $estadoEnd, $cidadeEnd, $numeroEnd, $idUser, $nomeUser, $dataNascUser, $cpfUser, $rgUser, $foneUser, $celularUser, $sexoUser, $imagemUser, $idLoginUser, $idInstUser, $idEndUser, $idLogin, $emailLogin, $codLogin, $tipoLogin, $senhaLogin);
        $this->idAluno = $idAluno;
        $this->idUserAluno = $idUserAluno;
        $this->nomeMaeAluno = $nomeMaeAluno;
        $this->nomePaiAluno = $nomePaiAluno;
        $this->anoIngressoAluno = $anoIngressoAluno;
        $this->idTurmaAluno = $idTurmaAluno;
    }

    public function getIdUserAluno() {
        return $this->idUserAluno;
    }

    public function getIdAluno() {
        return $this->idAluno;
    }

    public function getNomeMaeAluno() {
        return $this->nomeMaeAluno;
    }

    public function getNomePaiAluno() {
        return $this->nomePaiAluno;
    }

    public function getAnoIngressoAluno() {
        return $this->anoIngressoAluno;
    }

    public function getIdTurmaAluno() {
        return $this->idTurmaAluno;
    }

    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    public function setIdUserAluno($idUserAluno) {
        $this->idUserAluno = $idUserAluno;
    }

    public function setNomeMaeAluno($nomeMaeAluno) {
        $this->nomeMaeAluno = $nomeMaeAluno;
    }

    public function setNomePaiAluno($nomePaiAluno) {
        $this->nomePaiAluno = $nomePaiAluno;
    }

    public function setAnoIngressoAluno($anoIngressoAluno) {
        $this->anoIngressoAluno = $anoIngressoAluno;
    }

    public function setIdTurmaAluno($idTurmaAluno) {
        $this->idTurmaAluno = $idTurmaAluno;
    }

    public function getAttr(){
        return get_object_vars($this);
    }
}

?>