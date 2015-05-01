
<div>

<form id="login" method="POST" class="form-inline" role="form" >
	<br></br>
	<br></br>
	<br></br>
	<br></br>

	<h1 class="form-signin-heading">Iniciar Sesion</h1>
	<div class"form-group">
		<label for="Usuario"> <h3>Usuario</h3> </label><br/>
		<input class="form-control" type="text" name="user" /><br/>
	</div>
	<div class"form-group">
		<label for="contraseña"> <h3>Contraseña</h3> </label><br/>
		<input class="form-control" type="password" name="pass" /><br/>
	</div>
	<br/>
	<input class="btn btn-success btn-lg" type="submit" value="Entrar" name="Entrar">
</form>
</div>
	<?php 
		if (isset($_POST['Entrar'])){
			$Usuario= $this->input->post('user');
			$Password= $this->input->post('pass');
			$this->db->where('Usuario',$Usuario);
			$this->db->where('Password',$Password);
			$prueba= $this->db->get('usuarios');
			if($prueba->num_rows() == 1){
				redirect('welcome/home');
			}else{
				redirect('welcome/LoginE');
			}
		}
	?>