<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menumate'); ?>
<div id="body">
<div style="text-align:center; background:orange; color: white;">
        <h1 style="font-size: 50pt">Salones</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div id="iframes">
      <table class="table table-striped" style="text-align:center" >   
           <thead>
              <tr>
                <th>Aulas :</th>
               
              </tr>
           </thead>
           <tbody>
              
                  <?php $query =$this->db->get('Salon');
                      if($query->num_rows() >0){
                        if($query != FALSE){
                          foreach ($query->result() as $row) {
                            echo "<tr>
                                  <td>".$row->Salón."</td>";

                                echo "<td>";
                                echo "<a href='".base_url()."index.php/welcome/eliminarS/".$row->IDS."' class='label label-danger'>";
                                echo "<span class='glyphicon glyphicon-remove'></a></span></td></tr>";
                          }
                        }
                      }else{
                        echo "no hay salones";
                      }
                  ?>
                
           </tbody>
      </table>
      </div>
    </div>
    <div class="col-md-6">
      <form method="POST">
        <table class="table table-striped" style="text-align:center">
          <thead>
            <tr>
              <th>Registro de Aulas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><label for="Salon" >Aula :</label></td>
              <td><input type="text"  name="Salon" id="Salon"/></td>
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
          $Salon= $this->input->post('Salon');
          
        $data=array(
          'Salón'=>$Salon,
          );
      $this->db->where('Salón',$Salon);
      $prueba= $this->db->get('Salon');
      if($prueba->num_rows() > 0){
        redirect('welcome/agasali');
      }else{
        $this->db->insert('Salon',$data);
        redirect('welcome/agasal');
      }
    }
  ?>  