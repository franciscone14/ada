<?php
include_once '../../../models/dao/genericDAO.php';
$dao = new genericDAO();

$table = "turmas";
$atributos = "*";
$turmas = $dao->findData($atributos, $table);
?>

<div style="margin-top:-35px; width:100%;" class="img-thumbnail">   
<div class="col-md-2"></div>
    <div style="padding:0%;" class="col-md-8 col-sm-12 col-xs-12 panel panel-primary">
        <div class="panel-heading"><center><span id="tituloForm">Cadastro</span><span>Aluno</span></center></div>

        <table class="table table-striped">


            <thead>
            <th style="background:#DCDCDC">Turma:</th>
            <th style="background:#DCDCDC">Ano de Ingresso na Escola:</th>
            </thead>

            <tbody>
                <tr>	
                    <td style="width:50%;" class="form-group">
                        <select class="form-control" id="idTurmaAluno" onblur="addAttr(this);">
                            <option>-</option>
                           <?php
                            for ($i = 0; $i < count($turmas); $i++) {
                                echo "<option value = \"".$turmas[$i]->getIdTurma()."\">" . $turmas[$i]->getSerieTurma() . "º " . $turmas[$i]->getDescricaoTurma() . " - " . $turmas[$i]->getTurnoTurma() . "</option>";
                            }
                            ?>
                        </select>                                                
                    </td>
                    <td><input type="text" class="form-control" placeholder="Ano de Entrada na Instituição" id="anoIngressoAluno" onblur="addAttr(this);"></td>

                </tr>
            </tbody>

        </table>

    </div>
    <div class="col-md-2"></div>
    <?php include('barraCadastroAluno.php'); ?>
</div>

