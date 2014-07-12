<?php 
	if(!empty($programme["Seance"])){ ?>
	<div class="row">	
	<?php	foreach ($programme["Seance"] as $key => $value) { ?>
		<div class='span4'>
		Séance : <?php echo ($key+1)?>
		<br>
		<?php	foreach ($value["ExerciceSeance"] as $k => $v) {
				echo $v["Exercice"]["name"]."<br>";
			} ?>
		</div>
	<?php } ?>
	</div>
	<?php }
?>
<br><br>
<a href="/seances/add/<?php echo $programme["Programme"]["id"]; ?>" class="btn">nouvelle séance</a>

