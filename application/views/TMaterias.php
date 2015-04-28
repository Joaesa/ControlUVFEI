<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menumate'); ?>
<div id="body">
<div class="container">
  <h1>Asignaturas  Solo Consultas no hay que agregar ni editar ni eliminar AEE</h1>
  <table class="table table-striped" style="text-align:center" >
           <thead>
              <tr>
                  <th style="text-align:center" >NCR:</th>
                  <th style="text-align:center" >Asignatura:</th>
                  <th style="text-align:center" >Carrera:</th>
                  <th style="text-align:center" >Horas</th>
                  <th style="text-align:center" >Eliminar</th>
                  <th style="text-align:center" >Editar</th>
             </tr>
           </thead>
           <tbody>
     
     <tr>
          <td>DJFJDF</td>
          <td>Matematicas</td>
          <td>Informatica</td>
          <td>7-9 11-13 13-15</td>
         <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal1-sm">Eliminar</button>
          </td>
         <td> <button type="button" class="btn btn-info">Editar</button></td>
        </tr>  
        <tr>
          <td>FJGKKS</td>
          <td>Ingles</td>
          <td>Informatica</td>
          <td>7-9 11-13 13-15</td>
           <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal1-sm">Eliminar</button>
          </td>
         <td> <button type="button" class="btn btn-info">Editar</button></td>
        </tr>
        <tr>
          <td>JDJFE</td>
          <td>Logica</td>
          <td>Informatica</td>
          <td>7-9 11-13 13-15</td>
          <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal1-sm">Eliminar</button>
          </td>
         <td> <button type="button" class="btn btn-info">Editar</button></td>
        </tr>
  </tbody>
  </table>




     <div class="modal fade bs-example-modal1-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="input-group"> 
                    <span class="input-group-addon" id="basic-addon1"></span>
                </div>
     <div class="input-group">
           <label>Desea eliminar el registro:</label>
           <br>
          <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">SI</button>
          <button type="submit" class="btn btn-default">No</button>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
</div>
