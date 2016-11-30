<?php
    include_once '../../../models/dao/genericDAO.php';
    $dao = new genericDAO();

    $table = "disciplinas";
    $atributos = "*";
    $disc = $dao->findData($atributos, $table);
?>

    <div style="margin-top:-35px; width:100%;" class="img-thumbnail">   
        <div style="padding:0%;" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 panel panel-primary">
            <div class="panel-heading"><center>Diciplinas Cadastradas</center></div>        
            <table class="table table-striped">

                <thead>
                    <th style="background:#DCDCDC;">Disciplina:</th>
                    <th style="background:#DCDCDC;">Excluir:</th>
                    <th style="background:#DCDCDC;">Editar:</th>
                </thead>


                <tbody>
                    <?php
                    for ($i = 0; $i < count($disc); $i++) {

                        echo "<tr><td>" . $disc[$i]->getNomeDisc() . "</td>";

                        echo "<td style=\"width:13%;\"><button class=\"btn btn-danger btn-sm\" id=\"excluiDisciplina\" onclick=\"del('disciplinas'," . $disc[$i]->getIdDisc(). ");\">
                        <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"><span></button</td>";

                            echo "<td style=\"width:13%;\"><button class=\"btn btn-warning btn-sm\" id=\"editaDisciplina\" onclick=\"edit('disciplinas'," . $disc[$i]->getIdDisc() . ");\">
                            <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"><span></button</td></tr>";
                            }
                            ?>                           

                        </tbody>                            
                    </table>

                    <?php
                    include('barraCadastroDisciplina.php');
                    ?>

                </div>
            </div>
            
            