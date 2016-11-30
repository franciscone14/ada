<?php
include_once '../../../models/dao/genericDAO.php';

$tables = "professor";
$atributos = "idProf, nomeUser";
$condicao = "INNER JOIN usuario INNER JOIN endereco ON idUserProf = idUser AND idEndUser = idEnd";
$prof = find($atributos, $tables, $condicao);
?>

<div style="padding:0%;" class="col-md-6 col-xs-12 col-sm-12 col-md-offset-3 panel panel-primary">

    <div class="panel-heading">
        <center>Professores Cadastrados</h4></center>
    </div>

    <!--<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">-->
    <div style="padding:0%;" class="panel-body">
        <table class="table table-striped">

            <thead>
                <th style="width:5%; background:#DCDCDC;">Codigo:</th>
                <th style="width:22%; background:#DCDCDC;">Professor(a):</th>
                <th style="width:1%; background:#DCDCDC;">Excluir:</th>
                <th style="width:1%; background:#DCDCDC;">Editar:</th>                           
            </thead>

            <tbody>

                <?php
                for ($i = 0; $i < count($prof); $i++) {

                    echo "<tr><td>" . $prof[$i]->getIdProf() . "</td>";
                    echo "<td>" . $prof[$i]->getNomeUser(). "</td>";

                    echo "<td><button type=\"button\" class=\"btn btn-danger btn-sm\" id=\"excluiProfessor\" onclick=\"del('professor',".$prof[$i]->getIdProf().");\">
                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"><span></button></td>";

                        echo "<td><button type=\"button\" class=\"btn btn-warning btn-sm\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\" id=\"editaProfessor\">
                        <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"><span></button></td></tr>";
                        }
                        ?>

                    </tbody>
                </table>
                <?php
                include('barraProfessorCadastrado.php');
                ?>          
            </div>
        </div>
<!--</div>-->