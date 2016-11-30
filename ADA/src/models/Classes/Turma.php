<?php

class Turma {
    
    private $idTurma;
    private $descricaoTurma;
    private $serieTurma;
    private $turnoTurma;
    private $salaTurma;
    private $idGradeTurma;
    
    public function __construct($idTurma = null, $descricaoTurma = null, $serieTurma = null, $turnoTurma = null, $salaTurma = null, $idGradeTurma = null) {
        $this->idTurma = $idTurma;
        $this->descricaoTurma = $descricaoTurma;
        $this->serieTurma = $serieTurma;
        $this->turnoTurma = $turnoTurma;
        $this->salaTurma = $salaTurma;
        $this->idGradeTurma = $idGradeTurma;
    }

    public function getIdTurma() {
        return $this->idTurma;
    }

    public function getDescricaoTurma() {
        return $this->descricaoTurma;
    }

    public function getSerieTurma() {
        return $this->serieTurma;
    }

    public function getTurnoTurma() {
        return $this->turnoTurma;
    }

    public function getSalaTurma() {
        return $this->salaTurma;
    }

    public function setIdTurma($idTurma) {
        $this->idTurma = $idTurma;
    }

    public function setDescricaoTurma($descricaoTurma) {
        $this->descricaoTurma = $descricaoTurma;
    }

    public function setSerieTurma($serieTurma) {
        $this->serieTurma = $serieTurma;
    }

    public function setTurnoTurma($turnoTurma) {
        $this->turnoTurma = $turnoTurma;
    }

    public function setSalaTurma($salaTurma) {
        $this->salaTurma = $salaTurma;
    }
    
    public function getIdGradeTurma() {
        return $this->idGradeTurma;
    }

    public function setIdGradeTurma($idGradeTurma) {
        $this->idGradeTurma = $idGradeTurma;
    }

    public function getAttr(){
        return get_object_vars($this);
    }
}


?>