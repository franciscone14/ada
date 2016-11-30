<?php
include_once '../../../models/dao/genericDAO.php';
$dao = new genericDAO();

$table = "disciplinas";
$atributos = "*";
$disciplinas = $dao->findData($atributos, $table);

$tables = "aluno";
$atributos = "idAluno, nomeUser";
$condicao = "INNER JOIN usuario INNER JOIN endereco ON idUserAluno = idUser AND idEndUser = idEnd";
$aluno = $dao->findData($atributos, $tables, $condicao);

?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">
<div class="col-md-3"></div>
    <div style="padding:0%;" class="col-md-6 col-sm-12 col-xs-12 panel panel-primary">
        <div class="panel-heading"><center>Associação Aluno / Disciplina</center></div>   
        <table class="table table-striped">

            <thead>                
                <th style="background:#DCDCDC">Aluno:</th>
                <th style="background:#DCDCDC">Disciplina:</th>                
            </thead>

            <tbody>
                <tr>                   

                    <td style="width:50%;" class="form-group">
                        <select class="form-control" id = "idAluno" onblur="addAttr(this);">
                            <option><center>-</center></option>
                            <?php
                            for ($i = 0; $i < count($aluno); $i++) {
                                echo "<option value = \"". $aluno[$i]->getIdAluno() . "\">" . $aluno[$i]->getNomeUser() . "</option>";

                            }
                            ?>
                        </select>                                                
                    </td>

                    <td style="width:50%;" class="form-group">
                        <select class="form-control" id="idDiscAlu" onblur="addAttr(this);">
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
                        <button type="submit" class="btn btn-success col-xs-12 col-sm-12 col-md-12" onclick="save('alunoDisc');">
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
    <div class="col-md-3"></div>
</div>