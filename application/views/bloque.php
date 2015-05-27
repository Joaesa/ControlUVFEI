<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menubloque'); ?>

<div id="body">
  <div style="text-align:center; background:black; color: white;"  > 
    <h1 style="font-size: 30pt">Bloques</h1>
  </div>
<div class='container' style='background-color:'>
  <div id="iframes">
  <table class="table table-condensed" style="text-align:center">
    <thead >
      <tr>
        <th style="text-align:center"><label>IDBloque</label></th>
        <th style="text-align:center"><label>Bloque</label></th>
        <th style="text-align:center"><label>Seccion</label></th>        
        <th style="text-align:center"><label>NRC</label></th>        
      </tr>
    </thead>
    <tbody>
        <?php 
        $query= $this->db->get('bloques');

        if($query->num_rows() > 0){
          if($query != FALSE){
            foreach ($query ->result() as $row){
              echo "<tr>";              
              echo "<td>".$row->IDBloque."</td>";            
              $this->db->where('NRC',$row->NRC);
              $queryc= $this->db->get('bloques');
              if($queryc->num_rows() == 1){
                foreach ($queryc ->result() as $rows){
                  echo "<td>".$rows->Bloque."</td>";
                  echo "<td>".$rows->Seccion."</td>"; 
                        
                }
                $this->db->where('NRC',$row->NRC);
                $queryn= $this->db->get('curso');
                if($queryn->num_rows() > 0){
                foreach ($queryn  as $rown){
                  echo "<td>".$rown->NRC."</td>";  
                }
              }
              }
              echo "<td><a href='".base_url()."index.php/welcome/editarBloque/".$row->IDBloque."' class='label label-info'><span class='glyphicon glyphicon-pencil'></a></span></td>";
              echo "<td><a href='".base_url()."index.php/welcome/eliminarBloque/".$row->IDBloque."' class='label label-danger'><span class='glyphicon glyphicon-remove'></a></span></td>";
              echo "</tr>";
            }
          }
        }
      ?>
      </tbody>
  </table>
  <div class="col-md-6">
        <div id="iframe">
          <table class="table table-hover">
            <thead>
                    <tr>
                        <th style="text-align:center" >Bloque</th>
                        <th style="text-align:center" >NRC</th>
                        <th style="text-align:center" >Asignatura</th>
                        <th style="text-align:center" >Horario</th>
                   </tr>
                </thead>
                <tbody>
              <?php
              $query= $this->db->get('bloques');
              if($query->num_rows() > 0){
                if($query != FALSE){
                  foreach ($query ->result() as $row){
                    echo "<tr>";
                    echo "<td>".$row->Bloque."</td>";
                    echo "<td>".$row->NRC."</td>";
                    echo "<td>";

                    $NRC= $row->NRC;
                    $this->db->where('NRC',$NRC);
                    $quer= $this->db->get('curso');
                    if($quer->num_rows() > 0){
                      if($quer != FALSE){
                        foreach($quer->result() as $rows){
                          echo "".$rows->IDA."</br> ";

                          $IDA = $row1->IDA;
                          $this->db->where('IDA',$IDA);
                          $quera = $this->db->get('asignatura');
                          if($quera->num_rows() > 0){
                            if($quera != FALSE){
                              foreach ($quera->result() as $rowss) {
                                echo"".$rowss->Asignatura."</br>";

                                $IDAS = $row2->IDA;
                                $this->db->where('NCR',$IDAS);
                                $query2 = $this->db->get('horario');
                                if ($query2->num_rows()> 0) {
                                  if($query2 != FALSE){
                                    foreach ($query2->result() as $row3) {
                                      echo"".$row3->Dia."</br>";
                                    }
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }                    
                }
                echo "</td>";
                echo "</tr>";
              }                                
            ?>
            </tbody>
          </table>
        </div>
      </div>
</div>