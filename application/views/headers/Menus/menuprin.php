<?php $activa = $this->uri->segment(2); ?>
<nav id="izq">
		<ul id="iz">
			<li id="zi">
				<input type="text" id="buscador" placeholder="search...">
			</li>

			<a href="<?=base_url()?>">
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/home-2-128.png" width="40px" height="40px">
				<p class="menu">Inicio</p>
			</li>
			</a>

			<a href="">
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/table.png" width="40px" height="40px">
				<p class="menu">Bloques</p>
			</li>
			</a>

			<a href="<?=base_url()?>index.php/Welcome/tmaterias">
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/book-stack-128.png" width="40px" height="40px">
				<p class="menu">Asignaturas</p>
			</li>
			</a>
			
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/add-user-128.png" width="40px" height="40px">
				<p class="menu">Maestros</p>
			</li>

			<a href="<?=base_url()?>index.php/Welcome/curso">
			<li <?php if ($activa == 'curso'){ echo "class='active'"; } ?> id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/school-128.png" width="40px" height="40px">
				<p class="menu">Cursos</p>
			</li>
			</a>

			<li id="zi">
				<div class="barra"></div>
				<p class="menu">Salir</p>
			</li>
		</ul>
</nav>