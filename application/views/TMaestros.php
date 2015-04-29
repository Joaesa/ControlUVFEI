<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menumaes'); ?>
<div id="body">
<div class="container">
<h1>Maestros</h1>
<table class="table table-striped" style="text-align:center" >
         <thead>
            <tr>
                <th style="text-align:center" >Nombre:</th>
                <th style="text-align:center" >Apellido Paterno:</th>
                <th style="text-align:center" >Apellido Materno:</th>
                <th style="text-align:center" >Carrera</th>
                <th style="text-align:center" >Horas</th>
                <th style="text-align:center" >Eliminar</th>
                <th style="text-align:center" >Editar</th>
           </tr>
         </thead>
         <tbody>
   
   <tr>
        <td>Freddy </td>
        <td>Castañeda</td>
        <td>Turrubiates</td>
        <td>Informatica</td>
        <td>7-9 11-13 13-15</td>
       <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal1-sm">Eliminar</button>
        </td>
       <td> <button type="button" class="btn btn-info">Editar</button></td>
      </tr>  
      <tr>
       <td>Oscar </td>
        <td>Reyes</td>
        <td>Turrubiates</td>
        <td>Informatica</td>
        <td>7-9 11-13 13-15</td>
         <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal1-sm">Eliminar</button>
        </td>
       <td> <button type="button" class="btn btn-info">Editar</button></td>
      </tr>
      <tr>
        <td>Ochoa </td>
        <td>Zepeda</td>
        <td>Turrubiates</td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
