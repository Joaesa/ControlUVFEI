<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menupr'); ?>
<div id="body">
	<div  class= "jumbotron" > 
		<h1 style="font-size: 50pt; text-align:center"> Asociar Asignatura </h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form method="POST">
					<table class="table table-condensed">
						<tr>
							<td><label>Maestro&nbsp;&nbsp;:</label></td>
							<td><select class="form-control" id="IDM" name="IDM">
								<?php 
									$mas=$this->db->get('maestros');
									if($mas->num_rows() > 0){
										if($mas != FALSE){
											foreach($mas->result() as $ma){
												echo "<option value='".$ma->IDM."'>".$ma->Nombre." ".$ma->ApellidoP." ".$ma->ApellidoM."</option>";
											}
										}
									}
								?>
							</select></td>
						</tr>
						<tr>
							<td><label>Asignatura&nbsp;&nbsp;:</label></td>
							<td><select class="form-control" id="Asignatura" name="Asignatura">
								<?php 
									$asig=$this->db->get('asignatura');
									if($asig->num_rows() > 0){
										if($asig != FALSE){
											foreach($asig->result() as $asi){
												echo "<option value='".$asi->Asignatura."'>".$asi->Asignatura."</option>";
											}
										}
									}
								?>
							</select></td>
						</tr>
						<tr>
							<td><input class="btn btn-info btn-lg" type="submit" name="Asociar" id="Asociar" value="Asociar"/></td>
							<td></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
		<?php 
		if (isset($_POST['Asociar'])){
			
			$IDM=$_POST['IDM'];
			$Asignatura=$_POST['Asignatura'];
			$data=array(
				'IDM'=>$IDM,
				'Asignatura'=>$Asignatura
				);
			$this->db->where('IDM',$IDM);
			$this->db->where('IDM',$Asignatura);
			$prueba= $this->db->get('asignaturaasignada');
			if($prueba->num_rows() > 0){
				redirect('welcome/editarCurso');
			}else{
				$this->db->insert('asignaturaasignada',$data);
				redirect('welcome/tmaes');
			}
		}
	?>	