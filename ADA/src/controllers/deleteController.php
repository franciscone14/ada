<?php
    class deleteController{
        private $dados;
        private $dao;
        private $url = "../models/dao/genericDAO.php";

        public function __construct($dados  = null){
            $this->url = "../models/dao/genericDAO.php";
            include_once($this->url);

            $this->dados = $dados;
            $this->dao = new genericDAO();
        }

        public function setDados($dados){
            $this->dados = $dados;
        }

        public function getDados($dados){
            return $this->dados;
        }

        public function disciplinas(){
            include_once("../models/Classes/Disciplina.php");
            $disciplina = new Disciplina();
            $disciplina->setIdDisc($dados['id']);
            $message = $this->dao->deleteData($disciplina);
            return $message;
        }
    }