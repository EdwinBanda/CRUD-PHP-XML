<div class="modal fade" id="edit_<?php echo $row->id; ?>"
 tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar paciente</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id" value="<?php echo $row->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nome:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nome" value="<?php echo $row->nome; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Sobrenome:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sobrenome" value="<?php echo $row->sobrenome; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Data de nascimento:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="datan" value="<?php echo $row->datan; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Endereco:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="endereco" value="<?php echo $row->endereco; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Contacto:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contacto" value="<?php echo $row->contacto; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success">
					<span class="glyphicon glyphicon-check"></span> Atualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row->id; ?>" 
tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Remover paciente</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Tem certeza que quer remover o paciente?</p>
				<h2 class="text-center"><?php echo $row->nome.' '.$row->sobrenome; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="delete.php?id=<?php echo $row->id; ?>" class="btn btn-danger">
				<span class="glyphicon glyphicon-trash"></span> Sim</a>
            </div>

        </div>
    </div>
</div>