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
                <th>Salones</th>
               
              </tr>
           </thead>
           <tbody>
              <tr>
                <td> 
                  <?php $query =$this->db->get('Salon');
                      if($query->num_row() >0){
                        if($query != FALSE){
                          foreach ($query->result() as $row) {
                            echo $row->salon;
                          }
                        }
                      }
                  ?>
                </td>
              </tr>
           </tbody>
      </table>
    </div>
    <div class="col-md-6">

    </div>
  </div>
</div>