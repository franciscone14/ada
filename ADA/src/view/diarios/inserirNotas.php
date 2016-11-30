<?php
    
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d/m/Y');
    $alunos = array('Franciscone Luiz de Almeida Junior','Tulio','Felipe','Anna','Debora','João','Jailson','Arlindo','Marcela','Julia');
    $class =  ('2ºB- Noturno');
    $disciplina = 'Banco de Dados';
    $matricula = array('201415TIICE0011');
?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">   
<div class="col-md-1"></div>
    <div style="padding:0%;" class="col-md-10 col-sm-12 col-xs-12 panel panel-primary">
        <div class="panel-heading">Lançamento de Notas</div>
<div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                <th style="width:10%;">Matricula:</th>
                <th style="width:30%;">Aluno:</th>
                <th style="width:10%;">Nota:</th>
                <th style="width:60%;">Observação:</th>
                </tr>
            </thead>

            <tbody>
            <?php
                for($i = 0; $i < count($alunos); $i++){                   
                    echo "<tr>";
                    echo "<td>".$matricula[0]."</td>";
                    echo "<td>".$alunos[$i]."</td>";
                    echo "<td><input class = \"form-control col-md-12 col-sm-12 col-xs-12\" type=\"number\" placeholder=\"0,0\"/></td>";
                    echo "<td><input class = \"form-control col-md-12 col-sm-12 col-xs-12\" type=\"text\" placeholder=\"Observações\"/></td>";
                    echo "</tr>";
                }
            ?>
            </tbody>


            <tbody>
            <tr>
                <td style="width:20%"><center><b>Data:&nbsp;</b><?php echo "$date"; ?></td>
                <td style="width:15%"><center><b>Turma:&nbsp;</b><?php echo "$class"; ?></center></td>
                <td colspan="2"><center><b>Disciplina:&nbsp;</b><?php echo "$disciplina"; ?></center></td>
            </tr>
            </tbody>

            <tbody>

                <td colspan="2">
                    <button class="col-md-12 col-sm-9 col-xs-9 btn btn-success" name="Salvar">
                        <i class="glyphicon glyphicon-ok"></i>&nbsp;Salvar Alterações
                    </button>
                </td>
                <td colspan="2">
                    <a href = "src/view/diarios/lancamentoNotas.php" class = "col-md-12 col-sm-12 col-xs-12 btn btn-danger requestPaggination">
                        <i class="glyphicon glyphicon-remove"></i>&nbsp;Cancelar
                    </a>
                </td>
            </tbody>

        </table>
</div>
        </div>
    <div class="col-md-1"></div>
</div>
