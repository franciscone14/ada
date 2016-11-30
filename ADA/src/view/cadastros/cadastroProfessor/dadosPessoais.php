<?php

?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail"> 
<div class="col-md-2"></div>
	<div style="padding:0%;" class="col-md-8 col-sm-6 col-xs-12 panel panel-primary">
		<div class="panel-heading"><center><span id="tituloForm">Cadastro</span>Professor</center></div>
	      	<table class="table table-striped">


	      		 	<thead>
					    <th style="background:#DCDCDC" colspan="2">Nome Completo:</th>
					</thead>

						<tbody>
							<tr>
								<td style="width:50%;" colspan="2"><input type="text" id="nomeUser" class="form-control" placeholder="Nome" onblur="addAttr(this);"></td>
							</tr>
						</tbody>

					<thead>
					    <th style="background:#DCDCDC">CPF:</th>
					    <th style="background:#DCDCDC">RG:</th>
					</thead>

						<tbody>
							<tr>
								<td style="width:50%;"><input type="text" id="cpfUser" class="form-control" placeholder="CPF" onblur="addAttr(this);"></td>
								<td style="width:50%;"><input type="text" id="rgUser" class="form-control" placeholder="RG" onblur="addAttr(this);"></td>
							</tr>
						</tbody>

					<thead>
					    <th style="background:#DCDCDC">Telefone Fixo:</th>
					    <th style="background:#DCDCDC">Celular:</th>
					</thead>

						<tbody>
							<tr>
								<td style="width:50%;"><input type="text" id="foneUser" class="form-control" placeholder="(DDD) 0000-0000" onblur="addAttr(this);"></td>
								<td style="width:50%;"><input type="text" id="celularUser" class="form-control" placeholder="(DDD) 0000-0000" onblur="addAttr(this);"></td>
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
<?php include('barraCadastroProfessor.php');?>
</div>






