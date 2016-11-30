<?php
	$professor1 = 'Maria Alessandra Mendonça';
	$professor2 = 'Otavio Narvais';
?>
<div style="margin-top:-10px; width:100%;" class="img-thumbnail">
	<div style="padding:0%;" class="col-md-8 col-sm-6 col-xs-offfset-0 col-xs-12 col-md-offset-2 panel panel-primary">
		<div class="panel-heading"><center>Forum Professor</center></div>

		<div style="margin-top:2%;"><?php echo "Professor(a): $professor1"; ?></div>
		<div class="thumbnail">
			Otavio, o aluno dexter esta participando das suas aulas?  
			<input style="margin-top:27px;" type="button" class="btn btn-success btn-xs buttonForum" value="Responder"/>
		</div>
		
		<div style="margin-top:5%;"><?php echo "Professor(a): $professor2"; ?></div>
		<div class="thumbnail">
			A duas semanas que ele não participa da minha aula.
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

