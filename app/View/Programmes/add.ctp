<script type="text/javascript" src="/js/ui/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="/css/ui/jquery-ui.css">
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
		<a href="#" class="btn calcul-max" Seance="<?php echo $value['id']?>">Calculer les max</a>	
		</div>
	<?php } ?>
	</div>
	<?php }
?>
<br><br>
<a href="/seances/add/<?php echo $programme["Programme"]["id"]; ?>" class="btn">nouvelle séance</a>
<?php ///seances/calcul_max/<?php echo $value["id"] ?>
<?php  echo $this->element('max'); ?>
 <script type="text/javascript">
$("#max").dialog({ autoOpen: false,modal: true });
$( ".calcul-max" ).button().on( "click", function() {
      $("#max").dialog( "open" );
    });
 </script>