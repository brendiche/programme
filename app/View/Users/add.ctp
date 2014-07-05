<?php 
	echo $this->BootstrapForm->create('User');
	echo $this->BootstrapForm->input('name',array("label"=>"prénom"));
	echo $this->BootstrapForm->input('last_name',array("label"=>"nom"));
	$sex = Configure::read("User.sex");
	echo $this->BootstrapForm->input('sex',array("label"=>"sexe",'type'=>"select","options"=>$sex));
	echo $this->BootstrapForm->input('age',array("label"=>"age"));
	$morphotype = Configure::read("User.morphotype");
	echo $this->BootstrapForm->input('morphotype',array("label"=>"morphotype",'type'=>"select","options"=>$morphotype));
	$work_position = Configure::read("User.work_position");
	echo $this->BootstrapForm->input('work_position',array("label"=>"position de travail",'type'=>"select","options"=>$work_position));
	echo $this->BootstrapForm->input('health_problem',array("label"=>"santé",'type'=>"textarea"));
	echo $this->BootstrapForm->submit('GO !',array( 'class'=>'btn btn-primary'));
	echo $this->BootstrapForm->end();
 ?>