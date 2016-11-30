<?php
	$professor1 = 'Maria Alessandra Mendonça';
	$aluno = 'Túlio César Sanches';
?>
<div style="margin-top:-10px; width:100%;" class="img-thumbnail">
	<div style="padding:0%;" class="col-md-8 col-sm-6 col-xs-offfset-0 col-xs-12 col-md-offset-2 panel panel-primary">
		<div class="panel-heading"><center>Forum Aluno</center></div>

		<div style="margin-top:2%;"><?php echo "Aluno(a): $aluno"; ?></div>
		<div class="thumbnail">
			Gostaria de saber o que foi passado na aula de fisica dia 25/04/2014, tive que faltar para ir ao medico fazer isame? 
			<input style="margin-top:27px;" type="button" class="btn btn-success btn-xs buttonForum" value="Responder"/>
		</div>
		
		<div style="margin-top:5%;"><?php echo "Professor(a): $professor1"; ?></div>
		<div class="thumbnail">
			A materia passada foi sobre seno, coseno e tangente, vou te mandar a materia no sistema para poder estudar.
			<input style="margin-top:27px;" type="button" class="btn btn-success btn-xs buttonForum" value="Responder"/>
		</div>
	     
	     <div class="panel-body">
	     	<textarea style="margin-top:100px;" class="form-control" rows="5"></textarea>
	     </div>

	    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
	    
				<a href="#" class="btn btn-success" role="button">
				<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Enviar</a>

				<a href="#" class="btn btn-info" role="button">
				<span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>&nbsp;Anexar Imagem</a>

				<a href="#" class="btn btn-primary" role="button">0 - 500 Caracteres</a>
		</div>
		


	</div>

</div>

