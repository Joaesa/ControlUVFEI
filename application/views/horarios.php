<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menuHorario'); ?>
<div id="body">

<div class ="jumbotron" style="color:#FFFFFF; background-color:#6EE768; text-align:center">
	<h1 style="font-size: 50pt"> Horario</h1>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Horario</h2>
		</div>
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Lunes</h2>
		</div>
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Martes</h2>
		</div>
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Miercoles</h2>
		</div>
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Jueves</h2>
		</div>
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Viernes</h2>
		</div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-1">
				<form method="POST">
					<table class="table table-condensed" >
						<tr>
							<td><label form= "materia"> Materia </label></td>
							<td><select class="form-control" id="materia" name="materia">
								<?php
									$query=$this->$this->$db->$get('materia');
									if ($query->$num_rows()>0){
										if ($query!=FALSE){
											foreach ($query->$result() as $rows) {
												echo "<option value='".$rows->materia."'>";
											}
										}
									}

								?>
							</select></td>
						</tr>
					</table>
				</form>
			</div>
	</div>
</div>