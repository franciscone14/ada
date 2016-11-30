<?php

class Disciplina {
    private $idDisc;
    private $nomeDisc;

    public function __construct($idDisc = NULL, $nomeDisc = NULL){
        $this->idDisc = $idDisc;
        $this->nomeDisc = $nomeDisc;
    }
    
    public function getNomeDisc() {
        return $this->nomeDisc;
    }
    
    public function setNomeDisc($nomeDisc) {
        $this->nomeDisc = $nomeDisc;
    }
    
    public function setIdDisc($idDisc) {
        $this->idDisc = $idDisc;
    }

    public function getIdDisc() {
        return $this->idDisc;
    }

    public function __toString() {
        return $this->nomeDisc;
    }

    public function getAttr(){
        return get_object_vars($this);
    }
}

?>