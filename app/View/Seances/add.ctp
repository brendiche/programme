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
				elseif ($i == 1){
					if($default_stretch == 'd') echo $this->BootstrapForm->input("ex2_id",array("label"=>false,"type"=>"select","options"=>$etirement,"value"=>7));
					else echo $this->BootstrapForm->input("ex2_id",array("label"=>false,"type"=>"select","options"=>$etirement,"value"=>6));
						}
					elseif ($i == 2) echo $this->BootstrapForm->input("muscle_3",array("label"=>false,"type"=>"select","options"=>$muscle,"disabled"=>"disabled"));
					elseif ($i == 3) echo $this->BootstrapForm->input("muscle_4",array("label"=>false,"type"=>"select","options"=>$muscle,"value"=>"l","disabled"=>"disabled"));
					else echo $this->BootstrapForm->input("Muscle.".($i+1),array("label"=>false,"type"=>"select","options"=>$muscle,"value"=>"d","class"=>"muscle","id"=>($i+1)));
				 ?>
			</div>
				<?php if ($i == 2){ ?>
				<div class="span3 deux" id="deux_<?php echo $i; ?>">
				<?php
				echo $this->BootstrapForm->input("ex3_id",array("label"=>false,"type"=>"select","options"=>$abdo)); ?>
				</div>
				<?php }elseif ($i == 3){ ?>
				<div class="span3 deux" id="deux_<?php echo $i; ?>">
				<?php
				echo $this->BootstrapForm->input("ex4_id",array("label"=>false,"type"=>"select","options"=>$lombaires)); ?>
				</div>		
				<?php } elseif($i > 3){ ?>
				<div class="span3 deux" id="deux_<?php echo $i; ?>">
				<?php 
				echo $this->BootstrapForm->input("ex".($i+1)."_id",array("label"=>false,"type"=>"select","options"=>$renfo)); ?>
				</div>
				<?php } ?>
				<div class="span3 load" id="load<?php echo $i+1; ?>"><?php echo $this->Html->image("/img/load.gif") ?></div>
		</div>
<?php } ?>
<?php
 echo $this->BootstrapForm->submit("Sauvegarder"); 
 echo $this->BootstrapForm->end();
?>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(".load").hide();
	$(".muscle").find("option[value='a']").remove();
	$(".muscle").find("option[value='l']").remove();
	$(".muscle").change(function(){
		var id = $(this).attr("id");
		$("#load"+id).show();
		var muscle = $(this).val();
		var url = "/seances/get_exo";
		var dataType = 'json'; 
		var data ={"muscle" : muscle};
		$.get(url,data,function(e){
			$("#SeanceEx"+id+"Id").html("");
			$.each(e,function(key,val){
			$("#SeanceEx"+id+"Id").append("<option value='"+key+"' >"+val+"</option>");
			$("#load"+id).hide();
		});
		},dataType);
	});
		
			
});

</script>