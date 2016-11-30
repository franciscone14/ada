<?php
include_once '../../../models/dao/genericDAO.php';
$dao = new genericDAO();

$tables = "grades";
$atributos = "*";
$grades = $dao->findData($atributos, $tables);

$tables = "disciplinas";
$atributos = "*";
$disciplinas = $dao->findData($atributos, $tables);
?>

<div style="margin-top:-35px; width:100%;" class="img-thumbnail">

    <div style="margin-top:15px; padding:0%;" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 panel panel-primary">
        <div class="panel-heading"><center>Vincular Grade/Disciplina</center></div>        
        <table class="table table-striped">

            <thead>
            <th style="background:#DCDCDC; width:4%;">Disciplina:</th>
            <th style="background:#DCDCDC;">Grade:</th>
            <th style="background:#DCDCDC;">Vincular Grade/Disciplina:</th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:45%;" class="form-group">                                      
                        <select class="form-control" id="idDisc" onblur="addAttr(this);">
                            <option>-</option>
                            <?php
                            for ($i = 0; $i < count($disciplinas); $i++) {
                                echo "<option value = \"".$disciplinas[$i]->getIdDisc()."\">" . $disciplinas[$i]->getNomeDisc() . "</option>";
                            }
                            ?>
                        </select>                                                
                    </td>

                    <td style="width:20%;" class="form-group">                                      
                        <select class="form-control" id="idGrade" onblur="addAttr(this);">
                            <option>-</option>
                            <?php
                            for ($i = 0; $i < count($grades); $i++) {
                                echo "<option value = \"".$grades[$i]->getIdGrade()."\">" . $grades[$i]->getDescricaoGrade() . $grades[$i]->getAnoGrade() . "</option>";
                            }
                            ?>
                        </select>                                                
                    </td>

                    <td>
                        <button class="btn btn-success col-xs-12 col-sm-12 col-md-12" onclick="save('gradeDisc');">
                            <i class="glyphicon glyphicon-ok"></i>&nbsp;Vincular</button>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>

    <!-- Grades Cadastradas -->
    <div style="padding:0%;" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 panel panel-primary">
        <div class="panel-heading" role="tab" id="headingTwo"><h4 style="text-align:center;" class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" 
                   aria-expanded="false" aria-controls="collapseTwo">Grades Vigentes</a></h4></div>

        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div style="padding:0%;" class="panel-body">
                <table class="table table-striped">

                    <thead>
                    <th style="width:50%; background:#DCDCDC;">Disciplina:</th>
                    <th style="width:15%; background:#DCDCDC;">Grade:</th>
                    <th style="width:8%; background:#DCDCDC;">Excluir:</th>                                      
                    </thead>


                    <tbody>                     
                        <?php
                        for ($i = 0; $i < count($grades); $i++) {

                            echo "<tr><td style=\"width:1%;\">" . $grades[$i]->getIdGrade() . "</td>";
                            echo "<td><a data-toggle=\"modal\" data-target=\".modalGrades\" class = \"btn\">" . $grades[$i]->getDescricaoGrade() . $grades[$i]->getAnoGrade() . "</a></td>";

                            echo "<td style=\"width:9%;\"><button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"del('grades',".$grades[$i]->getIdGrade().");\">
                          <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"><span></button</td></tr>";
                        }
                        ?>   
                    </tbody>                            
                </table><?php include('barraDiciplinasVinculadas.php'); ?>          
            </div>
        </div>
    </div>
    <!-- Grades Cadastradas -->

</div>

<div class="modal fade modalGrades" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>