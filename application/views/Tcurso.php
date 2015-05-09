<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menucurso'); ?>

<div id="body">
	<div style="text-align:center; background:orange; color: white;"  > 
		<h1 style="font-size: 50pt">Cursos</h1>
	</div>
<div class='container' style='background-color:'>
	<div id="iframes">
	<table class="table table-striped" style="text-align:center">
		<thead >
			<tr>
				<th style="text-align:center"><label>NCR</label></th>
				<th style="text-align:center"><label>Asignatura</label></th>
				<th style="text-align:center"><label>Carrera</label></th>
				<th style="text-align:center"><label>Nombre Del Maestro Asignado</label></th>
				<th style="text-align:center"><label>Editar</label></th>
				<th style="text-align:center"><label>Eliminar</label></th>
			</tr>
		</thead>
		<tbody>
				<?php 
				$query= $this->db->get('curso');
				if($query->num_rows() > 0){
					if($query != FALSE){
						foreach ($query ->result() as $row){
							echo "<tr>";
							echo "<td>".$row->NRC."</td>";
							$this->db->where('IDA',$row->IDA);
							$querys= $this->db->get('asignatura');
							if($querys->num_rows() == 1){
								foreach ($querys ->result() as $rows){
									echo "<td>".$rows->Asignatura."</td>";
									echo "<td>".$rows->Carrera."</td>";	
								}
							}
							$this->db->where('IDM',$row->IDM);
							$queryc= $this->db->get('maestros');
							if($queryc->num_rows() == 1){
								foreach ($queryc ->result() as $rowc){
									echo "<td>".$rowc->Nombre." ".$rowc->ApellidoP." ".$rowc->ApellidoM."</td>";	
								}
							}else{
								echo "<td>No hay maestro para esta ".$row->NRC."</td>";
							}
							echo "<td><a href='".base_url()."index.php/welcome/editarCurso/".$row->NRC."' class='label label-info'><span class='glyphicon glyphicon-pencil'></a></span></td>";
							echo "<td><a href='".base_url()."index.php/welcome/eliminarCurso/".$row->NRC."' class='label label-danger'><span class='glyphicon glyphicon-remove'></a></span></td>";
							echo "</tr>";
						}
					}
				}

				?>				
		</tbody>
	</table>
	</div>
</div>