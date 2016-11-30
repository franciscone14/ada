><?php

?>
<div style="margin-top:-55px; width:100%;" class="img-thumbnail">
<div class="col-md-2"></div>
    <div style="padding:0%;" class="col-md-8 col-sm-12 col-xs-12 panel panel-primary">
        <div class="panel-heading"><center>Cadastro Instituição</center></div>
        <table class="table table-striped">

			<thead>
				<th style="background:#DCDCDC">Nome Instituição:</th>
				<th style="background:#DCDCDC">CNPJ:</th>
				<th style="background:#DCDCDC">E-Mail:</th>
			</thead>

			<tbody>
				<tr>
					<td style="width:33%;"><input type="text" id="nomeInst" class="form-control" placeholder="Nome Instituiçao" onblur="addAttr(this);"></td>
					<td style="width:30%;"><input type="text" id="cnpjInst" class="form-control" placeholder="00.000.000/0000-00" onblur="addAttr(this);"></td>
					<td style="width:33%;"><input type="text" id="emailInst" class="form-control" placeholder="exemplo@exemplo.com" onblur="addAttr(this);"></td>
				</tr>
			</tbody>

			<thead>
				<th style="background:#DCDCDC">Facebook:</th>
				<th style="background:#DCDCDC">Twitter:</th>
				<th style="background:#DCDCDC">Instagram:</th>
			</thead>

			<tbody>
				<tr>
					<td style="width:33%;"><input type="text" id="facebookInst" class="form-control" placeholder="exemplo@exemplo.com" onblur="addAttr(this);"/></td>
					<td style="width:30%;"><input type="text" id="twitterInst" class="form-control" placeholder="exemplo@exemplo.com" onblur="addAttr(this);"/></td>
					<td style="width:33%;"><input type="text" id="instagramInst" class="form-control" placeholder="exemplo@exemplo.com" onblur="addAttr(this);"/></td>
				</tr>
			</tbody>

			<thead>
				<th style="background:#DCDCDC">Telefone Fixo:</th>
				<th style="background:#DCDCDC">Celular:</th>
				<th style="background:#DCDCDC">Modelo Boletim:</th>
			</thead>

			<tbody>
				<tr>
					<td style="width:33%;"><input type="text" id="foneInst" class="form-control" placeholder="(DDD) 0000-000" onblur="addAttr(this);"/></td>
					<td style="width:30%;"><input type="text" id="celularInst" class="form-control" placeholder="(DDD) 0000-000" onblur="addAttr(this);"/></td>
					<td style="width:33%;">
						<select class="form-control" id="modeloBoletimInst" onblur="addAttr(this);">
							<option value="1">Bimestral</option>
							<option value="11">Trimestral</option>
							<option value="111">Semestral</option>
						</select>
					</td>
				</tr>
			</tbody>

		</table>

            </div>
        <div class="col-md-2"></div>
    <?php include('barracadastroInstituicao.php'); ?>
</div>