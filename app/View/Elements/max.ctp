<div id="max">
	<?php 
	echo $this->BootstrapForm->create("seance",array("action"=>"calcul_max"));
	for ($i=0; $i < 5 ; $i++) { ?> 
	<div id="max_<?php echo $i ?>"></div>
	<?php 
		echo $this->BootstrapForm->input('max'.$i,array("label"=>false));
	}

	echo $this->BootstrapForm->submit("Sauvegarder les maxs");
	echo $this->BootstrapForm->end();
	 ?>
</div>
