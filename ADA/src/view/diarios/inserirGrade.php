<?php

?>

<div style="margin-top:-35px; width:100%;" class="img-thumbnail">
<div class="col-md-3"></div>
    <div style="padding:0%;" class="col-md-6 col-sm-12 col-xs-12 panel panel-primary">
        <div class="panel-heading"><center>Nova Grade de Notas</center></div>

        <table class="table table-striped">


            <thead>
                <th style="background:#DCDCDC;">Descricao:</th>
                <th style="background:#DCDCDC;">Tipo de Nota:</th>
            </thead>

            <tbody>
                <td style="width:50%;"><input class = "form-control" type="text" id="descricaoAva" placeholder="Descrição" onblur="addAttr(this);"/></td>
                <td style="width:50%;">
                    <select class="form-control" id = "tipoAva" size = "-1" onblur="addAttr(this);">
                        <option>-</option>
                        <option>Avaliação</option>
                        <option>Trabalho</option>
                        <option>Exercicio</option>
                        <option>Outros</option>
                    </select>
                </td>
            </tbody>

            <thead>
                <th style="background:#DCDCDC">Peso:</th>
                <th style="background:#DCDCDC">Data:</th>
            </thead>

            <tbody>
                <td style="width:50%;"><input class = "form-control" type="text" id="pesoAva" placeholder="0" onblur="addAttr(this);" /></td>
                <td style="width:50%;"><input class = "form-control" type="date" id="dataAva" placeholder="Data" onblur="addAttr(this);"/></td>
            </tbody>

            <thead>
                <th style="background:#DCDCDC" colspan="2">Observação:</th>
            </thead>

            <tbody>
                <td colspan="2"><input class = "form-control" type="text" id="obsAva" placeholder="Observações" onblur="addAttr(this);"/></td>
            </tbody>

            <tbody>
                <td>
                    <button class="btn btn-success col-md-12 col-sm-12 col-xs-12" id="btnSalvar" onclick="save('avaliacoes');"><i class="glyphicon glyphicon-ok">
                        </i>&nbsp;Salvar Grade
                    </button>
                </td>
                <td>
                    <a href = "src/view/diarios/lancamentoNotas.php" class = "btn btn-danger requestPaggination col-md-12 col-sm-12 col-xs-12">
                        <i class="glyphicon glyphicon-remove"></i>&nbsp;Cancelar
                    </a>
                </td>
            </tbody>

        </table>

    	</div>
  	<div class="col-md-3"></div>
</div>