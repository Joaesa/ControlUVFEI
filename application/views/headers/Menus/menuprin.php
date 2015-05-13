<?php $activa = $this->uri->segment(2); ?>
<nav id="izq">
		<ul id="iz">
			<li id="zi">
				<input type="text" id="buscador" placeholder="search...">
			</li>

			<a href="<?=base_url()?>index.php/Welcome/home">
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/home-2-128.png" width="40px" height="40px">
				<p class="menu">Inicio</p>
			</li>
			</a>

			<a href="<?=base_url()?>index.php/Welcome/falta">
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/table.png" width="40px" height="40px">
				<p class="menu">Bloques</p>
			</li>
			</a>

			<a href="<?=base_url()?>index.php/Welcome/thorario">
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/time-8-128.png" width="40px" height="40px">
				<p class="menu">Horarios</p>
			</li>
			</a>
			
			<a href="<?=base_url()?>index.php/Welcome/curso">
			<li <?php if ($activa == 'curso'){ echo "class='active'"; } ?> id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/school-128.png" width="40px" height="40px">
				<p class="menu">Cursos</p>
			</li>
			</a>
			
			<a href="<?=base_url()?>index.php/Welcome/tmaes">
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/add-user-128.png" width="40px" height="40px">
				<p class="menu">Maestros</p>
			</li>
			</a>

			<a href="<?=base_url()?>index.php/Welcome/tmaterias">
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/book-stack-128.png" width="40px" height="40px">
				<p class="menu">Asignaturas</p>
			</li>
			</a>

			<a href="<?=base_url()?>index.php/Welcome/tsalon">
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/chair-4-128.png" width="40px" height="40px">
				<p class="menu">Salon</p>
			</li>
			</a>

			<a href="<?=base_url()?>index.php/Welcome/salir">
			<li id="zi">
				<div class="barra"></div>
				<img id="icon" src="<?=base_url()?>imagen/close-icon-white.png" width="40px" height="40px">
				<p class="menu">Salir</p>
			</li>
			</a>
			
			
		</ul>
</nav>