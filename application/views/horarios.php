<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menupr'); ?>

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
												echo "<option value'=".$rows->materia."'>";
											}
										}
									}
								?>
						</tr>
					</table>
				</form>				
			</div>
	<div class="row">
		<div class="col-md-2"></div>
			<form method="POST">
				<table class ="table table-condend">
					<td><label form="horarios">7:00-8:00</label></td>
					<td><label form="horarios">8:00-9:00</label></td>
					<td><label form="horarios">9:00-10:00</label></td>
					<td><label form="horarios">10:00-11:00</label></td>
					<td><label form="horarios">11:00-12:00</label></td>
					<td><label form="horarios">12:00-13:00</label></td>
					<td><label form="horarios">13:00-14:00</label></td>
					<td><label form="horarios">14:00-15:00</label></td>
					<td><label form="horarios">15:00-16:00</label></td>
					<td><label form="horarios">16:00-17:00</label></td>
					<td><label form="horarios">17:00-18:00</label></td>
					<td><label form="horarios">18:00-19:00</label></td>
					<td><label form="horarios">19:00-20:00</label></td>
				</table>
			</form>
	</div>