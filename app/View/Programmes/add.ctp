<script type="text/javascript" src="/js/ui/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/ui/jquery-ui.min.css">
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
$(".calcul-max").click(function(){
	var url = "/seances/calcul_max";
	var dataType = 'json'; 
	var data ={"seance_id" : $(this).attr("Seance")};
	$.get(url,data,function(e){
		for (var i = 0; i < 5; i++) {
			console.log(e.ExerciceSeance[i+4].Exercice.name);
			console.log($("#max_"+i));
			$("#max_"+i).append(e.ExerciceSeance[i+4].Exercice.name);
		};
		$("#max").dialog( "open" );
	},dataType);
    });
 </script>