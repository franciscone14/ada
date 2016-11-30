<?php
include_once '../../../models/dao/genericDAO.php';
$dao = new genericDAO();

$tables = "aluno";
$atributos = "idAluno, nomeUser";
$condicao = "INNER JOIN usuario ON idUserAluno = idUser";
$aluno = $dao->findData($atributos, $tables, $condicao);

?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">
<div style="padding:0%;" class="col-md-6 col-xs-12 col-sm-12 col-md-offset-3 panel panel-primary">

    <div class="panel-heading">
        <center>Alunos Cadastrados</center>
    </div>

    <!--<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">-->
    <div style="padding:0%;" class="panel-body">
        <table class="table table-striped">

            <thead>
                <th style="width:5%; background:#DCDCDC;">Codigo:</th>
                <th style="width:22%; background:#DCDCDC;">Aluno(a):</th>
                <th style="width:1%; background:#DCDCDC;">Excluir:</th>
                <th style="width:1%; background:#DCDCDC;">Editar:</th>                           
            </thead>

            <tbody>

                <?php
                for ($i = 0; $i < count($aluno); $i++) {

                    echo "<tr><td>" . $aluno[$i]->getIdAluno() . "</td>";
                    echo "<td>" . $aluno[$i]->getNomeUser(). "</td>";

                    echo "<td><button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"del('aluno',".$aluno[$i]->getIdAluno().");\">
                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"><span></button></td>";

                    echo "<td><button type=\"button\" class=\"btn btn-warning btn-sm\" onclick=\"edit('alunos',".$aluno[$i]->getIdAluno().");\">
                        <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"><span></button></td></tr>";
                }
                ?>

            </tbody>
                </table>      
            </div>
        </div>
</div>