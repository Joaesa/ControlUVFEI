<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menupr'); ?>

<div id="body">
	<div  class= "jumbotron"> 
		<h2 style="font-size: 50pt">Agregar Bloque</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="POST" >
					<table class="table table-condensed" >
							<tr>
								<td><label for="IDBloque">IDBloque:</label></td>
								<td><input type="text"  name="IDBloque" id="IDBloque"/></td>
							</tr>
							<tr>
								<td><label for="Bloque">Bloque:</label></td>
								<td><input type="text" name="Bloque" id="Bloque"></td>
							</tr>
							<tr>
								<td><label for="Seccion">Seccion:</label></td>
								<td><input type="text" name="Seccion" id="Seccion"></td>
							</tr>
							<tr>
								<?php 
        							$query = $this->db->get('bloques');        						
        							if ($query->num_rows() > 0) {
        								foreach ($query  as $result) {        								        								
        									$bloques = "<option value='".$result['Carrera'].">"."</option>";
        								}
        							}
        						?>
								<td><select name="Carrera"></td>
								<?php echo $bloques; ?>
								</select>
							</tr>
							<tr>
								<td><label for="NRC">NRC</label></td>
								<td><input type="text" name="NRC" id="NRC"></td>
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
				$min_bloque=3;
				$max_bloque=6;
			    $IDBloque= $this->input->post('IDBloque');
			    $Bloque= $this->input->post('Bloque');
			    $Seccion= $this->input->post('Seccion');
			    $Carrera=$this->input->post('Carrera');
			    $NRC=$this->input->post('NRC');
				$data=array(
					'IDBloque'=>$IDBloque,					
						'Bloque'=>$Bloque,					
						'Seccion'=>$Seccion,
						'Carrera'=>$Carrera,					
					'NRC'=>$NRC,
					);				
			$this->db->where('IDBloque',$IDBloque);
			$prueba= $this->db->get('bloques');

			if($prueba->num_rows() > 0){
				redirect('welcome/agbloque');
			}else{
				$this->db->insert('bloques',$data);
				redirect('welcome/Tbloque');							
			}
		}
	?>