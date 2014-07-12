<?php 
	echo $this->BootstrapForm->create('User');
	?>
	<div class="row">
		<div class="span3">
			<?php
			echo $this->BootstrapForm->input('name',array("label"=>"prénom","div"=>false));
			?>
		</div>
		<div class="span3">
			<?php
			echo $this->BootstrapForm->input('last_name',array("label"=>"nom","div"=>false));
			?>
		</div>	
	</div>
	<div class="row">
		<div class="span3">
			<?php
			$sex = Configure::read("User.sex");
			echo $this->BootstrapForm->input('sex',array("label"=>"sexe",'type'=>"select","options"=>$sex));
			?>
		</div>
		<div class="span3">
			<?php
			echo $this->BootstrapForm->input('age',array("label"=>"age"));
			?>
		</div>
	</div>
	<div class="row">
		<div class="span3">	
			<?php
			$morphotype = Configure::read("User.morphotype");
			echo $this->BootstrapForm->input('morphotype',array("label"=>"morphotype",'type'=>"select","options"=>$morphotype));
			?>
		</div>
		<div class="span3">
			<?php
			$work_position = Configure::read("User.work_position");
			echo $this->BootstrapForm->input('work_position',array("label"=>"position de travail",'type'=>"select","options"=>$work_position));
			?>
		</div>
	</div>
	<div class="row">
		<div class="span6">
			<?php
			echo $this->BootstrapForm->input('health_problem',array("label"=>"santé",'type'=>"textarea","class"=>"span6"));
			?>
		</div>
	</div>
	<div class="row">
		<div class="span3">
			<?php
			echo $this->BootstrapForm->submit('GO !',array( 'class'=>'btn btn-primary'));
			echo $this->BootstrapForm->end();
 			?>
 		</div>
	</div>