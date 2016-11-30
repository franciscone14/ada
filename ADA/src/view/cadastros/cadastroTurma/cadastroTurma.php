<?php
include_once '../../../models/dao/genericDAO.php';

$table = "grades";
$atributos = "*";
$dao = new genericDAO();
$grades = $dao->findData($atributos, $table);
?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">   
<div class="col-md-3"></div>
    <div style="padding:0%;" class="col-md-6 col-sm-6 col-xs-12 panel panel-primary">
        <div class="panel-heading"><center><span id="tituloForm">Cadastro</span> de Turma</center></div>
        <table class="table table-striped">

            <thead>
            <th style="background:#DCDCDC">Série:</th>
            <th style="background:#DCDCDC">Turma:</th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:50%;"><input type="text" id="serieTurma" class="form-control" placeholder="Série" onblur="addAttr(this);"></td>
                    <td style="width:50%;"><input type="text" id="descricaoTurma" class="form-control" placeholder="Turma" onblur="addAttr(this);"></td>
                </tr>
            </tbody>

            <thead>
            <th style="background:#DCDCDC">Turno:</th>
            <th style="background:#DCDCDC">Sala:</th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:50%;"><input type="text" id="turnoTurma" class="form-control" placeholder="Turno" onblur="addAttr(this);"></td>
                    <td style="width:50%;"><input type="text" id="salaTurma" class="form-control" placeholder="Sala" onblur="addAttr(this);"></td>
                </tr>
            </tbody>
            <thead>
            <th colspan="2" style="background:#DCDCDC">Grade:</th>
            </thead>

            <tbody>
                <tr>
                    <td colspan="2">
                        <select id="idGradeTurma" class="form-control" onblur="addAttr(this);">
                            <option>-</option>
                            <?php
                            for ($i = 0; $i < count($grades); $i++) {
                                echo "<option value = \"".$grades[$i]->getIdGrade()."\">" . $grades[$i]->getDescricaoGrade(). $grades[$i]->getAnoGrade() . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
            </tbody>
            
            <tbody>
                <tr>
                    <td><button id = "btnSalvar" class="btn btn-success col-xs-12 col-sm-12 col-md-12" onclick="save('turma');"><i class="glyphicon glyphicon-ok"></i>&nbsp;Cadastrar</button></td>
                    <td><a href="./" class="btn btn-danger col-xs-12 col-md-12 col-md-12"><i class="glyphicon glyphicon-remove">
                            </i>&nbsp;Cancelar</a></td>
                </tr>
            </tbody>

        </table>
    </div>
    <div class="col-md-3"></div>
</div>