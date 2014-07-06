<?php 
	echo $this->BootstrapForm->create('Exercice');
	echo $this->BootstrapForm->input('name',array("label"=>"nom"));
	$muscles = Configure::read("Muscle.nom");
	echo $this->BootstrapForm->input('muscles',array("label"=>"muscle",'type'=>"select","options"=>$muscles));
 ?>