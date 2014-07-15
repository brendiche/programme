<div id="max">
	<?php 
	for ($i=0; $i < 5 ; $i++) { ?> 
	<div id="max_<?php echo $i ?>"></div>
	<?php 
		echo $this->BootstrapForm->input('max'.$i,array("label"=>false));
	}
	 ?>
</div>