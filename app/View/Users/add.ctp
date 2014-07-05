<?php 
	echo $this->BootstrapForm->create('User');
	echo $this->BootstrapForm->input('name',array("label"=>"prénom"));
	echo $this->BootstrapForm->input('last_name',array("label"=>"nom"));
	$sex = Configure::read("User.sex");
	echo $this->BootstrapForm->input('sex',array("label"=>"sexe",'type'=>"select","options"=>$sex));
	$work_position = Configure::read("User.work_position");
	echo $this->BootstrapForm->input('work_position',array("label"=>"Position de travail",'type'=>"select","options"=>$work_position));
	echo $this->BootstrapForm->submit('GO !',array( 'class'=>'btn btn-primary'));
	echo $this->BootstrapForm->end();
 ?>