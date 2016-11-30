<?php
    class insertController{
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

        public function aluno(){
            include_once ("../models/Classes/Aluno.php");
            $aluno = new Aluno();
            $aluno->setRuaEnd($this->dados['ruaEnd']);
            $aluno->setBairroEnd($this->dados['bairroEnd']);
            $aluno->setComplementoEnd($this->dados['complementoEnd']);
            $aluno->setCepEnd($this->dados['cepEnd']);
            $aluno->setEstadoEnd($this->dados['estadoEnd']);
            $aluno->setCidadeEnd($this->dados['cidadeEnd']);
            $aluno->setNumeroEnd($this->dados['numeroEnd']);
            $aluno->setNomeUser($this->dados['nomeUser']);
            $aluno->setDataNascUser($this->dados['dataNascUser']);
            $aluno->setCpfUser($this->dados['cpfUser']);
            $aluno->setRgUser($this->dados['rgUser']);
            $aluno->setFoneUser($this->dados['foneUser']);
            $aluno->setCelularUser($this->dados['celularUser']);
            $aluno->setSexoUser($this->dados['sexoUser']);
            $aluno->setIdInstUser('1');
            $aluno->setImagemUser('null');
            $aluno->setNomeMaeAluno($this->dados['nomeMaeAluno']);
            $aluno->setNomePaiAluno($this->dados['nomePaiAluno']);
            $aluno->setAnoIngressoAluno($this->dados['anoIngressoAluno']);
            $aluno->setIdTurmaAluno($this->dados['idTurmaAluno']);
            $aluno->setEmailLogin($this->dados['emailLogin']);
            $aluno->setCodLogin($this->dados['codLogin']);
            $aluno->setSenhaLogin(md5($this->dados['senhaLogin']));
            $message = $this->dao->insertData($aluno);
            return $message;
        }

        public function disciplina(){
            include_once("../models/Classes/Disciplina.php");
            $disciplina = new Disciplina("", $this->dados['nomeDisc']);
            $message = $this->dao->insertData($disciplina);
            return $message;
        }

       public function turma(){
            include_once("../models/Classes/Turma.php");
            $turma = new Turma();
            $turma->setDescricaoTurma($this->dados['descricaoTurma']);
            $turma->setSerieTurma($this->dados['serieTurma']);
            $turma->setTurnoTurma($this->dados['turnoTurma']);
            $turma->setSalaTurma($this->dados['salaTurma']);
            $turma->setIdGradeTurma($this->dados['idGradeTurma']);
            $message = $this->dao->insertData($turma);
            return $message;
        }

        public function grade(){
            include_once("../models/Classes/Grade.php");
            $grade = new Grade("", $this->dados['anoGrade'], $this->dados['descricaoGrade'], $this->dados['tipoGrade']);
            $message = $this->dao->insertData($grade);
            return $message;
        }

        public function professor(){
            include_once ("../models/Classes/Professor.php");
            $prof = new Professor();
            $prof->setRuaEnd($this->dados['ruaEnd']);
            $prof->setBairroEnd($this->dados['bairroEnd']);
            $prof->setComplementoEnd($this->dados['complementoEnd']);
            $prof->setCepEnd($this->dados['cepEnd']);
            $prof->setEstadoEnd($this->dados['estadoEnd']);
            $prof->setCidadeEnd($this->dados['cidadeEnd']);
            $prof->setNumeroEnd($this->dados['numeroEnd']);
            $prof->setNomeUser($this->dados['nomeUser']);
            $prof->setDataNascUser($this->dados['dataNascUser']);
            $prof->setCpfUser($this->dados['cpfUser']);
            $prof->setRgUser($this->dados['rgUser']);
            $prof->setFoneUser($this->dados['foneUser']);
            $prof->setCelularUser($this->dados['celularUser']);
            $prof->setSexoUser($this->dados['sexoUser']);
            $prof->setImagemUser('null');
            $prof->setDataAdmissaoProf($this->dados['dataAdmissaoProf']);
            $prof->setEmailLogin($this->dados['emailLogin']);
            $prof->setCodLogin($this->dados['codLogin']);
            $prof->setSenhaLogin(md5($this->dados['senhaLogin']));
            $prof->setIdInstUser('1');
            $message = $this->dao->insertData($prof);
            return $message;
        }

        public function alunoDisc(){
            include_once ("../models/Classes/AlunoEstudaEm.php");
            $alunoDisc = new AlunoEstudaEm();
            $alunoDisc->setIdDiscAlu($this->dados['idDiscAlu']);
            $alunoDisc->setIdAluno($this->dados['idAluno']);
            $message = $this->dao->insertData($alunoDisc);
            return $message;
        }

        public function gradeDisc(){
            include_once ("../models/Classes/GradesDisciplinas.php");
            $gradesDisc = new GradesDisciplinas($this->dados['idGrade'], $this->dados['idDisc']);
            $message = $this->dao->insertData($gradesDisc);
            return $message;
        }

        public function lecionaEm(){
            include_once ("../models/Classes/LecionaEm.php");
            $lecionaEm = new LecionaEm($this->dados['idTurma'], $this->dados['idProf'], $this->dados['idDisc']);
            $message = $this->dao->insertData($lecionaEm);
            return $message;
        }
    }
