<div>
<?php 
	echo $this->BootstrapForm->create("Seance");
	$types = Configure::read("Type.exercice");
	$muscle = Configure::read("Muscle.nom");
	for ($i=0; $i < 9; $i++) { 
		?>
		<div class="row">
			<div class="span3">
				<?php 
					if($i == 0 ) echo "Cardio";
					elseif ($i == 1) echo "Etirements";
					elseif ($i == 2) echo "Abdos";
					elseif ($i == 3) echo "Lombaires";
					else echo "Renforcement";
				 ?>
			</div>
			<div class="span3" id="un_<?php echo $i; ?>">
				<?php 
					if($i == 0 ) echo $this->BootstrapForm->input("ex1_id",array("label"=>false,"type"=>"select","options"=>$cardio));
					elseif ($i == 1)  echo $this->BootstrapForm->input("ex2_id",array("label"=>false,"type"=>"select","options"=>$etirement));
					elseif ($i == 2) echo $this->BootstrapForm->input("ex3_id",array("label"=>false,"type"=>"select","options"=>$muscle));
					elseif ($i == 3) echo $this->BootstrapForm->input("ex4_id",array("label"=>false,"type"=>"select","options"=>$muscle));
					else echo $this->BootstrapForm->input("ex".($i+1)."_id",array("label"=>false,"type"=>"select","options"=>$muscle));
				 ?>
			</div>
			<div class="span3 deux" id="deux_<?php echo $i; ?>">
				<?php 
					if ($i == 2) echo $this->BootstrapForm->input("ex3_id",array("label"=>false,"type"=>"select","options"=>$muscle));
					elseif ($i == 3) echo $this->BootstrapForm->input("ex4_id",array("label"=>false,"type"=>"select","options"=>$muscle));
					elseif($i > 3) echo $this->BootstrapForm->input("ex".($i+1)."_id",array("label"=>false,"type"=>"select","options"=>$muscle));
				?>
			</div>
		</div>
<?php
	}
?>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('.deux').hide();
	$("select").change(function(){
		$(".deux").show();
	});
});

</script>