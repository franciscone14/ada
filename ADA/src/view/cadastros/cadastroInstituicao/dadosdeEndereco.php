<?php

?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">
<div class="col-md-2"></div>
    <div style="padding:0%;" class="col-md-8 col-sm-12 col-xs-12 panel panel-primary">
        <div class="panel-heading"><center>Cadastro Instituição</center></div>
        <table class="table table-striped">

            <thead>
            <th style="background:#DCDCDC">CEP:</th>
            <th style="background:#DCDCDC">Rua:</th>
            <th style="background:#DCDCDC">Bairro:</th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:33%;"><input type="text" id="cepInst" class="form-control" placeholder="00000.000" onblur="addAttr(this);"/></td>
                    <td style="width:30%;"><input type="text" id="ruaInst" class="form-control" placeholder="Rua" onblur="addAttr(this);"/></td>
                    <td style="width:30%;"><input type="text" id="bairroInst" class="form-control" placeholder="Bairro" onblur="addAttr(this);"/></td>								
                </tr>
            </tbody>


            <thead>
            <th style="background:#DCDCDC">Cidade:</th>
            <th style="background:#DCDCDC">UF:</th>
            <th style="background:#DCDCDC">Complemento:</th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:33%;"><input type="text" id = "cidadeInst" class="form-control" placeholder="Cidade" onblur="addAttr(this);"/></td>
                    <td style="width:30%;">
                        <select id="estadoInst" class="form-control"  onblur="addAttr(this);">
                            <option>-</option>
                            <option value = "AC">AC</option>
                            <option value = "AL">AL</option>
                            <option value = "AP">AP</option>
                            <option value = "AM">AM</option>
                            <option value = "BA">BA</option>
                            <option value = "CE">CE</option>
                            <option value = "DF">DF</option>
                            <option value = "ES">ES</option>
                            <option value = "GO">GO</option>
                            <option value = "MA">MA</option>
                            <option value = "MT">MT</option>
                            <option value = "MS">MS</option>
                            <option value = "MG">MG</option>
                            <option value = "PA">PA</option>
                            <option value = "PB">PB</option>
                            <option value = "PR">PR</option>
                            <option value = "PE">PE</option>
                            <option value = "PI">PI</option>
                            <option value = "RJ">RJ</option>
                            <option value = "RN">RN</option>
                            <option value = "RS">RS</option>
                            <option value = "RO">RO</option>
                            <option value = "RR">RR</option>
                            <option value = "SC">SC</option>
                            <option value = "SP">SP</option>
                            <option value = "SE">SE</option>
                            <option value = "TO">TO</option>
                        </select>
                    </td>
                    <td style="width:30%;"><input type="text" id = "complementoInst" class="form-control" placeholder="Complemento" onblur="addAttr(this);"/></td>								
                </tr>
            </tbody>

            <thead>
            <th style="background:#DCDCDC">N°:</th>
            <th style="background:#DCDCDC"></th>
            <th style="background:#DCDCDC"></th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:33%;"><input type="text" class="form-control" id = "numeroInst" placeholder="Numero" onblur="addAttr(this);"></td>
                    <td style="width:30%;"></td>
                    <td style="width:30%;"></td>								
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td><button type="button" class="btn btn-success col-xs-12 col-sm-12 col-md-12" id="cadastrarInst" onclick="save('instituicao');">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Cadastrar</button></td>

                    <td><button type="button" class="btn btn-info  col-xs-12 col-sm-12 col-md-12" id="cadastraAluno">
                    <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>&nbsp;Inserir Brasão</button></td>

                    <td><a href="./"  class="btn btn-danger  col-xs-12 col-sm-12 col-md-12"><i class="glyphicon glyphicon-remove"></i>&nbsp;Cancelar</a></td>							
                </tr>
            </tbody>
            
        </table>

            </div>
        <div class="col-md-2"></div>
    <?php include('barracadastroInstituicao.php'); ?>
</div>