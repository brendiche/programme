<div>
<?php 
	echo $this->BootstrapForm->create("Seance");
	$types = Configure::read("Type.exercice");
	for ($i=0; $i < 9; $i++) { 
		?>
		<div class="row">
			<div class="span3" id="zero_<?php echo $i; ?>">
				<?php echo $this->BootstrapForm->input("type",array("type"=>"select","options"=>$types,"div"=>false)); ?>
			</div>
			<div class="span3" id="un_<?php echo $i; ?>">
			</div>
			<div class="span3" id="deux_<?php echo $i; ?>">
			</div>
		</div>
<?php
	}
?>
</div>
<script type="text/javascript">
$(document).ready(function(){
	
});

</script>