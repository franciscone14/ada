<?php
$matricula = date("Y").rand();
echo "<script>
        if(object.codLogin == undefined){
            object.codLogin = ".$matricula.";
        } 
    </script>";
?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">   
<div class="col-md-2"></div>
    <div style="padding:0%;" class="col-md-8 col-sm-12 col-xs-12 panel panel-primary">
        <div class="panel-heading"><center><span id="tituloForm">Cadastro</span><span>Aluno</span></center></div>
      

        <table class="table table-striped">

            <thead>
                <th style="background:#DCDCDC">Foto de Perfil:</th>
                <th style="background:#DCDCDC">Matricula:</th>    
            </thead>

            <tbody>
                <tr>
                    <td><!-- Imagem de Perfil Aluno -->             
                        <img class="img-circle col-md-5 col-xs-10" src="public/img/imgPerfil.png">
                        <div style="margin-top:6%;" class="col-md-2 col-xs-5">
                            <input type="file" class="filestyle" data-badge="false" data-input="false" id="filestyle-8" tabindex="-1" 
                            style="position: absolute; clip: rect(0px 0px 0px 0px);">
                            <div class="bootstrap-filestyle input-group"><span class="group-span-filestyle " tabindex="0">
                            <label for="filestyle-8" class="btn btn-default">
                            <span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span>
                            <span class="buttonText">&nbsp;Inserir Foto</span></label></span></div>
                        </div>                        
                    </td>
                    <td style="width:50%;"><?php echo "<input class=\"form-control\" id = \"codLogin\" placeholder=\"".$matricula."\" type=\"text\" disabled>"; ?></td>
                </tr>            
            </tbody>            

            <thead>                
                <th style="background:#DCDCDC">E-mail:</th>
                <th style="background:#DCDCDC"></th>
            </thead>            

            <tbody>
                <tr>                    
                    <td colspan="2" name="emailLogin" style="width:50%;"><input type="text" class="form-control" placeholder="exemplo@exemplo.com" id="emailLogin" onblur="addAttr(this);"></td>
                </tr>
            </tbody>

            <thead>
                <th style="background:#DCDCDC">Senha:</th>
                <th style="background:#DCDCDC">Confirmar Senha:</th>
            </thead>

            <tbody>
                <tr>
                    <td id = "campoLogin"><input type="password" id = "senhaLogin" class="form-control" placeholder="123456789ABC" onblur="addAttr(this);"></td>
                    <td id = "campoLogin2"><input type="password" id = "senhaLogin1" class="form-control" placeholder="123456789ABC" onblur="validaSenha(this);"></td>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td style="width:50%;"><button type="button" style="width:100%;" class="btn btn-success" id="btnSalvar" onclick="save('aluno');">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Cadastrar</button></td>

                    <td style="width:50%;"><a href="./"  style="width:100%;" class="btn btn-danger"><i class="glyphicon glyphicon-remove">
                            </i>&nbsp;Cancelar</a></td>
                </tr>
            </tbody>

        </table>
    </div>
<div class="col-md-2"></div>
<?php include('barraCadastroAluno.php'); ?>
</div>