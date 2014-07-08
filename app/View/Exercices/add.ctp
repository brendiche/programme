<?php 
	echo $this->BootstrapForm->create('Exercice');
	echo $this->BootstrapForm->input('name',array("label"=>"nom"));
	$muscles = array(""=>"",Configure::read("Muscle.nom"));
	echo $this->BootstrapForm->input('muscles',array("label"=>"muscle",'type'=>"select","options"=>$muscles));
	$type = Configure::read("Type.exercice");
	echo $this->BootstrapForm->input('type',array("label"=>"Type d'exercice",'type'=>"select","options"=>$type));
	echo $this->BootstrapForm->submit('GO !',array( 'class'=>'btn btn-primary'));
	echo $this->BootstrapForm->end();
 ?>