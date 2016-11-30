<?php
include_once '../../../models/dao/genericDAO.php';
$dao = new genericDAO();

$tables = "grades";
$atributos = "*";
$grades = $dao->findData($atributos, $tables);
?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">

    <div style="margin-top:15px; padding:0%;" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 panel panel-primary">
        <div class="panel-heading"><center>Grade Cadastradas</center></div>    
            <table class="table table-striped">

                    <thead>
                        <th style="width:11%; background:#DCDCDC;">Código:</th>
                        <th style="width:10%; background:#DCDCDC;">Ano:</th>
                        <th style="width:35%; background:#DCDCDC;">Titulo:</th>
                        <th style="width:22%; background:#DCDCDC;">Tipo:</th>
                        <th style="width:3%; background:#DCDCDC;">Excluir:</th>
                        <th style="width:3%; background:#DCDCDC;">Editar:</th>
                    </thead>

                    <tbody>                	
                        <?php
                        for ($i = 0; $i < count($grades); $i++) {
                            if($grades[$i]->getTipoGrade() == 1){
                                $tipo = "1º Grau";
                            }
                            else if($grades[$i]->getTipoGrade() == 2){
                                $tipo = "2º Grau";
                            }
                            else if($grades[$i]->getTipoGrade() == 3){
                                $tipo = "Técnico";
                            }
                            else if($grades[$i]->getTipoGrade() == 4){
                                $tipo = "Superior";
                            }

                            echo "<tr>";
                            echo "<td>" . $grades[$i]->getIdGrade() . "</td>";
                            echo "<td>" . $grades[$i]->getAnoGrade() . "</td>";
                            echo "<td>" . $grades[$i]->getDescricaoGrade() . "</td>";
                            echo "<td>" . $tipo . "</td>";

                            echo "<td style=\"width:9%;\"><button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"del('grades',".$grades[$i]->getIdGrade().");\">
	                        <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"><span></button</td>";

                            echo "<td style=\"width:9%;\"><button type=\"button\" class=\"btn btn-warning btn-sm\" onclick=\"edit('grades',".$grades[$i]->getIdGrade().");\">
	                        <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"><span></button</td></tr>";
                        }
                        ?>
                    </tbody>
            </table>
        <?php include('barraGradeCadastrada.php'); ?>
    </div>
</div>