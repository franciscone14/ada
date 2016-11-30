<?php
    include_once "../models/dao/genericDAO.php";

    function doUpdate($type, $object){

        if ($type == 'disciplinas') {
            include_once '../models/Classes/Disciplina.php';

            $disciplina = new Disciplina($object['idDisc'], $object['nomeDisc']);
            update($disciplina);
        }

        else if ($type == 'turmas') {
            include_once '../models/Classes/Turma.php';

            $turma = new Turma();
            $turma->setIdTurma($object['idTurma']);
            $turma->setDescricaoTurma($object['descricaoTurma']);
            $turma->setSerieTurma($object['serieTurma']);
            $turma->setTurnoTurma($object['turnoTurma']);
            $turma->setSalaTurma($object['salaTurma']);
            $turma->setIdGradeTurma($object['idGradeTurma']);
            update($turma);
        }

        else if ($type == 'alunos') {
            include_once '../models/Classes/Aluno.php';

            $aluno = new Aluno();
            $aluno->setIdEnd($object['idEnd']);
            $aluno->setRuaEnd($object['ruaEnd']);
            $aluno->setBairroEnd($object['bairroEnd']);
            $aluno->setComplementoEnd($object['complementoEnd']);
            $aluno->setCepEnd($object['cepEnd']);
            $aluno->setEstadoEnd($object['estadoEnd']);
            $aluno->setCidadeEnd($object['cidadeEnd']);
            $aluno->setNumeroEnd($object['numeroEnd']);
            $aluno->setIdUser($object['idUser']);
            $aluno->setNomeUser($object['nomeUser']);
            $aluno->setDataNascUser($object['dataNascUser']);
            $aluno->setCpfUser($object['cpfUser']);
            $aluno->setRgUser($object['rgUser']);
            $aluno->setFoneUser($object['foneUser']);
            $aluno->setCelularUser($object['celularUser']);
            $aluno->setSexoUser($object['sexoUser']);
            $aluno->setImagemUser("null");
            $aluno->setIdLoginUser($object['idLoginUser']);
            $aluno->setIdInstUser($object['idInstUser']); 
            $aluno->setIdEndUser($object['idEndUser']);
            $aluno->setIdAluno($object['idAluno']);
            $aluno->setIdUserAluno($object['idUserAluno']);
            $aluno->setNomeMaeAluno($object['nomeMaeAluno']);
            $aluno->setNomePaiAluno($object['nomePaiAluno']);
            $aluno->setAnoIngressoAluno($object['anoIngressoAluno']);
            $aluno->setIdTurmaAluno($object['idTurmaAluno']);
            $aluno->setIdLogin($object['idLogin']);
            $aluno->setEmailLogin($object['emailLogin']);
            $aluno->setCodLogin($object['codLogin']);
            $aluno->setSenhaLogin($object['senhaLogin']);
            update($aluno);
        }

        else if ($type == 'professores') {
            include_once '../models/Classes/Professor.php';

            $prof = new Professor();
            $prof->setIdEnd($object['idEnd']);
            $prof->setRuaEnd($object['ruaEnd']);
            $prof->setBairroEnd($object['bairroEnd']);
            $prof->setComplementoEnd($object['complementoEnd']);
            $prof->setCepEnd($object['cepEnd']);
            $prof->setEstadoEnd($object['estadoEnd']);
            $prof->setCidadeEnd($object['cidadeEnd']);
            $prof->setNumeroEnd($object['numeroEnd']);
            $prof->setIdUser($object['idUser']);
            $prof->setNomeUser($object['nomeUser']);
            $prof->setDataNascUser($object['dataNascUser']);
            $prof->setCpfUser($object['cpfUser']);
            $prof->setRgUser($object['rgUser']);
            $prof->setFoneUser($object['foneUser']);
            $prof->setCelularUser($object['celularUser']);
            $prof->setSexoUser($object['sexoUser']);
            $prof->setImagemUser("null");
            $prof->setIdLoginUser($object['idLoginUser']);
            $prof->setIdInstUser($object['idInstUser']); 
            $prof->setIdEndUser($object['idEndUser']);
            $prof->setIdUserProf($object['idUserProf']);
            $prof->setIdProf($object['idProf']);
            $prof->setDataAdmissaoProf($object['dataAdmissaoProf']);
            $prof->setIdLogin($object['idLogin']);
            $prof->setEmailLogin($object['emailLogin']);
            $prof->setCodLogin($object['codLogin']);
            $prof->setSenhaLogin($object['senhaLogin']);
            update($prof);
        }

        else if ($type == 'grades') {
            include_once '../models/Classes/Grade.php';

            $grade = new Grade();
            $grade->setIdGrade($object['idGrade']);
            $grade->setDescricaoGrade($object['descricaoGrade']);
            $grade->setTipoGrade($object['tipoGrade']);
            $grade->setAnoGrade($object['anoGrade']);
            update($grade);
        }

        else if ($type == 'avaliacoes') {
            include_once '../models/Classes/Avaliacoes.php';

            $ava = new Avaliacoes();
            $ava->setIdAva($object['idAva']);
            $ava->setDescricaoAva($object['descricaoAva']);
            $ava->setTipoAva($object['tipoAva']);
            $ava->setPesoAva($object['pesoAva']);
            $ava->setDataAva($object['dataAva']);
            $ava->setObsAva($object['obsAva']);
            update($ava);
        }
    }

    function constructAssociativeArray($type, $id){
        if($type == "professores"){
            $tables = "professor";
            $attr = "*";
            $cond = "INNER JOIN usuario INNER JOIN endereco INNER JOIN login ON idProf = ".$id." AND idUser = idUserProf AND idLogin = idLoginUser AND idEnd = idEndUser";
            $object = find($attr, $tables, $cond);
        }

        else if($type == "alunos"){
            $attr = "*"; 
            $tables = "aluno"; 
            $cond = "INNER JOIN usuario INNER JOIN endereco INNER JOIN login ON idAluno = ".$id." AND idUser = idUserAluno AND idLogin = idLoginUser AND idEnd = idEndUser";
            $object = find($attr, $tables, $cond, 'login');
        }

        else if($type == "disciplinas"){
            $tables = "disciplinas";
            $attr = "*";
            $cond = "WHERE idDisc = ".$id;
            $object = find($attr, $tables, $cond);
        }

        else if($type == "turmas"){
            $tables = "turmas";
            $attr = "*";
            $cond = "WHERE idTurma = ".$id;
            $object = find($attr, $tables, $cond);
        }
        else if($type == "grades"){
            $tables = "grades";
            $attr = "*";
            $cond = "WHERE idGrade = ".$id;
            $object = find($attr, $tables, $cond);
        }
        else if($type == "avaliacoes"){
            $tables = "avaliacoes";
            $attr = "*";
            $cond = "WHERE idAva = ".$id;
            $object = find($attr, $tables, $cond);
        }

        return print_r(json_encode($object[0]->getAttr()));
    }

    $type1 = $_POST['type1'];

    if($type1 == "fillFields"){
        $id = $_POST['id'];
        $type2 = $_POST['type2'];
        constructAssociativeArray($type2, $id);
    }

    else if($type1 == "update"){
        $type2 = $_POST['type2'];
        $object = $_POST['object'];
        doUpdate($type2, $object);

        echo "Atualização realizada com sucesso";
    }
	
?>