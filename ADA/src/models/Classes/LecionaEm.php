<?php

class LecionaEm {
    
    private $idTurma; 
    private $idProf;
    private $idDisc;

    public function __construct($idTurma = NULL, $idProf = NULL, $idDisc = NULL){
        $this->idTurma = $idTurma;
        $this->idProf = $idProf;
        $this->idDisc = $idDisc;
    }

    public function getIdTurma() {
        return $this->idTurma;
    }

    public function getIdProf() {
        return $this->idProf;
    }

    public function getIdDisc() {
        return $this->idDisc;
    }

    public function setIdTurma($idTurma) {
        $this->idTurma = $idTurma;
    }

    public function setIdProf($idProf) {
        $this->idProf = $idProf;
    }

    public function setIdDisc($idDisc) {
        $this->idDisc = $idDisc;
    }

    public function getAttr(){
        return get_object_vars($this);
    }
}

?>