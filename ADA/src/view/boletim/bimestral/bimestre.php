<?php 

$diciplina = array('Banco de Dados','Projeto de Sistemas','Gestão e Empredendorismo','Aplicações Para Web II','Linguagem de Programação');
$bimestre1 = array('20','20','20','20','20');
$bimestre2 = array('30','30','30','30','30');
$bimestre3 = array('20','20','20','20','20');
$bimestre4 = array('30','30','30','30','30');
$soma = array('100','100','100','100','100');
$aluno = 'Túlio César Sanches';
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
			<th style="width:1%; text-align:center;" class="bg-primary">1°B:</th>
			<th style="width:1%; text-align:center;" class="bg-primary">N.F:</th>
			<th style="width:1%; text-align:center;" class="bg-primary">2°B:</th>
			<th style="width:1%; text-align:center;" class="bg-primary">N.F:</th>
			<th style="width:1%; text-align:center;" class="bg-primary">3°B:</th>
			<th style="width:1%; text-align:center;" class="bg-primary">N.F:</th>
			<th style="width:1%; text-align:center;" class="bg-primary">4°B:</th>
			<th style="width:1%; text-align:center;" class="bg-primary">N.F:</th>
			<th style="width:3%; text-align:center;" class="bg-primary">Situação:</th>
			<th style="width:3%; text-align:center;" class="bg-primary">T.F:</th>
			<th style="width:5%; text-align:center;" class="bg-primary">Soma:</th>
		</thead>

		<tbody>
			<?php 
				for ($i=0; $i < count($diciplina); $i++) { 

						echo "<tr>";
						echo "<td><a data-toggle=\"modal\" data-target=\".bs-example-modal-lg\" style=\"text-decoration:none;\" href=\"#\">".$diciplina[$i]."</a></td>";					    
						
						echo "<td style=\"text-align:center;\">".$bimestre1[$i]."</td>";
						echo "<td style=\"text-align:center;\">".$faltas[$i]."</td>";
						echo "<td style=\"text-align:center;\">".$bimestre2[$i]."</td>";
						echo "<td>".$faltas[$i]."</td>";
						echo "<td style=\"text-align:center;\">".$bimestre3[$i]."</td>";
						echo "<td style=\"text-align:center;\">".$faltas[$i]."</td>";
						echo "<td style=\"text-align:center;\">".$bimestre4[$i]."</td>";
						echo "<td style=\"text-align:center;\">".$faltas[$i]."</td>";
						echo "<td style=\"text-align:center;\">".$situacao[$i]."</td>";
						echo "<td style=\"text-align:center;\">".$totalfaltas[$i]."</td>";
						echo "<td style=\"text-align:center;\">".$soma[$i]."</td>";
						echo "</tr>";

					}
		    ?>
		   <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		          <h4 class="modal-title" id="myLargeModalLabel">Graficos de Desenpenho</h4>
		        </div>
		        <div class="modal-body">
		         <?php include('graficos.php');?>
		        </div>
		      </div>
			  </div>
			</div>
		</tbody>


			</table>			
		</div>
	</div>
</div>