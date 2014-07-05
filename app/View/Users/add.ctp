<?php 
	echo $this->BootstrapForm->create('User');
	echo $this->BootstrapForm->input('name',array("label"=>"prénom"));
	echo $this->BootstrapForm->input('last_name',array("label"=>"nom"));
	$sex = Configure::read("User.sex");
	echo $this->BootstrapForm->input('sex',array("label"=>"sexe",'type'=>"select","options"=>$sex));
	echo $this->BootstrapForm->submit('GO !',array( 'class'=>'btn btn-primary'));
	echo $this->BootstrapForm->end();
 ?>