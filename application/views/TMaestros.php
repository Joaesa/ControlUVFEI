<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menumaes'); ?>
<div id="body">
    <div style="text-align:center; background:orange; color: white;">
        <h1 style="font-size: 50pt">Maestros y Asignacion De Materias</h1>
    </div>
<div class="container">
    
    <div id="iframes">
        <table class="table table-striped" style="text-align:center" >
        <thead>
            <tr>
                <th style="text-align:center" ><label> Numero</label></th>
                <th style="text-align:center" ><label> Nombre Del Maestro</label></th>
                <th style="text-align:center" ><label> Materias Asignadas </label></th>
                <th style="text-align:center" ><label> Editar</label></th>
                <th style="text-align:center" ><label> Eliminar</label></th>
           </tr>
         </thead>
         <tbody>
           <?php 
                $query = $this->db->get('Maestros');
                 if ($query->num_rows() > 0){
                    if( $query != FALSE ){
                        foreach ($query ->result() as $row) {
                             
                                echo "<tr>";
                                echo "<td>".$row->IDM."</td>"; 
                                echo "<td>".$row->Nombre." ".$row->ApellidoP." ".$row->ApellidoM."</td>"; 
                                echo "<td>";
                                $IDM= $row->IDM;
                                $this->db->where('IDM',$IDM);
                                $quer= $this->db->get('asignaturaasignada');
                                if($quer->num_rows() > 0){
                                    if($quer != FALSE){
                                        foreach($quer->result() as $rows){
                                            echo "".$rows->Asignatura."</br>";
                                        }
                                    }
                                }         
                                echo "</td>";     
                                echo "<td>";
                                    echo "<a href='".base_url()."index.php/welcome/editarMaestro/".$row->IDM."' class='label label-info'>";
                                    echo "<span class='glyphicon glyphicon-pencil'></a></span>";  
                                echo "</td>";
                                echo "<td>";
                                    echo "<a href='".base_url()."index.php/welcome/eliminarMaestro/".$row->IDM."' class='label label-danger'>";
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
            <br></br>
        </div>
</div>