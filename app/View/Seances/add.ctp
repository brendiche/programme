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
					elseif ($i == 2) echo $this->BootstrapForm->input("muscle_3",array("label"=>false,"type"=>"select","options"=>$muscle,"disabled"=>"disabled"));
					elseif ($i == 3) echo $this->BootstrapForm->input("muscle_4",array("label"=>false,"type"=>"select","options"=>$muscle,"value"=>"l","disabled"=>"disabled"));
					else echo $this->BootstrapForm->input("muscle_".($i+1),array("label"=>false,"type"=>"select","options"=>$muscle,"value"=>"d","class"=>"muscle"));
				 ?>
			</div>
				<?php if ($i == 2){ ?>
				<div class="span3 deux" id="deux_<?php echo $i; ?>">
				<?php
				echo $this->BootstrapForm->input("ex3_id",array("label"=>false,"type"=>"select","options"=>$muscle)); ?>
				</div>
				<?php }elseif ($i == 3){ ?>
				<div class="span3 deux" id="deux_<?php echo $i; ?>">
				<?php
				echo $this->BootstrapForm->input("ex4_id",array("label"=>false,"type"=>"select","options"=>$muscle)); ?>
				</div>		
				<?php } elseif($i > 3){ ?>
				<div class="span3 deux" id="deux_<?php echo $i; ?>">
				<?php 
				echo $this->BootstrapForm->input("ex".($i+1)."_id",array("label"=>false,"type"=>"select","options"=>$muscle)); ?>
				</div>
				<?php } ?>
		</div>
<?php } ?>
<?php
 echo $this->BootstrapForm->submit("Sauvegarder"); 
 echo $this->BootstrapForm->end();
?>
</div>
<script type="text/javascript">
var options_d = '<?php echo $renfo_d ?>';
var options_p = '<?php echo $renfo_d ?>';
$(document).ready(function(){
	$('.deux').hide();
	$(".muscle").change(function(){
		var id = $(this).attr("id");
		var muscle = $(this).val();
		switch (muscle){
			case "d":
			console.log(options_d);
			break;
			case "p":
			console.log(options_p);
			break;
			case "j":
			console.log("j");
			break;
			case "t":
			console.log("t");
			break;
			case "b":
			console.log("b");
			break;
			case "e":
			console.log("e");
			break;
		}
	});
});

</script>