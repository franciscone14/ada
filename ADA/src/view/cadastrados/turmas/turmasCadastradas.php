<?php
include_once '../../../models/dao/genericDAO.php';
$dao = new genericDAO();

$table = "turmas";
$atributos = "*";
$turmas = $dao->findData($atributos, $table);

?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">   

<div style="padding:0%;" class="col-md-6 col-xs-12 col-sm-12 col-md-offset-3 panel panel-primary">

    <div class="panel-heading">
        <center>Turmas Cadastradas</h4></center>
    </div>

    <!--<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">-->
    <div style="padding:0%;" class="panel-body">
        <table class="table table-striped">

            <thead>                
                <th style="width:22%; background:#DCDCDC;">Turma:</th>               
                <th style="width:1%; background:#DCDCDC;">Excluir:</th>
                <th style="width:1%; background:#DCDCDC;">Editar:</th>                            
            </thead>

            <tbody>         

                
                <?php
                for ($i = 0; $i < count($turmas); $i++) {
                    echo "<tr>";
                    echo "<td>" . $turmas[$i]->getSerieTurma() . "º " . $turmas[$i]->getDescricaoTurma() . " - " . $turmas[$i]->getTurnoTurma() . "</td>";                    

                    echo "<td><button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"del('turmas',".$turmas[$i]->getIdTurma().");\">
                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"><span></button></td>";

                    echo "<td><button type=\"button\" class=\"btn btn-warning btn-sm\" data-toggle=\"modal\" onclick=\"edit('turmas'," . $turmas[$i]->getIdTurma() . ");\">
                    <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"><span></button></td></tr>";
                    }
                ?>

                    </tbody>
                </table>
                
                <?php
                include('barraTurmasCadastradas.php');
                ?>          
            </div>
        </div>

</div>