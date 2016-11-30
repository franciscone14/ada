<?php
?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">   
<div class="col-md-2"></div>
	<div style="padding:0%;" class="col-md-8 col-sm-12 col-xs-12 panel panel-primary">
		<div class="panel-heading"><center><span id="tituloForm">Cadastro</span><span>Aluno</span></center></div>
	      	<table class="table table-striped">

					        <thead>
					            <th style="background:#DCDCDC">Nome Completo:</th>
					            <th style="background:#DCDCDC"></th>
					        </thead>

					        	<tbody>
						            <tr>
						                <td colspan = "2"><input type="text" id="nomeUser" class="form-control" placeholder="Nome" onblur="addAttr(this);"></td>
						            </tr>
				        		</tbody>

					        <thead>
					            <th style="background:#DCDCDC">CPF:</th>
					            <th style="background:#DCDCDC">RG:</th>
					        </thead>

					        	<tbody>
						            <tr>
						                <td><input type="text" id="cpfUser" class="form-control" placeholder="CPF" onblur="addAttr(this);"></td>
						                <td><input type="text" id="rgUser" class="form-control" placeholder="Identidade" onblur="addAttr(this);"></td>
						            </tr>
				        		</tbody>

					        <thead>
					            <th style="background:#DCDCDC">Nome do Pai:</th>
					            <th style="background:#DCDCDC">Nome da Mãe:</th>
					        </thead>

					        	<tbody>
						            <tr>
						                <td><input type="text" id="nomePaiAluno" class="form-control" placeholder="Nome do Pai" onblur="addAttr(this);"></td>
						                <td><input type="text" id="nomeMaeAluno" class="form-control" placeholder="Nome da Mãe" onblur="addAttr(this);"></td>
						            </tr>
				        		</tbody>

					        <thead>
					            <th style="background:#DCDCDC">Telefone Fixo:</th>
					            <th style="background:#DCDCDC">Celular:</th>
					        </thead>

					        	<tbody>
						            <tr>
						                <td><input type="text" id="foneUser" class="form-control" placeholder="Telefone Fixo" onblur="addAttr(this);"></td>
						                <td><input type="text" id="celularUser" class="form-control" placeholder="Celular" onblur="addAttr(this);"></td>
						            </tr>
				        		</tbody>

					        <thead>
					            <th style="background:#DCDCDC">Data de Nascimento:</th>
					            <th style="background:#DCDCDC">Sexo:</th>
					        </thead>

					        	<tbody>
						            <tr>
						                <td><input type="date" id="dataNascUser" class="form-control" placeholder="DD/MM/AAAA" onblur="addAttr(this);"></td>
						                <td><input type="radio" id="sexoUser" value="M" onblur="addAttr(this);">&nbsp;Masculino
										<input type="radio" id="sexoUser" value="F" onblur="addAttr(this);">&nbsp;Feminino</td>
						            </tr>
				        		</tbody>		        		

    		</table>    		
	</div>
	<div class="col-md-2"></div>
	<div class="col-md-12 col-sm-12 col-xs-12"><?php include('barraCadastroAluno.php');?></div>
</div>

