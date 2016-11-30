<?php


class GradesDisciplinas {
    private $idGrade;
    private $idDisc;
    
    public function __construct($idGrade = NULL, $idDisc = NULL) {
        $this->idGrade = $idGrade;
        $this->idDisc = $idDisc;
    }
    
    public function getIdGrade() {
        return $this->idGrade;
    }

    public function getIdDisc() {
        return $this->idDisc;
    }

    public function setIdGrade($idGrade) {
        $this->idGrade = $idGrade;
    }

    public function setIdDisc($idDisc) {
        $this->idDisc = $idDisc;
    }

    public function getAttr(){
        return get_object_vars($this);
    }

}
