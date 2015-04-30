
<h1>iniciar Session</h1>
<?php if(isset($mensaje)):?>
	<h2><?= $mensaje;?></h2>
<?php endif;?>
<form name="form_iniciar" action="<?=base_url().'usuarios/very_sesion'?>" method="POST">
	<label for="Usuario"> Usuario</label>
	<input type="text" name="user" /><br/>

	<label for="contraseña"> Contraseña</label>
	<input type="password" name="pass" /><br/>

	<input type="submit" value="Entrar" name="submit" />
</form>