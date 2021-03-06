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
#div1
{float:left; width:110px; height:500px; margin:10px;padding:10px;border:1px solid #aaaaaa;}
.segmento-horario
{float:left; width:100%; min-height:50px; height: 100%; margin:10px;padding:10px;border:1px solid #aaaaaa;background-color: #C2ACE8;}
</style>

<script>
var id_salon = 0;
var id_last_drag;

$(document).ready(function(){

  id_salon = $('#'+id_salon).html();
  $('#'+id_salon).addClass('active')
  $('.btn_salon').on('click', function() {
    id_salon = $(this).html();
    $('#info-salon').html('Salon activo: '+id_salon);
    repaint_hor();
  });
});

$(document).ready(function(){
    repaint_hor();
  });

function repaint_hor(){
  $.post('http://localhost/ControlUVFEI/index.php/welcome/get_info_horario', {"salon":id_salon}, function(result){
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
      $.post('http://localhost/ControlUVFEI/index.php/welcome/BHorario', {"salon":id_salon,"hora":hora,"dia":dia,"nrc":data}, function(result){
        console.log(result);
      }).fail(function () {
        alert('Error AJAX');
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
      $.post('http://localhost/index.php/welcome/web_service', {"salon":id_salon,"hora":hora,"dia":dia,"nrc":data}, function(result){
        console.log(result);
      }).fail(function () {
        alert('Error AJAX');
      });
      }
    else{
      alert('No puedes poner mas de una materia en la misma casilla');
    }
  }
</script>
</head>
<body>
