<?php
    include_once '../../models/dao/genericDAO.php';

    $tables = "aluno";
    $atributos = "*";
    $condicao = "INNER JOIN usuario INNER JOIN endereco INNER JOIN login ON idUserAluno = idUser AND idEndUser = idEnd AND idLogin = idLoginUser";
    $alunos = find($atributos, $tables, $condicao);

    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d/m/Y');
    $disciplina = "Banco de Dados";
 
?>

<div style="margin-top:-35px; width:100%;" class="img-thumbnail">
    <div style="padding:0%;" class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2 panel panel-primary">
        <div class="panel-heading">
        <center>Frequência</center>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">

            <thead>
             <tr class="active">
                <th style="width: 10%">Matricula:</th>
                <th style="width: 40%">Aluno:</th>
                <th style="width: 25%"></th>
                <th style="width: 25%">Presença:</th>
             </tr>
            </thead>

            <tbody>
                <?php
                    echo "<script>var idAluno = Array();</script>";
                    echo "<script>var valueAluno = Array();</script>";
                    for($i = 0; $i < count($alunos); $i++){
                        echo "<script>object.size = ".count($alunos).";</script>";
                        echo "<script>idAluno[".$i."] = ".$alunos[$i]->getIdAluno().";</script>";
                        echo "<script>valueAluno[".$i."] = true;</script>";
                        echo "<tr>";
                        echo "<td>".$alunos[$i]->getCodLogin()."</td>";
                        echo "<td colspan = \"2\"><span>".$alunos[$i]->getNomeUser()."</span></td>";
                        echo "<td><input class = \"btn btn-default\" type=\"button\" id=\"idPresenca".$alunos[$i]->getIdAluno()."\" onclick = \"setPresenca(this.id, ".$i.");\" value = \"P\"/></td>";     
                        echo "</tr>";
                    }
                ?>
            </tbody>

            <tbody>            
                <tr class="active"> 
                    <td><center><span><b>Turma:&nbsp;</b></span><span>1ºB - Noturno</span></center></td>
                    <td colspan="2"><center><span><b>Disciplina:&nbsp;</b></span><span><?php echo "$disciplina"; ?></span></center></td>
                    <td><center><span><b>Data Chamada:</b></span></td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td colspan="3"><input type="text" class="form-control" id="contProgFreq" placeholder="Conteúdo Ministrado na Aula" onblur = "addAttr(this);"/></td>
                    <td><input type="date" class="form-control" id="dataFreq" placeholder="dd/mm/yyyy" onblur = "addAttr(this);"/></td>
                </tr>

                <tr>              
                    <td colspan = "2"><button class="btn btn-success col-md-12 col-sm-12 col-xs-12" onclick = "save('frequencia');"><i class="glyphicon glyphicon-ok"></i>&nbsp;Salvar Alterações</button></td>                
                    <td colspan = "2"><a href = "./" class = "btn btn-danger col-md-12 col-sm-12 col-xs-12"><i class="glyphicon glyphicon-remove"></i>&nbsp;Cancelar</a></td>
                </tr>
            </tbody>

        </table>
    </div>
    </div>
</div>

