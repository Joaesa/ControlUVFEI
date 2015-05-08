<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menupr'); ?>

<div id="body">
	<div  class= "jumbotron"> 
		<h1 style="font-size: 50pt">Agregar Curso</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="POST" >
					<table class="table table-condensed" >
							<tr>
								<td><label for="MRC">NCR:</label></td>
								<td><input type="text"  name="NRC" id="NRC"/></td>
							</tr>
							<tr>
								<td><label for="Asignatura">Nombre de la asignatura:</label></td>
								<td><select class="form-control" id="Asignatura" name="Asignatura">
									<?php
									$querys= $this->db->get('asignatura');
										if($querys->num_rows() > 0){
											if($querys != FALSE){
												foreach ($querys ->result() as $rows){
													echo "<option value='".$rows->IDA."'>".$rows->Asignatura."</option>";	
												}
											}
										}
								    ?>
							      	</select></td>
							</tr>
							<tr>
								<td></br>
									<input class="btn btn-success btn-lg" type="submit" name="Insertar" id="Insertar" value="Insertar"/></td>
								<td></td>
							</tr>
					</table>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	<?php 
		if (isset($_POST['Insertar'])){
			    $NRC= $this->input->post('NRC');
			    $IDA= $this->input->post('Asignatura');
			    $IDM= $this->input->post('Maestro');
				$data=array(
					'NRC'=>$NRC,
					'IDA'=>$IDA,
					'IDM'=>$IDM
					);
			$this->db->where('NRC',$NRC);
			$prueba= $this->db->get('curso');
			if($prueba->num_rows() > 0){
				redirect('welcome/agcurso');
			}else{
				$this->db->insert('curso',$data);
				redirect('welcome/curso');
			}
		}
	?>