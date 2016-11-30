<?php
    include_once "../../models/dao/genericDAO.php";
    $table = "avaliacoes";
    $atributos = "*";
    $ava = find($atributos, $table);
?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">   
<div class="col-md-1"></div>
    <div style="padding:0%;" class="col-md-10 col-sm-12 col-xs-12 panel panel-primary">
        <div class="panel-heading">Grade de Atividades</div>
    <div class="table-responsive">   
        <table class="table table-striped">
            <thead>
                <th style="background:#DCDCDC">Opção:</th>
                <th style="background:#DCDCDC">Avaliação:</th>
                <th style="background:#DCDCDC">Tipo:</th>
                <th style="background:#DCDCDC">Peso:</th>
                <th style="background:#DCDCDC">Data:</th>
                <th style="background:#DCDCDC">Observação:</th>
                <th style="background:#DCDCDC">Notas:</th>
                <th style="background:#DCDCDC">Presença:</th>
            </thead>

            <?php //radio-inline
                for($x = 0; $x < count($ava); $x++){     
                    echo "<tbody>";
                    echo "<td><input class = \"radio-inline\" type=\"radio\" id=\"idAva\" name=\"acao\" value=\"".$ava[$x]->getIdAva()."\" onclick = \"sendId(this.value);\"/></td>";
                    echo "<td>".$ava[$x]->getDescricaoAva()."</td>";
                    echo "<td>".$ava[$x]->getTipoAva()."</td>";
                    echo "<td>".$ava[$x]->getPesoAva()."</td>";
                    echo "<td>".$ava[$x]->getDataAva()."</td>";
                    echo "<td>".$ava[$x]->getObsAva()."</td>";
                    echo "<td><a class = \"requestPaggination\" href = \"src/view/diarios/inserirNotas.php\" id = \"".$x."\">Lançar Notas</a></td>";
                    echo "<td><a href = \"#\" id = \"".$x."\">Lista</a></td>";
                    echo "</tbody>";
                }
            ?>

            <tbody>
                <td colspan="2">
                    <a class="btn btn-success requestPaggination col-md-12 col-sm-12 col-xs-12" href = "src/view/diarios/inserirGrade.php">
                        <i class="glyphicon glyphicon-th-list"></i>&nbsp;Inserir na Grade
                    </a>
                </td>
                <td colspan="2">
                    <button class="btn btn-warning col-md-12 col-sm-12 col-xs-12" id = "alterarGrade" onclick="alert('Selecione uma opção!');">
                        <i class="glyphicon glyphicon-edit"></i>&nbsp;Alterar Seleção
                    </button>
                </td>
                <td colspan="2">
                    <button class="btn btn-danger col-md-12 col-sm-12 col-xs-12" id = "excluirGrade" onclick="alert('Selecione uma opção!');">
                        <i class="glyphicon glyphicon-trash"></i>&nbsp;Excluir Seleção
                    </button>
                </td>                
                <td colspan="2">
                    <a href = "src/view/home/home.php" class = "btn btn-danger requestPaggination col-md-12 col-sm-12 col-xs-12">
                        <i class="glyphicon glyphicon-remove"></i>&nbsp;Cancelar
                    </a>
                </td>
            </tbody>

        </table>

            </div>
        </div>
    <div class="col-md-1"></div>
</div>



<!-- "<div><td><input type=\"radio\"/ name=\"acao\" value=\"".$avaliacao[$i]."\"></td><td class = \"avaliacao\">".$avaliacao[$i]."</td><td class = \"tipoData\">".$tipo[$i]."</td><td class = \"peso\">".$peso[$i]."</td><td class = \"tipoData\">".$date."</td><td class = \"observacao\">".$observacao[$i]."</td><td class = \"links\"><a href = \"index.php?tipo=diarios&arquivo=inserirNotas\">Lançar Notas</a></td><td class = \"links\"><a href = \"#\">Lista de Presença</a></td>
        				</tr>"; -->