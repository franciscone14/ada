<?php 

$diciplina = array('Banco de Dados','Projeto de Sistemas','Gestão e Empredendorismo','Aplicações Para Web II','Linguagem de Programação');
$semestre1 = array('50','50','50','50','50');
$semestre2 = array('50','50','50','50','50');

$soma = array('100','100','100','100','100');
$aluno = 'Anna Paula';
$situacao = array('Aprovado','Aprovado','Aprovado','Aprovado','Aprovado');
$faltas = array('1','0','5','2','1');
$ano = array('2013','2014','2015','2016');
$matricula = '201415TIISUB0084';
$totalfaltas = array('4','0','20','8','4');
?>
<div style="margin-top:-35px; width:100%;" class="img-thumbnail">	
	<div style="padding:0%;" class="panel panel-primary">	  
		<div class="panel-heading">Boletim</div>
		  	<div class="panel-body">
				 <label style="margin-left:16px;" class="col-md-offset-0 col-md-2 col-xs-12 col-xs-offset-1">
				 Aluno(a):&nbsp;<?php echo "$aluno"; ?></label>


					 <label class="col-md-0 col-xs-0 col-xs-offset-3 col-md-offset-0">Ano:</label>
					 <div style="margin-top:-5px; width:140px;" class="col-md-1 col-md-offset-0 col-xs-7">
					 <select class="form-control" id="ano">
	                            <?php
	                            for ($i = 0; $i < count($ano); $i++) { 
	                                echo "<option>$ano[$i]</option>";
	                            }?></select>                                                
	         		 </div>

					 <label class="col-md-1 col-md-offset-5 col-xs-11 col-xs-offset-1">
					 Matricula:&nbsp;&nbsp;<?php echo "$matricula"; ?></label>
	 		</div>

	 <!-- Table -->
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<th style="width:40%;"class="bg-primary">Diciplinas:</th>
			<th style="width:1%;" class="bg-primary">1°S:</th>
			<th style="width:1%;" class="bg-primary">N.F:</th>
			<th style="width:1%;" class="bg-primary">2°S:</th>
			<th style="width:1%;" class="bg-primary">N.F:</th>			
			<th style="width:3%;" class="bg-primary">Situação:</th>
			<th style="width:3%;" class="bg-primary">T.F:</th>
			<th style="width:5%;" class="bg-primary">Soma:</th>
		</thead>

		<tbody>
			<?php 
				for ($i=0; $i < count($diciplina); $i++) { 

						echo "<tr>";
						echo "<td>".$diciplina[$i]."</td>";
						echo "<td>".$semestre1[$i]."</td>";
						echo "<td>".$faltas[$i]."</td>";
						echo "<td>".$semestre2[$i]."</td>";
						echo "<td>".$faltas[$i]."</td>";						
						echo "<td>".$situacao[$i]."</td>";
						echo "<td>".$totalfaltas[$i]."</td>";
						echo "<td>".$soma[$i]."</td>";
						echo "</tr>";

														 }
		    ?>
		</tbody>


			</table>			
		</div>
	</div>
</div>