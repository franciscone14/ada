<?php
include_once '../../../models/dao/genericDAO.php';
$dao = new genericDAO();

$table = "turmas";
$atributos = "*";
$turmas = $dao->findData($atributos, $table);

$table = "disciplinas";
$atributos = "*";
$disciplinas = $dao->findData($atributos, $table);

$tables = "professor";
$atributos = "idProf, nomeUser";
$condicao = "INNER JOIN usuario ON idUserProf = idUser";
$professores = $dao->findData($atributos, $tables, $condicao);

?>

<div style="margin-top:-35px; width:100%;" class="img-thumbnail">   
<div class="col-md-2"></div>
    <div style="padding:0%;" class="col-md-8 col-sm-12 col-xs-12 panel panel-primary">
        <div class="panel-heading"><center>Associação Diciplina</center></div>   
        <table class="table table-striped">

            <thead>
            <th style="background:#DCDCDC">Codigo:</th>
            <th style="background:#DCDCDC">Professor:</th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:50%;" class="form-group">                         
                        <input type="text" name="idUserProf" class="form-control" placeholder="Codido Professor">
                    </td>

                    <td style="width:50%;" class="form-group">
                        <select class="form-control" id = "idProf" onblur="addAttr(this);">
                            <option><center>-</center></option>
                            <?php
                            for ($i = 0; $i < count($professores); $i++) {
                                echo "<option value = \"".$professores[$i]->getIdProf()."\">" . $professores[$i]->getNomeUser() . "</option>";
                            }
                            ?>
                        </select>                                                
                    </td>

                </tr>
            </tbody>

            <thead>
            <th style="background:#DCDCDC">Turma:</th>
            <th style="background:#DCDCDC">Disciplina:</th>
            </thead>

            <tbody>
                <tr>                

                    <td style="width:50%;" class="form-group">
                        <select class="form-control" id="idTurma" onblur="addAttr(this);">
                            <option><center>-</center></option>
                            <?php
                            for ($i = 0; $i < count($turmas); $i++) {
                                echo "<option value = \"".$turmas[$i]->getIdTurma()."\">" . $turmas[$i]->getSerieTurma() . "º " . $turmas[$i]->getDescricaoTurma . " - " . $turmas[$i]->getTurnoTurma() . "</option>";
                            }
                            ?>
                        </select>                                                
                    </td>

                    <td style="width:50%;" class="form-group">
                        <select class="form-control" id="idDisc" onblur="addAttr(this);">
                            <option><center>-</center></option>
                            <?php
                            for ($i = 0; $i < count($disciplinas); $i++) {
                                echo "<option value = \"".$disciplinas[$i]->getIdDisc()."\">" . $disciplinas[$i]->getNomeDisc() . "</option>";
                            }
                            ?>
                        </select>                                                
                    </td>

                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success col-xs-12 col-sm-12 col-md-12" name="associaDisc" onclick="save('lecionaEm');">
                            <i class="glyphicon glyphicon-ok"></i>&nbsp;Associar
                        </button>
                    </td>
                    <td>
                        <a href="./" class="btn btn-danger col-xs-12 col-md-12 col-md-12"><i class="glyphicon glyphicon-remove">
                            </i>&nbsp;Cancelar
                        </a>
                    </td>
                </tr>
            </tbody>


        </table>
        
        </div>
    <div class="col-md-2"></div>
</div>