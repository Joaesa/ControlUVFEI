<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menumate'); ?>
<div id="body">
  <div style="text-align:center; background:orange; color: white;">
        <h1 style="font-size: 50pt">Asignatura</h1>
    </div>
<div class="container">
  
  <table class="table table-striped" style="text-align:center" >
           <thead>
              <tr>
                  <th style="text-align:center" ><label>IDMateria</label></th>
                  <th style="text-align:center" ><label>Asignatura</label></th>
                  <th style="text-align:center" ><label>Carrera</label></th>
                  <th style="text-align:center" ><label>Horas</label></th>
                  <th style="text-align:center" ><label>Requerimientos</label></th>
                  <th style="text-align:center" ><label>Creditos</label></th>
                  <th style="text-align:center" ><label>Eliminar</label></th>
                  <th style="text-align:center" ><label>Editar</label></th>
             </tr>
           </thead>
           <tbody>
          <tr>
           <?php 
                $query = $this->db->get('Asignatura');
                 if ($query->num_rows() > 0){
                    if( $query != FALSE ){
                        foreach ($query ->result() as $row) {
                             
                                echo "<tr>";
                                echo "<td>".$row->IDA."</td>"; 
                                echo "<td>".$row->Asignatura."</td>"; 
                                echo "<td>".$row->Carrera."</td>";
                                 echo "<td>".$row->Horas."</td>";
                                 echo "<td>".$row->Requerimiento."</td>";
                                 echo "<td>".$row->Creditos."</td>";
                                echo "<td>";
                                    echo "<a href='".base_url()."index.php/welcome/editarMaterias/".$row->IDA."' class='label label-info'>";
                                    echo "<span class='glyphicon glyphicon-pencil'></a></span>";  
                                echo "</td>";
                                echo "<td>";
                                    echo "<a href='".base_url()."index.php/welcome/eliminarMaterias/".$row->IDA."' class='label label-danger'>";
                                    echo "<span class='glyphicon glyphicon-remove'></a></span>";  
                                echo "</td>";
                                echo "</tr>"; ?>    
                       <?php } 
                    }else{
                        echo "no hay enlaces";
                    }
                }else{
                    return FALSE;
                }
            ?>
       </tbody>
     
    
  </table>
</div>
