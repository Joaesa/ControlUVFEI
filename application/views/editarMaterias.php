<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menupr'); ?>
<div id="body">
	<div  class= "jumbotron"> 
		<h1 style="font-size: 50pt">Actualizacion de Asignaturas</h1>
	</div>
	<div class="container">
		
		<form method="POST">
			<table class="table table-hover" >
				<tr>
					<td><label for="Asignatura">Nombre de la Asignatura :</label></td>
					<td><input type="text"  name="Asignatura" id="Asignatura" value="<?php echo $Asignatura;?>"/></td>
				</tr>
				<tr>
					<td><label for="Carrera">Carrera:</label></td>
					<td>
						<select class="form-control" name="Carrera" id="Carrera">
						<?php echo "<option value='".$Carrera."'>".$Carrera."</option>" ?>
						<?php 
									$mas=$this->db->get('carrera');
									if($mas->num_rows() > 0){
										if($mas != FALSE){
											foreach($mas->result() as $ma){
												if($ma->Carrera != $Carrera){
													echo "<option value='".$ma->Carrera."'>".$ma->Carrera."</option>";
												}
											}
										}
									}
								?>
						</select></td>
				</tr>
				<tr>
					<td><label for="Horas">Horas:</label></td>
					<td><input type="text"  name="Horas" id="Horas" value="<?php echo $Horas;?>"/></td>
				</tr>
				<tr>
					<td><label for="Requerimiento">Requerimientos:</label></td>
					<td><input type="text"  name="Requerimiento" id="Requerimiento" value="<?php echo $Requerimiento;?>"/></td>
				</tr>
				<tr>
					<td><label for="Creditos">Creditos:</label></td>
					<td><input type="text"  name="Creditos" id="Creditos" value="<?php echo $Creditos;?>"/></td>
				</tr>
				<tr>
					<td></br>
						<input class="btn btn-success btn-lg" type="submit" name="Editar" id="Editar" value="Editar"/></td>
				</tr>
			</table>
		</form>
	</div>
	<?php 
		if (isset($_POST['Editar'])){
			$Asignatura=$_POST['Asignatura'];
			$Carrera=$_POST['Carrera'];
			$Horas=$_POST['Horas'];
			$Requerimiento=$_POST['Requerimiento'];
			$Creditos=$_POST['Creditos'];
			$data=array(
				'Asignatura'=>$Asignatura,
				'Carrera'=>$Carrera,
				'Horas'=>$Horas,
				'Requerimiento'=>$Requerimiento,
				'Creditos'=>$Creditos,
				);
			$this->db->where('IDA',$IDA);
			$this->db->update('Asignatura',$data);
			redirect('welcome/tmaterias');
		}
	?>	