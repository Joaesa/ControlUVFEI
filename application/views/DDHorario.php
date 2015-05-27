<html>
<head>
  <title>ControlUV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/index_style.css">

  <style>

</style>

<script>
var id_salon = 0;
var id_last_drag;

$(document).ready(function(){
repaint_hor();
  id_salon = $('#'+id_salon).html();
  $('#'+id_salon).addClass('active')
  $('.btn_salon').on('click', function() {
    repaint_hor();
    id_salon = $(this).html();
    
    $('#info-salon').html('Salon activo: '+id_salon);

    
  });
});

$(document).ready(function(){
    repaint_hor();
  });

function repaint_hor(){
  $.post('http://localhost:8080/ControlUVFEI/index.php/welcome/get_info_horario', {"salon":id_salon}, function(result){
    var json = $.parseJSON(result);
    for (var i = json.length - 1; i >= 0; i--) {
      var hora = json[i].Hora;
      var dia = json[i].Dia;
      var nrc = json[i].NCR;
      switch(dia){
        case 'Lunes': dia     =1; break;
        case 'Martes': dia    =2; break;
        case 'Miercoles': dia =3; break;
        case 'Jueves': dia    =4; break;
        case 'Viernes': dia   =5; break;
        case 'Sabado': dia    =6; break;
      }
      switch(hora){
        case '7': hora  =1; break;
        case '9': hora  =2; break;
        case '11': hora =3; break;
        case '13': hora =4; break;
        case '15': hora =5; break;
        case '17': hora =6; break;
        case '19': hora =7; break;
      }
      var tt_id = hora+'-'+dia;
      $('#'+tt_id).append($('#'+nrc));
    }
  }).fail(function () {
    alert('error');
  });
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    console.log(ev);
}

function drop(ev) {
    if($ (ev.target).attr('id')=="div1"){
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));
      var datos = $(ev.target).attr('id').split("-");
      var hora = datos[0];
      var dia = datos[1];
      $.post('http://localhost:8080/ControlUVFEI/index.php/welcome/BHorario', {"salon":id_salon,"hora":hora,"dia":dia,"nrc":data}, function(result){
        console.log(result);
        
      }).fail(function () {
        alert('Error AJAX 1');
      });
    }
    else if( $(ev.target).attr('ocupado') == "false" ){    
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));
      var datos = $(ev.target).attr('id').split("-");
      var hora = datos[0];
      var dia = datos[1];
      
      $(ev.target).attr('ocupado', "true");
      
      $.post('http://localhost:8080/ControlUVFEI/index.php/welcome/web_service', {"salon":id_salon,"hora":hora,"dia":dia,"nrc":data}, function(result){
        console.log(result);
      }).fail(function () {
        alert('Error AJAX 3');
      });
      }
    else{
      alert('No puedes poner mas de una materia en la misma casilla');
    }
  }
</script>
</head>
<body>

<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menuHorario'); ?>
<div id="body">
<div class="container">

<select name="Bloques">
  <option value="1">Bloque 1</option>
  <option value="2">Bloque 2</option>
  <option value="3">Bloque 3</option>
</select>


  <select name="Seccion">
  <option value="1">Seccion 1</option>
  <option value="2">Seccion 2</option>
  <option value="3">Seccion 3</option>
  </select>


	<div class="container">
  <div class="row">
  <h2 id="info-salon" class="text-center text-primary">Salon activo: 
  <?php
    $query =$this->db->get('salon');
    echo $query->result()[0]->Salón;
  ?>
  </h2>
</div>
  <ul class="pagination">
	  <?php 
      $query =$this->db->get('salon');
      foreach ($query->result() as $key => $row) {
         echo '<li><a id="'.$key.'" data-id="'.$row->Salón.'" href="#" class="btn_salon">'.$row->Salón.'</a><li>';
      } 
    ?>
  </ul>
</div>

<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-10">
    <div class="row">
      <div class="col-md-2"><label>Lunes</label></div>
      <div class="col-md-2"><label>Martes</label></div>
      <div class="col-md-2"><label>Miercoles</label></div>
      <div class="col-md-2"><label>Jueves</label></div>
      <div class="col-md-2"><label>Viernes</label></div>
    
    </div>
  </div>
</div>
<div class="row">
<div id="curso" class="col-sm-2"  id="div0" ondrop="drop(event)"  ondragover="allowDrop(event)">
  <?php 
    $query =$this->db->get('curso');
      foreach ($query ->result() as $key => $row) {
        $IDA=$row->IDA;
        $this->db->where('IDA',$IDA);
        $query2 =$this->db->get('asignatura');
        foreach ($query2 ->result() as $key => $row2) {
          echo '<div id="'.$row->NRC,'" draggable="true" ondragstart="drag(event)">'.$row2->Asignatura.'</div>';
    
        }
  
      } 
  ?>
</div>
<div class="col-sm-1">
  <div class="row">
    <div id="Hor" class="col-sm-2">7-9</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2">9-11</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2">11-13</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2">13-15</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2">15-17</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2">17-19</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2">19-21</div>
  </div>
</div>
<div class="col-sm-9">
<?php
  for( $i = 1; $i <= 7; $i++ ){
    echo '<div class="row">';
    for( $j = 1; $j <= 5; $j++ ){
      echo '<div class="col-sm-2">';
      echo '<div id="'.$i.'-'.$j.'"data-id="1" ocupado="false" class="segmento-horario" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
      echo '</div>';
    }
    echo '</div>';
  }
?>
</div>
</div>
<br></br>
<br></br>