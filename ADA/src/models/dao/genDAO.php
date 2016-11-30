<?php
include_once "../models/dao/connectionFactory.php";
$conFac = new connectionFactory();
$con = $conFac->getConnection();
mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,'SET character_set_connection=utf8');
mysqli_query($con,'SET character_set_client=utf8');
mysqli_query($con,'SET character_set_results=utf8');
$conFac->closeConnection($con);

function insert($object, $others = null) {
    include_once "connectionFactory.php";
    $conFac = new connectionFactory();
    $con = $conFac->getConnection();
    
    if ($object instanceof Aluno) {

        $sql = "INSERT INTO login(emailLogin, codLogin, tipoLogin, senhaLogin) VALUES(
                    '" . $object->getEmailLogin() . "',
                    '" . $object->getCodLogin() . "',
                    'e',
                    '" . $object->getSenhaLogin() . "'
                )";
        mysqli_query($con, $sql);

        $sql = "INSERT INTO endereco (ruaEnd, bairroEnd, complementoEnd, cepEnd, estadoEnd, cidadeEnd, numeroEnd) VALUES(
                    '" . $object->getRuaEnd() . "',
                    '" . $object->getBairroEnd() . "',
                    '" . $object->getComplementoEnd() . "',
                    '" . $object->getCepEnd() . "',
                    '" . $object->getEstadoEnd() . "',
                    '" . $object->getCidadeEnd() . "',
                    '" . $object->getNumeroEnd() . "'
                )";

        mysqli_query($con, $sql);

        $query = mysqli_query($con, "SELECT idEnd FROM endereco WHERE ruaEnd = '" . $object->getRuaEnd() . "' AND numeroEnd = '" . $object->getNumeroEnd() . "'");
        $idEndUser = mysqli_fetch_array($query, MYSQLI_ASSOC);

        $query = mysqli_query($con, 'SELECT idLogin FROM login WHERE emailLogin = "' . $object->getEmailLogin() . '"');
        $idLoginUser = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $object->setIdLoginUser($idLoginUser['idLogin']);

        $sql = "INSERT INTO usuario (nomeUser, dataNascUser, cpfUser, rgUser, foneUser, celularUser, sexoUser, imagemUser, idLoginUser, idInstUser, idEndUser) VALUES(
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

        mysqli_query($con, $sql);
        
        $query = mysqli_query($con, "SELECT idUser from usuario WHERE nomeUser = '" . $object->getNomeUser() . "'");
        $idUserAluno = mysqli_fetch_array($query, MYSQLI_ASSOC);

        $sql = "INSERT INTO aluno(idUserAluno, nomeMaeAluno, nomePaiAluno, anoIngressoAluno, idTurmaAluno) VALUES(
                    '" . $idUserAluno['idUser'] . "',
                    '" . $object->getNomeMaeAluno() . "',
                    '" . $object->getNomePaiAluno() . "',
                    '" . $object->getAnoIngressoAluno() . "',
                    '" . $object->getIdTurmaAluno() . "'
                )";

        mysqli_query($con, $sql);
    } 
    
    else if ($object instanceof Professor) {
        $sql = "INSERT INTO login(emailLogin, codLogin, tipoLogin, senhaLogin) VALUES(
                    '" . $object->getEmailLogin() . "',
                    '" . $object->getCodLogin() . "',
                    'p',
                    '" . $object->getSenhaLogin() . "'
                )";
        
        mysqli_query($con, $sql);
        echo $sql;
        $sql = "INSERT INTO endereco (ruaEnd, bairroEnd, complementoEnd, cepEnd, estadoEnd, cidadeEnd, numeroEnd) VALUES(
                    '" . $object->getRuaEnd() . "',
                    '" . $object->getBairroEnd() . "',
                    '" . $object->getComplementoEnd() . "',
                    '" . $object->getCepEnd() . "',
                    '" . $object->getEstadoEnd() . "',
                    '" . $object->getCidadeEnd() . "',
                    '" . $object->getNumeroEnd() . "'
                )";

        mysqli_query($con, $sql);

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
        mysqli_query($con, $sql);

        $query = mysqli_query($con, "SELECT idUser from usuario WHERE nomeUser = '" . $object->getNomeUser() . "'");
        $idUserProf = mysqli_fetch_array($query, MYSQLI_ASSOC);

        $sql = "INSERT INTO professor(idUserProf, dataAdmissaoProf) 
            VALUES(
                " . $idUserProf['idUser'] . ",
                '" . $object->getDataAdmissaoProf() . "'
            )";
        mysqli_query($con, $sql);
    }

    else if ($object instanceof Instituicao) {

        $sql = "INSERT INTO endereco(ruaEnd, bairroEnd, complementoEnd, cepEnd, estadoEnd, cidadeEnd, numeroEnd) 
            VALUES(
                '" . $object->getRuaEnd() . "',
                '" . $object->getBairroEnd() . "',
                '" . $object->getComplementoEnd() . "',
                " . $object->getCepEnd() . ",
                '" . $object->getEstadoEnd() . "',
                '" . $object->getCidadeEnd() . "',
                '" . $object->getNumeroEnd() . "'
            )";
        mysqli_query($con, $sql);

        //Setando o ID do endereco para a Instituicao
        $idEndInst = mysqli_query($con, "SELECT idEnd FROM endereco WHERE ruaEnd = '" . $object->getRuaEnd() . "' AND numeroEnd = '" . $object->getNumeroEnd() . "';");
        $idEndInst = $idEndInst->fetch_array(MYSQLI_ASSOC);
        $object->setIdEndInst($idEndInst['idEnd']);


        $sql = "INSERT INTO instituicao(nomeInst, cnpjInst, facebookInst, twitterInst, instagramInst, foneInst, celularInst, brasaoInst, idEndInst) 
            VALUES(
                '" . $object->getNomeInst() . "',
                '" . $object->getCnpjInst() . "',
                '" . $object->getFacebookInst() . "',
                '" . $object->getTwitterInst() . "',
                '" . $object->getInstagramInst() . "',
                '" . $object->getFoneInst() . "',
                '" . $object->getCelularInst() . "',
                '" . $object->getBrasaoInst() . "',
                '" . $object->getIdEndInst() . "'
            )";
        mysqli_query($con, $sql);
    } 
    
    else if ($object instanceof Disciplina) {
        $sql = "INSERT INTO disciplinas(nomeDisc) 
            VALUES(
                '" . $object->getNomeDisc() . "'
            )";
        mysqli_query($con, $sql);
    } 
    
    else if ($object instanceof Grade) {
        $sql = "INSERT INTO grades(anoGrade, descricaoGrade, tipoGrade) 
            VALUES(
                " . $object->getAnoGrade() . ",
                '" . $object->getDescricaoGrade() . "',
                " . $object->getTipoGrade() . "
            )";
        mysqli_query($con, $sql);
    }

    else if ($object instanceof AlunoEstudaEm) {
        $sql = "INSERT INTO aluno_estuda_em(idAluno, idDiscAlu) 
            VALUES(
                '" . $object->getIdAluno() . "',
                " . $object->getIdDiscAlu() . "
            )";
        mysqli_query($con, $sql);
    }

    $conFac->closeConnection($con);
}

function find($atributos = NULL, $tables = NULL, $condicao = NULL, $others = NULL) {
    include_once "connectionFactory.php";
    $conFac = new connectionFactory();
    $con = $conFac->getConnection();

    if ($condicao == NULL) {
        $sql = "SELECT " . $atributos . " FROM " . $tables;
    } 
    else{
        $sql = "SELECT " . $atributos . " FROM " . $tables . " " . $condicao;
    }
    $query = mysqli_query($con, $sql);

    if($tables == "grades"){
        include_once '/var/www/html/LAMP/ADA/src/models/Classes/Grade.php';
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
        include_once '/var/www/html/LAMP/ADA/src/models/Classes/Disciplina.php';
        $objects = [];

        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $disciplina = new Disciplina();
            $disciplina->setIdDisc($row['idDisc']);
            $disciplina->setNomeDisc($row['nomeDisc']);
            $objects[] = $disciplina;
        }
    }

    else if($tables == "turmas"){
        include_once '/var/www/html/LAMP/ADA/src/models/Classes/Turma.php';
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
        include_once '/var/www/html/LAMP/ADA/src/models/Classes/Avaliacoes.php';
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

    else if($tables == "professor"){
        include_once '/var/www/html/LAMP/ADA/src/models/Classes/Professor.php';

        $objects = [];

        if($atributos != "*"){
            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                $prof = new Professor();
                $prof->setIdProf($row['idProf']);
                $prof->setNomeUser($row['nomeUser']);
                $objects[] = $prof;
            }
        }
        
        else{
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
    }

    else if($tables == "aluno"){
        include_once '/var/www/html/LAMP/ADA/src/models/Classes/Aluno.php';
        $objects = [];

        if($atributos != "*"){
            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                $aluno = new Aluno();
                $aluno->setIdAluno($row['idAluno']);
                $aluno->setNomeUser($row['nomeUser']);
                $objects[] = $aluno;
            }
        }
        else{
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
    }
    return $objects;
}

function delete($object){
    include_once "connectionFactory.php";
    $conFac = new connectionFactory();
    $con = $conFac->getConnection();

    if($object instanceof Professor){
        $sql = "DELETE FROM professor WHERE idProf = '".$object->getIdProf()."'";
        mysqli_query($con, $sql);

        $sql = "DELETE FROM usuario WHERE idUser = '".$object->getIdUser()."'";
        mysqli_query($con, $sql);

        $sql = "DELETE FROM endereco WHERE idEnd = '".$object->getIdEnd()."'";
        mysqli_query($con, $sql);

        $sql = "DELETE FROM login WHERE idLogin = '".$object->getIdLogin()."'";
        mysqli_query($con, $sql);

        return "Exclusão efetuada com sucesso!";
    }

    if($object instanceof Aluno){
        $sql = "DELETE FROM aluno WHERE idAluno = '".$object->getIdAluno()."'";
        mysqli_query($con, $sql);

        $sql = "DELETE FROM usuario WHERE idUser = '".$object->getIdUser()."'";
        mysqli_query($con, $sql);

        $sql = "DELETE FROM endereco WHERE idEnd = '".$object->getIdEnd()."'";
        mysqli_query($con, $sql);

        $sql = "DELETE FROM login WHERE idLogin = '".$object->getIdLogin()."'";
        mysqli_query($con, $sql);

        return "Exclusão efetuada com sucesso!";
    }

    else if($object instanceof Disciplina){
        $sql = "DELETE FROM disciplinas WHERE idDisc = ".$object->getIdDisc()."";
        if(mysqli_query($con, $sql)){
            return "Exclusão efetuada com sucesso!";
        }
        else{
            return "Exclusão não realizada!";
        }
    }

    else if($object instanceof Avaliacoes){
        $sql = "DELETE FROM avaliacoes WHERE idAva = ".$object->getIdAva()."";
        if(mysqli_query($con, $sql)){
            return "Exclusão efetuada com sucesso!";
        }
        else{
            return "Exclusão não realizada!";
        }
    }

    else if($object instanceof Grade){
        $sql = "DELETE FROM grades WHERE idGrade = ".$object->getIdGrade()."";
        if(mysqli_query($con, $sql)){
            return "Exclusão efetuada com sucesso!";
        }
        else{
            return "Exclusão não realizada!";
        }
    }

    else if($object instanceof Turma){
        $sql = "DELETE FROM turmas WHERE idTurma = '".$object->getIdTurma()."'";
        mysqli_query($con, $sql);

        return "Exclusão efetuada com sucesso!";
    }
    $conFac->closeConnection($con);
}

function update($object){
    include_once "connectionFactory.php";
    $conFac = new connectionFactory();
    $con = $conFac->getConnection();

    if ($object instanceof Disciplina) {
        $sql = "UPDATE disciplinas 
        SET nomeDisc = '" . $object->getNomeDisc() . "' WHERE idDisc = ".$object->getIdDisc();
        mysqli_query($con,$sql);
    }

    else if ($object instanceof Turma) {
        $sql = "UPDATE turmas
        SET descricaoTurma = '" . $object->getDescricaoTurma() . "',
        serieTurma = '".$object->getSerieTurma()."',
        turnoTurma = '".$object->getTurnoTurma()."',
        salaTurma = '".$object->getSalaTurma()."',
        idGradeTurma = '".$object->getIdGradeTurma()."' 
        WHERE idTurma = ".$object->getIdTurma();
        mysqli_query($con,$sql);
    }

    else if ($object instanceof Grade) {
        $sql = "UPDATE grades
        SET descricaoGrade = '" . $object->getDescricaoGrade() . "',
        anoGrade= '".$object->getAnoGrade()."',
        tipoGrade = '".$object->getTipoGrade()."'
        WHERE idGrade = ".$object->getIdGrade();
        mysqli_query($con,$sql);
    }

    else if ($object instanceof Avaliacoes) {
        $sql = "UPDATE avaliacoes
        SET descricaoAva = '" . $object->getDescricaoAva() . "',
        tipoAva = '".$object->getTipoAva()."',
        pesoAva = '".$object->getPesoAva()."',
        dataAva = '".$object->getDataAva()."',
        obsAva = '".$object->getObsAva()."'
        WHERE idAva = ".$object->getIdAva();
        mysqli_query($con,$sql);
    }

    else if ($object instanceof Aluno) {
        $sql = "UPDATE endereco SET
            ruaEnd = '" . $object->getRuaEnd() . "',
            bairroEnd = '" . $object->getBairroEnd() . "',
            complementoEnd = '" . $object->getComplementoEnd() . "',
            cepEnd = '" . $object->getCepEnd() . "',
            estadoEnd = '" . $object->getEstadoEnd() . "',
            cidadeEnd = '" . $object->getCidadeEnd() . "',
            numeroEnd = '" . $object->getNumeroEnd() . "'
            WHERE idEnd = ".$object->getIdEnd();
        mysqli_query($con, $sql);

        $sql = "UPDATE usuario SET
            nomeUser = '" . $object->getNomeUser() . "',
            dataNascUser = CAST('" . $object->getDataNascUser() . "' AS DATE),
            cpfUser = '" . $object->getCpfUser() . "',
            rgUser = '" . $object->getRgUser() . "',
            foneUser = '" . $object->getFoneUser() . "',
            celularUser = '" . $object->getCelularUser() . "',
            sexoUser = '" . $object->getSexoUser() . "',
            imagemUser = '" . $object->getImagemUser() . "',
            idLoginUser = '" . $object->getIdLoginUser() . "',
            idInstUser = '" . $object->getIdInstUser() . "',
            idEndUser = '" . $object->getIdEndUser() . "'
            WHERE idUser = ".$object->getIdUser();
        mysqli_query($con, $sql);

        $sql = "UPDATE aluno SET
            idUserAluno = '" . $object->getIdUserAluno(). "',
            nomeMaeAluno = '" . $object->getNomeMaeAluno() . "',
            nomePaiAluno = '" . $object->getNomePaiAluno() . "',
            anoIngressoAluno = '" . $object->getAnoIngressoAluno() . "',
            idTurmaAluno = '" . $object->getIdTurmaAluno() . "'
            WHERE idAluno = ".$object->getIdAluno();
        mysqli_query($con, $sql);

        $sql = "UPDATE login SET
            emailLogin = '".$object->getEmailLogin()."',
            codLogin = '".$object->getCodLogin()."'
            WHERE idLogin = ".$object->getIdLogin();
        mysqli_query($con, $sql);            
    }

    else if ($object instanceof Professor) {
        $sql = "UPDATE endereco SET
            ruaEnd = '" . $object->getRuaEnd() . "',
            bairroEnd = '" . $object->getBairroEnd() . "',
            complementoEnd = '" . $object->getComplementoEnd() . "',
            cepEnd = '" . $object->getCepEnd() . "',
            estadoEnd = '" . $object->getEstadoEnd() . "',
            cidadeEnd = '" . $object->getCidadeEnd() . "',
            numeroEnd = '" . $object->getNumeroEnd() . "'
            WHERE idEnd = ".$object->getIdEnd();
        mysqli_query($con, $sql);

        $sql = "UPDATE usuario SET
            nomeUser = '" . $object->getNomeUser() . "',
            dataNascUser = CAST('" . $object->getDataNascUser() . "' AS DATE),
            cpfUser = '" . $object->getCpfUser() . "',
            rgUser = '" . $object->getRgUser() . "',
            foneUser = '" . $object->getFoneUser() . "',
            celularUser = '" . $object->getCelularUser() . "',
            sexoUser = '" . $object->getSexoUser() . "',
            imagemUser = '" . $object->getImagemUser() . "',
            idLoginUser = '" . $object->getIdLoginUser() . "',
            idInstUser = '" . $object->getIdInstUser() . "',
            idEndUser = '" . $object->getIdEndUser() . "'
            WHERE idUser = ".$object->getIdUser();
        mysqli_query($con, $sql);

        $sql = "UPDATE professor SET
            idUserProf = '" . $object->getIdUserProf(). "',
            dataAdmissaoProf = '" . $object->getDataAdmissaoProf() . "',
            WHERE idProf = ".$object->getIdProf();
        mysqli_query($con, $sql);

        $sql = "UPDATE login SET
            emailLogin = '".$object->getEmailLogin()."',
            codLogin = '".$object->getCodLogin()."'
            WHERE idLogin = ".$object->getIdLogin();
        mysqli_query($con, $sql);            
    }
    $conFac->closeConnection($con);
}

?>