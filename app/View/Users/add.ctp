<?php 
	echo $this->BootstrapForm->create('User');
	echo $this->BootstrapForm->input('name',array("label"=>"prénom"));
	echo $this->BootstrapForm->input('last_name',array("label"=>"nom"));
	echo $this->BootstrapForm->input('sex',array("label"=>"sexe"));
	echo $this->BootstrapForm->submit('GO !',array( 'class'=>'btn btn-primary'));
	echo $this->BootstrapForm->end();
 ?>