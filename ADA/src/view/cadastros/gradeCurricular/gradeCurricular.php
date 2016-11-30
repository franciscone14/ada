<?php
$tipo = array('1° Grau', '2° Grau', 'Tecnico', 'Superior');
?>

<div style="margin-top:-35px; width:100%;" class="img-thumbnail">

    <!-- Cadastro de Grade Curricular -->
    <div style="margin-top:15px; padding:0%;" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 panel panel-primary">
        <div class="panel-heading"><center>Grade Curricular</center></div>        
        <table class="table table-striped">

            <thead>
            <th style="background:#DCDCDC;">Ano:</th>
            <th style="background:#DCDCDC;">Titulo:</th>
            </thead>

            <tbody>
                <tr>
                    <td><input type="text" class="form-control" placeholder="Ano" id="anoGrade" onblur="addAttr(this);" ></td>
                    <td><input type="text" class="form-control" placeholder="Titulo" id="descricaoGrade" onblur="addAttr(this);"></td>
                </tr>
            </tbody>

            <thead>
            <th style="background:#DCDCDC;">Tipo:</th>
            <th style="background:#DCDCDC;">Cadastrar Grade:</th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:50%;" class="form-group">

                        <select class="form-control" id="tipoGrade" onblur="addAttr(this);">
                            <?php
                            for ($i = 0; $i < count($tipo); $i++) {
                                echo "<option value=\"".($i+1)."\">$tipo[$i]</option>";
                            }
                            ?>
                        </select>                                                
                    </td>

                    <td>
                        <button class="btn btn-success col-xs-12 col-sm-12 col-md-12" id="btnSalvar" onclick="save('grade');">
                            <i class="glyphicon glyphicon-ok"></i>&nbsp;Cadastrar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Cadastro de Grade Curricular -->


</div>
