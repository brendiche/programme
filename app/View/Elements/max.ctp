<div id="max">
	<?php 
	echo $this->BootstrapForm->create("seance",array("action"=>"calcul_max"));
	echo $this->BootstrapForm->input("seance_id",array("type"=>"hidden"));
	for ($i=0; $i < 5 ; $i++) { ?> 
	<div id="max_<?php echo $i ?>"></div>
	<div class="row-fluid">
		<div class="span6">Charge</div>
		<div class="span6">Répétitions</div>
	</div>
	<?php
		echo $this->BootstrapForm->input('Exo.'.$i.'.max_charge',array("label"=>false,'div'=>false)); 
		echo $this->BootstrapForm->input('Exo.'.$i.'.max_rep',array("label"=>false,'div'=>false)); 
	
	 } 

	echo $this->BootstrapForm->submit("Sauvegarder les maxs");
	echo $this->BootstrapForm->end();
	 ?>
</div>
