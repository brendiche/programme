<h1>C'est le profile de <?php echo $user["User"]['name']." ".$user["User"]["last_name"]; ?></h1>
<?php
	 $wp = Configure::read("User.work_position");
 ?>
<div>
	<?php if($user["User"]['sex'] == "h"){ ?>
	Monsieur travaille <span style="text-transform:lowercase"><?php echo $wp[$user["User"]["work_position"]]; ?></span>
	<?php }else{ ?>
	Madame travaille <span style="text-transform:lowercase"><?php if($user["User"]["work_position"] == "a") echo $wp[$user["User"]["work_position"]]."e";
	else echo $wp[$user["User"]["work_position"]]; ?></span>
	<?php } ?>
	
</div>
<div>
	<a href="/programmes/add/<?php echo $user['User']['id'] ?>" class="btn">Petit programme </a>
</div>