<?php
    include_once "connectionFactory.php";
    
    class genericDAO extends connectionFactory{

        public function __construct(){}

        public function executeQuery($con, $sql){
            if(!mysqli_query($con, $sql)){
                return "MySQL error ".mysqli_error($con);
            }
        }

        public function insertData($object) {
            $con = $this->getConnection();
            $hasError = array();

            //inserção disciplina
            if ($object instanceof Disciplina) {
                $sql = "INSERT INTO disciplinas(nomeDisc) 
                    VALUES(
                        '" . $object->getNomeDisc() . "'
                    )";
                $hasError[] = $this->executeQuery($con, $sql);
            }
            //inserção grade
            else if ($object instanceof Grade) {
                $sql = "INSERT INTO grades(anoGrade, descricaoGrade, tipoGrade) VALUES(
                    " . $object->getAnoGrade() . ",
                    '" . $object->getDescricaoGrade() . "',
                    " . $object->getTipoGrade() . "
                )";
                $hasError[] = $this->executeQuery($con, $sql);
            }
            //inserção turma
            else if ($object instanceof Turma) {
                $sql = "INSERT INTO turmas(descricaoTurma, serieTurma, turnoTurma, salaTurma, idGradeTurma) VALUES(
                    '" . $object->getDescricaoTurma() . "',
                    '" . $object->getSerieTurma() . "',
                    '" . $object->getTurnoTurma() . "',
                    '" . $object->getSalaTurma() . "',
                    '" . $object->getIdGradeTurma() . "'
                )";
                $hasError[] = $this->executeQuery($con, $sql);
            }
            //inserção alunos
            if ($object instanceof Aluno) {
                $sql = "INSERT INTO login(emailLogin, codLogin, tipoLogin, senhaLogin) VALUES(
                            '" . $object->getEmailLogin() . "',
                            '" . $object->getCodLogin() . "',
                            'e',
                            '" . $object->getSenhaLogin() . "'
                        )";
                $hasError[] = $this->executeQuery($con, $sql);

                $sql = "INSERT INTO endereco (ruaEnd, bairroEnd, complementoEnd, cepEnd, estadoEnd, cidadeEnd, numeroEnd) VALUES(
                            '" . $object->getRuaEnd() . "',
                            '" . $object->getBairroEnd() . "',
                            '" . $object->getComplementoEnd() . "',
                            '" . $object->getCepEnd() . "',
                            '" . $object->getEstadoEnd() . "',
                            '" . $object->getCidadeEnd() . "',
                            '" . $object->getNumeroEnd() . "'
                        )";
                $hasError[] = $this->executeQuery($con, $sql);

                $query = mysqli_query($con, "SELECT idEnd FROM endereco WHERE ruaEnd = '" . $object->getRuaEnd() . "' AND numeroEnd = '" . $object->getNumeroEnd() . "'");
                $idEndUser = mysqli_fetch_array($query, MYSQLI_ASSOC);

                $query = mysqli_query($con, 'SELECT idLogin FROM login WHERE emailLogin = "' . $object->getEmailLogin() . '"');
                $idLoginUser = mysqli_fetch_array($query, MYSQLI_ASSOC);
                $object->setIdLoginUser($idLoginUser['idLogin']);

                $sql = "INSERT INTO usuario (nomeUser, dataNascUser, cpfUser, rgUser, foneUser, celularUser, sexoUser, imagemUser, idLoginUser, idInstUser, idEndUser) VALUES(
                    '" . $object->getNomeUser() . "',
                    CAST('" . $object->getDataNascUser() . "' AS DATE),
                    '". $object->getCpfUser() . "',
                    '". $object->getRgUser() . "',
                    '". $object->getFoneUser() . "',
                    '". $object->getCelularUser() . "',
                    '". $object->getSexoUser() . "',
                    '". $object->getImagemUser() . "',
                    " . $object->getIdLoginUser() . ",
                    " . $object->getIdInstUser() . ",
                    " . $idEndUser['idEnd'] . "
                )";
                $hasError[] = $this->executeQuery($con, $sql);

                $query = mysqli_query($con, "SELECT idUser from usuario WHERE nomeUser = '" . $object->getNomeUser() . "'");
                $idUserAluno = mysqli_fetch_array($query, MYSQLI_ASSOC);

                $sql = "INSERT INTO aluno(idUserAluno, nomeMaeAluno, nomePaiAluno, anoIngressoAluno, idTurmaAluno) VALUES(
                            '" . $idUserAluno['idUser'] . "',
                            '" . $object->getNomeMaeAluno() . "',
                            '" . $object->getNomePaiAluno() . "',
                            '" . $object->getAnoIngressoAluno() . "',
                            '" . $object->getIdTurmaAluno() . "'
                        )";
                $hasError[] = $this->executeQuery($con, $sql);
            }
            //inserção professores
            else if ($object instanceof Professor) {
                $sql = "INSERT INTO login(emailLogin, codLogin, tipoLogin, senhaLogin) VALUES(
                            '" . $object->getEmailLogin() . "',
                            '" . $object->getCodLogin() . "',
                            'p',
                            '" . $object->getSenhaLogin() . "'
                        )";
                
                $hasError[] = $this->executeQuery($con, $sql);
                $sql = "INSERT INTO endereco (ruaEnd, bairroEnd, complementoEnd, cepEnd, estadoEnd, cidadeEnd, numeroEnd) VALUES(
                            '" . $object->getRuaEnd() . "',
                            '" . $object->getBairroEnd() . "',
                            '" . $object->getComplementoEnd() . "',
                            '" . $object->getCepEnd() . "',
                            '" . $object->getEstadoEnd() . "',
                            '" . $object->getCidadeEnd() . "',
                            '" . $object->getNumeroEnd() . "'
                        )";

                $hasError[] = $this->executeQuery($con, $sql);

                $query = mysqli_query($con, "SELECT idEnd FROM endereco WHERE ruaEnd = '" . $object->getRuaEnd() . "' AND numeroEnd = '" . $object->getNumeroEnd() . "'");
                $idEndUser = mysqli_fetch_array($query, MYSQLI_ASSOC);


                $query = mysqli_query($con, 'SELECT idLogin FROM login WHERE emailLogin = "' . $object->getEmailLogin() . '"');
                $idLoginUser = mysqli_fetch_array($query, MYSQLI_ASSOC);
                $object->setIdLoginUser($idLoginUser['idLogin']);

                $sql = "INSERT INTO usuario(nomeUser, dataNascUser, cpfUser, rgUser, foneUser, celularUser, sexoUser, imagemUser, idLoginUser, idInstUser, idEndUser) VALUES(
                    '" . $object->getNomeUser() . "',
                    CAST('" . $object->getDataNascUser() . "' AS DATE),
                    '" . $object->getCpfUser() . "',
                    '" . $object->getRgUser() . "',
                    '" . $object->getFoneUser() . "',
                    '" . $object->getCelularUser() . "',
                    '" . $object->getSexoUser() . "',
                    '" . $object->getImagemUser() . "',
                    '" . $object->getIdLoginUser() . "',
                    '" . $object->getIdInstUser() . "',
                    '" . $idEndUser['idEnd'] . "'
                )";
                $hasError[] = $this->executeQuery($con, $sql);

                $query = mysqli_query($con, "SELECT idUser from usuario WHERE nomeUser = '" . $object->getNomeUser() . "'");
                $idUserProf = mysqli_fetch_array($query, MYSQLI_ASSOC);

                $sql = "INSERT INTO professor(idUserProf, dataAdmissaoProf) 
                    VALUES(
                        " . $idUserProf['idUser'] . ",
                        '" . $object->getDataAdmissaoProf() . "'
                    )";
                $hasError[] = $this->executeQuery($con, $sql);
            }
            //inserção aluno estuda em
            else if ($object instanceof AlunoEstudaEm) {
                $sql = "INSERT INTO aluno_estuda_em VALUES(
                    '" . $object->getIdAluno() . "',
                    '" . $object->getIdDiscAlu() . "'
                )";
                $hasError[] = $this->executeQuery($con, $sql);
            }
            //inserção grades disciplinas
            else if ($object instanceof GradesDisciplinas) {
                $sql = "INSERT INTO grades_disciplinas(idGrade, idDisc) VALUES(
                    " . $object->getIdGrade() . ",
                    '" . $object->getIdDisc() . "'
                )";
                $hasError[] = $this->executeQuery($con, $sql);
            }
            //inserção lecionaEm
            else if ($object instanceof LecionaEm) {
                $sql = "INSERT INTO leciona_em(idTurma, idProf, idDisc) VALUES(
                    '" . $object->getIdTurma() . "',
                    '" . $object->getIdProf() . "',
                    '" . $object->getIdDisc() . "'
                )";
                $hasError[] = $this->executeQuery($con, $sql);
            }
            //Fecha conexão com a base de dados
            $this->closeConnection($con);
            //Verifica se a funcao retornou erros de SQL
            if(!empty($hasError[0])){
                return $hasError[0];
            }
            else{
                return "Salvo com sucesso!";
            }
        }

        public function findData($atributos = NULL, $tables = NULL, $condicao = NULL) {
            $con = $this->getConnection();

            if ($condicao == NULL) {
                $sql = "SELECT " . $atributos . " FROM " . $tables;
            } 
            else{
                $sql = "SELECT " . $atributos . " FROM " . $tables . " " . $condicao;
            }
            $query = mysqli_query($con, $sql);

            if($tables == "grades"){
                $path = realpath(dirname(__FILE__)."/../Classes/Grade.php");
                include_once ($path);
                $objects = [];
                if(mysqli_num_rows($query) > 0){
                    while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                        $grade = new Grade();
                        $grade->setIdGrade($row['idGrade']);
                        $grade->setAnoGrade($row['anoGrade']);
                        $grade->setDescricaoGrade($row['descricaoGrade']);
                        $grade->setTipoGrade($row['tipoGrade']);
                        $objects[] = $grade;
                    }
                }
            }

            else if($tables == "disciplinas"){
                $path = realpath(dirname(__FILE__)."/../Classes/Disciplina.php");
                include_once ($path);
                $objects = [];
                while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                    $disciplina = new Disciplina();
                    $disciplina->setIdDisc($row['idDisc']);
                    $disciplina->setNomeDisc($row['nomeDisc']);
                    $objects[] = $disciplina;
                }
            }

            else if($tables == "turmas"){
                $path = realpath(dirname(__FILE__)."/../Classes/Turma.php");
                include_once ($path);
                $objects = [];
                while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                    $turma = new Turma();
                    $turma->setIdTurma($row['idTurma']);
                    $turma->setDescricaoTurma($row['descricaoTurma']);
                    $turma->setSerieTurma($row['serieTurma']);
                    $turma->setTurnoTurma($row['turnoTurma']);
                    $turma->setSalaTurma($row['salaTurma']);
                    $turma->setIdGradeTurma($row['idGradeTurma']);
                    $objects[] = $turma;
                }
            }

            else if($tables == "avaliacoes"){
                $path = realpath(dirname(__FILE__)."/../Classes/Turma.php");
                include_once ($path);
                $objects = [];
                while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                    $ava = new Avaliacoes();
                    $ava->setIdAva($row['idAva']);
                    $ava->setDescricaoAva($row['descricaoAva']);
                    $ava->setTipoAva($row['tipoAva']);
                    $ava->setPesoAva($row['pesoAva']);
                    $ava->setDataAva($row['dataAva']);
                    $ava->setObsAva($row['obsAva']);
                    $ava->setIdDiscAva($row['idDiscAva']);
                    $objects[] = $ava;
                }
            }

            else if($tables == "aluno"){
                $path = realpath(dirname(__FILE__)."/../Classes/Aluno.php");
                include_once ($path);
                $objects = [];
                while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                    $aluno = new Aluno();
                    $aluno->setIdEnd($row['idEnd']);
                    $aluno->setRuaEnd($row['ruaEnd']);
                    $aluno->setBairroEnd($row['bairroEnd']);
                    $aluno->setComplementoEnd($row['complementoEnd']);
                    $aluno->setCepEnd($row['cepEnd']);
                    $aluno->setEstadoEnd($row['estadoEnd']);
                    $aluno->setCidadeEnd($row['cidadeEnd']);
                    $aluno->setNumeroEnd($row['numeroEnd']);
                    $aluno->setIdUser($row['idUser']);
                    $aluno->setNomeUser($row['nomeUser']);
                    $aluno->setDataNascUser($row['dataNascUser']);
                    $aluno->setCpfUser($row['cpfUser']);
                    $aluno->setRgUser($row['rgUser']);
                    $aluno->setFoneUser($row['foneUser']);
                    $aluno->setCelularUser($row['celularUser']);
                    $aluno->setSexoUser($row['sexoUser']);
                    $aluno->setImagemUser($row['imagemUser']); 
                    $aluno->setIdLoginUser($row['idLoginUser']); 
                    $aluno->setIdInstUser($row['idInstUser']); 
                    $aluno->setIdEndUser($row['idEndUser']); 
                    $aluno->setIdAluno($row['idAluno']); 
                    $aluno->setIdUserAluno($row['idUserAluno']);
                    $aluno->setNomeMaeAluno($row['nomeMaeAluno']);
                    $aluno->setNomePaiAluno($row['nomePaiAluno']);
                    $aluno->setAnoIngressoAluno($row['anoIngressoAluno']);
                    $aluno->setIdTurmaAluno($row['idTurmaAluno']);
                    $aluno->setIdLogin($row['idLogin']);
                    $aluno->setEmailLogin($row['emailLogin']);
                    $aluno->setCodLogin($row['codLogin']);
                    $aluno->setTipoLogin($row['tipoLogin']);
                    $aluno->setSenhaLogin($row['senhaLogin']);
                    $objects[] = $aluno;
                }
            }

            else if($tables == "professor"){
                $path = realpath(dirname(__FILE__)."/../Classes/Professor.php");
                include_once ($path);
                $objects = [];
                while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                    $prof = new Professor();
                    $prof->setIdEnd($row['idEnd']);
                    $prof->setRuaEnd($row['ruaEnd']);
                    $prof->setBairroEnd($row['bairroEnd']);
                    $prof->setComplementoEnd($row['complementoEnd']);
                    $prof->setCepEnd($row['cepEnd']);
                    $prof->setEstadoEnd($row['estadoEnd']);
                    $prof->setCidadeEnd($row['cidadeEnd']);
                    $prof->setNumeroEnd($row['numeroEnd']);
                    $prof->setIdUser($row['idUser']);
                    $prof->setNomeUser($row['nomeUser']);
                    $prof->setDataNascUser($row['dataNascUser']);
                    $prof->setCpfUser($row['cpfUser']);
                    $prof->setRgUser($row['rgUser']);
                    $prof->setFoneUser($row['foneUser']);
                    $prof->setCelularUser($row['celularUser']);
                    $prof->setSexoUser($row['sexoUser']);
                    $prof->setImagemUser($row['imagemUser']); 
                    $prof->setIdLoginUser($row['idLoginUser']); 
                    $prof->setIdInstUser($row['idInstUser']); 
                    $prof->setIdEndUser($row['idEndUser']);
                    $prof->setIdProf($row['idProf']); 
                    $prof->setIdUserProf($row['idUserProf']); 
                    $prof->setDataAdmissaoProf($row['dataAdmissaoProf']); 
                    $prof->setIdLogin($row['idLogin']);
                    $prof->setEmailLogin($row['emailLogin']);
                    $prof->setTipoLogin($row['tipoLogin']);
                    $prof->setCodLogin($row['codLogin']);
                    $prof->setSenhaLogin($row['senhaLogin']);
                    $objects[] = $prof;
                }
            }

            $this->closeConnection($con);
            return $objects;
        }

        public function deleteData($object){
            $con = $this->getConnection();
            $hasError = array();
            //deletar disciplina
            if ($object instanceof Disciplina) {
                $sql = "DELETE FROM disciplinas WHERE idDisc = '".$object->getIdDisc()."'";
                $hasError[] = $this->executeQuery($con, $sql);
            }
            //Verifica se a funcao retornou erros de SQL
            if(!empty($hasError[0])){
                return $hasError[0];
            }
            else{
                return "Salvo com sucesso!";
            }
        }
    }

?>