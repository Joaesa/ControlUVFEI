<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menumate'); ?>
<div id="body">
<div style="text-align:center; background:orange; color: white;">
        <h1 style="font-size: 50pt">Salones</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <table class="table table-striped" style="text-align:center" >   
           <thead>
              <tr>
                <th>Carreras :</th>
               
              </tr>
           </thead>
           <tbody>
              
                  <?php $query =$this->db->get('Carrera');
                      if($query->num_rows() >0){
                        if($query != FALSE){
                          foreach ($query->result() as $row) {
                          	echo "<tr><td>";
                            echo $row->Carrera;
                            echo "</td>";
                            echo "<td>";
                                echo "<a href='".base_url()."index.php/welcome/eliminarSal/".$row->IDC."' class='label label-danger'>";
                                echo "<span class='glyphicon glyphicon-remove'></a></span>";  
                            echo "</td></tr>";
                          }
                        }
                      }else{
                        echo "no hay salones";
                      }
                  ?>
                <td></td>

           </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <form method="POST">
        <table class="table table-striped" style="text-align:center">
          <thead>
            <tr>
              <th>Registro de Carreras</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><label for="Carrera" >Carrera :</label></td>
              <td><input type="text"  name="Carrera" id="Carrera"/></td>
            </tr>
          </tbody>
        </table>  
        <input class="btn btn-success btn-lg" type="submit" name="Insertar" id="Insertar" value="Insertar"/>
      </form>
    </div>
  </div>
</div>
<?php 
    if (isset($_POST['Insertar'])){
          $Salon= $this->input->post('Carrera');
          
        $data=array(
          'Carrera'=>$Salon,
          );
      $this->db->where('Carrera',$Salon);
      $prueba= $this->db->get('Carrera');
      if($prueba->num_rows() > 0){
        redirect('welcome/agCarrera');
      }else{
        $this->db->insert('Carrera',$data);
        redirect('welcome/agCarrera');
      }
    }
  ?>  