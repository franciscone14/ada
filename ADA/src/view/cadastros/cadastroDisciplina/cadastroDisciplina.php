
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">   
    <div style="padding:0%;" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 panel panel-primary">
        <div class="panel-heading"><center><span id="tituloForm">Cadastro</span> de Diciplinas</center></div>        
        <table class="table table-striped">

            <thead>                        
                <th style="width:55%; background:#DCDCDC;" class="bg-info">Diciplina:</th>
                <th style="background:#DCDCDC;">Cadastrar Disciplina:</th>
            </thead>

            <tbody>
                <tr>                            
                    <td><input type="text" id="nomeDisc" class="form-control" placeholder="Diciplina" onblur="addAttr(this);"></td>
                    <td><button class="btn btn-success col-xs-12 col-sm-12 col-md-12" id="btnSalvar" onclick="save('disciplina');">
                        <i class="glyphicon glyphicon-ok"></i>&nbsp;Cadastrar</button></td>
                    </tr>
                </tbody>

            </table>      
    </div>
</div>

