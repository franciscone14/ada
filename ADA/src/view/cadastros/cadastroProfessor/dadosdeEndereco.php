<?php

?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail"> 
<div class="col-md-2"></div>
    <div style="padding:0%;" class="col-md-8 col-sm-6 col-xs-12 panel panel-primary">
        <div class="panel-heading"><center><span id="tituloForm">Cadastro</span> Professor</center></div>
        <table class="table table-striped">

            <thead>
            <th style="background:#DCDCDC">CEP:</th>
            <th style="background:#DCDCDC"></th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:50%;"><input type="text" id="cepEnd" class="form-control" placeholder="00000.000" onblur="addAttr(this);"></td>
                    <td></td>
                </tr>
            </tbody>

            <thead>
            <th style="background:#DCDCDC">Rua:</th>
            <th style="background:#DCDCDC">Bairro:</th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:50%;"><input type="text" id="ruaEnd" class="form-control" placeholder="Rua" onblur="addAttr(this);"></td>
                    <td style="width:50%;"><input type="text" id="bairroEnd" class="form-control" placeholder="Bairro" onblur="addAttr(this);"></td>
                </tr>
            </tbody>

            <thead>
            <th style="background:#DCDCDC">Cidade:</th>
            <th style="background:#DCDCDC">UF:</th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:50%;"><input type="text" class="form-control" id="cidadeEnd" placeholder="Cidade" onblur="addAttr(this);"></td>
                    <td style="width:50%;">
                        <select id="estadoEnd" class="form-control"  onblur="addAttr(this);">
                            <option>-</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
                        </select>
                    </td>
                </tr>
            </tbody>

            <thead>
            <th style="background:#DCDCDC">Complemento:</th>
            <th style="background:#DCDCDC">N° Residencia:</th>
            </thead>

            <tbody>
                <tr>
                    <td style="width:50%;"><input type="text" class="form-control" id="complementoEnd" placeholder="Casa ou AP" onblur="addAttr(this);"></td>
                    <td style="width:50%;"><input type="text" class="form-control" id="numeroEnd" placeholder="Numero Residencial" onblur="addAttr(this);"></td>
                </tr>
            </tbody>

        </table>
    </div>
    <div class="col-md-2"></div>
    <?php include('barraCadastroProfessor.php'); ?>
</div>