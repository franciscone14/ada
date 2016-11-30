<?php
session_start();
ini_set('default_charset','UTF-8');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"/>        
        
        <link rel="icon" type="image/png" href="public/img/Icone_Pagina.png"/>        
        <link rel="stylesheet" type="text/css" media="all" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css"    />
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="public/estilos/styles.css">
        <link href="public/vendor/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Scripts-->
        <script src="public/vendor/bootstrap-3.3.5-dist/js/jquery.js"></script> 
        <script src="public/vendor/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
        
        <script src="public/vendor/javascript/jquery-ui.js"></script>
        <script src="public/vendor/javascript/JMask.js"></script>
        <script src="public/scripts/script.js"></script>
        <script src="public/scripts/scripts.js"></script>
        
        <!-- Slide Show -->
        <script type="text/javascript" src="public/vendor/javascript/jssor.js"></script>
        <script type="text/javascript" src="public/vendor/javascript/jssor.slider.js"></script> 


        

        <title>.::ADA::.</title>
    </head>


    <body>

        <!-- Cabeçalho Site  -->
        <header id="header">         
        
        <div style="margin-top:2%;" class="img-thumbnail texte">  

            <div style="margin-top:5px;" class="col-md-3 col-sm-4 col-xs-1">        
                <a href="./"><img src="public/img/logo.png" class="col-md-12 col-sm-11 col-xs-1"></a>            
            </div>            

            <div class="col-md-6 col-sm-4 col-xs-1"></div>

            <div class="col-md-3 col-sm-3 col-xs-8">                              
                <img src="public/img/brasao.png" class="col-md-9 col-sm-12 col-xs-12">
            </div>

        </div>    
        </header>


        <!-- Menu Paginas Principais -->
        <nav class="navbar navbar-inverse menu" id="nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                                                
                    </button>
                    <ul class = "resquest">
                        <a class="navbar-brand" href="./" id="inicio">ADA</a>                        
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav">     

                        <li class="dropdown">
                            <a href="#" id = "prof" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Professores <span class="caret"></span></a>
                            <ul class="dropdown-menu request" role="menu">
                                <li><a href="src/view/diarios/lancamentoNotas.php">Diario de Notas</a></li>
                                <li><a href="src/view/diarios/frequencia.php">Diario de Frequência</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" id = "adm" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Instituição <span class="caret"></span></a>
                            <ul class="dropdown-menu request" role="menu" id="menuInstituicao">
                                <li><a href="src/view/cadastros/cadastroTurma/cadastroTurma.php">Cadastro de Turma</a></li>
                                <li><a href="src/view/cadastros/cadastroAluno/dadosPessoais.php">Cadastro de Alunos</a></li>
                                <li><a href="src/view/cadastros/cadastroDisciplina/cadastroDisciplina.php">Cadastro de Diciplinas</a></li>
                                <li><a href="src/view/cadastros/cadastroInstituicao/dadosPessoais.php">Cadastro de Instituição</a></li>
                                <li><a href="src/view/cadastros/cadastroProfessor/dadosPessoais.php">Cadastro de Professores</a></li>
                                <li><a href="src/view/cadastros/gradeCurricular/gradeCurricular.php">Cadastrar Grade Curricular</a></li>                                
                                <li class="divider"></li>
                                <li><a href="src/view/cadastrados/grades/gradesCadastradas.php">Grades Cadastradas</a></li>
                                <li><a href="src/view/cadastrados/professores/professoresCadastrados.php">Professores Cadastrados</a></li>
                                <li><a href="src/view/cadastrados/alunos/alunosCadastrados.php">Alunos Cadastrados</a></li>
                                <li><a href="src/view/cadastrados/turmas/turmasCadastradas.php">Turmas Cadastrados</a></li>
                                <li><a href="src/view/cadastrados/disciplinas/disciplinasCadastradas.php">Disciplinas Cadastradas</a></li>
                                <li class="divider"></li>
                                <li><a href="src/view/cadastros/associacaoDisciplina/associacaoDisciplina.php">Associação Disciplina</a></li>
                                <li><a href="src/view/cadastros/associacaoAluno/associacaoAluno.php">Associação Aluno</a></li>                                
                                <li><a href="src/view/cadastros/vincularDisciplinaGrade/vincularDisciplinaGrade.php">Vincular - Disciplina e Grade</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" id = "alu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Aluno<span class="caret"></span></a>
                            <ul class="dropdown-menu request" role="menu">
                                <!-- <li><a href="forum/forumAluno/forumAluno.php">Forum Aluno</a></li>
                                <li><a href="forum/forumProfessor/forumProfessor.php">Forum Professor</a></li> -->
                                <li><a href="src/view/boletim/bimestral/bimestre.php">Boletim (Bimestral)</a></li>
                                <li><a href="src/view/boletim/trimestral/trimestre.php">Boletim (Trimestral)</a></li>
                                <li><a href="src/view/boletim/semestral/semestre.php">Boletim (Semestral)</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right" id = "loged">
                        <li><a id = "modal" href="#" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Entrar</a>
                            
                            <!-- Inicio Modal Login -->
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: none;">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                    <div class="modal-header">
                                      <button type="button" id = "close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                      <h4 class="modal-title" id="mySmallModalLabel">Login</h4>
                                    </div>

                                    <div class="modal-body">
                                                                          
                                            <form id="login" method="post">
                                                <input type="text" id="user" class="form-control" placeholder="CPF ou Matrícula" onblur="addAttr(this);" /><br/>
                                                <input type="password" id="pwd" class="form-control" placeholder="Senha" onblur="addAttr(this);"/>                                                                          
                                            </form>

                                    </div>

                                    <div class="modal-footer">                                                
                                        <button type="button" class="btn btn-primary col-md-12 col-sm-12 col-xs-12" onclick = "login();"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Logar</button>
                                    </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Final Modal Login -->

                        </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Conteudo -->
﻿
<article id="article">

</article>


<!-- Rodape-->
<footer id="footer">            

    <div class="rodapeIcons col-md-12">
        <a href="./"><img class="iconeLogo" src="public/img/Icone_Logo.png"></a>
        <a href="#"><img  class="iconsRedeSociais" src="public/img/Icones_Instagram.png"></a>
        <a href="#"><img  class="iconsRedeSociais" src="public/img/Icone_Twiter.png"></a>
        <a href="#"><img  class="iconsRedeSociais" src="public/img/Icone_Facebook.png"></a>
    </div>

    <div class="direitosReservados">
        <p>2015 - 2015 ADA - Todos os Direitos Reservados</p>
    </div>
</footer>
</body>

</html>