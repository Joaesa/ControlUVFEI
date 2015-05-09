<div  class= "jumbotron" style="text-align:center; background:orange; color: white;" > 
		<h1 style="font-size: 50pt">Asignatura Asignada</h1>
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<table class="table table-striped" style="text-align:center" >
			<thead>
				<tr>
					<th style="text-align:center" ><label>Asignaturas</label></th>
					<th style="text-align:center" ><label>Eliminar</label></th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$this->db->where('IDM',$IDM);
				$query=$this->db->get('asignaturaasignada');
				if($query->num_rows() > 0){
					if($query != FALSE){
						foreach($query->result() as $row){
							echo "<tr>";
							echo "<td>".$row->Asignatura."</td>";
							echo "<td>";
                                echo "<a href='".base_url()."index.php/welcome/eliminarAsig/".$row->IDAsignatura."' class='label label-danger'>";
                                echo "<span class='glyphicon glyphicon-remove'></a></span>";  
                            echo "</td>";
							echo"</tr>";
						}
					}
				}else{
					echo "<td> No tiene ninguna Materia Asignada </td> <td></td>";
				}
			?>
			</tbody>
		</table>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<br></br>