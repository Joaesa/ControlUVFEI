<?php $this->load->view('headers/Menus/menuprin'); ?>
<?php $this->load->view('headers/Menus/menupr'); ?>
<div id="body">
  	<div style="text-align:center; background:orange; color: white;">
        <h1 style="font-size: 50pt">PDF</h1>
    </div>
    <div class="container">
    	<div class="row">
    		<div class="col-md-4"></div>
    		<div class="col-md-4">
    			<form method="POST">
    				<table>
    					<tr>
    						<td>Maestro :</td>
    						<td><select class="form-control" id="IDM" name="IDM">
								<?php 
									$mas=$this->db->get('maestros');
									if($mas->num_rows() > 0){
										if($mas != FALSE){
											foreach($mas->result() as $ma){
												echo "<option value='".$ma->IDM."'>".$ma->Nombre." ".$ma->ApellidoP." ".$ma->ApellidoM."</option>";
											}
										}
									}
								?>
							</select></td>
    					</tr>
    				</table>
    			</form>

    		</div>
    		<div class="col-md-4"></div>
    	</div>
    </div>