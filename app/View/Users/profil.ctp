<h1>C'est le profile de <?php echo $user["User"]['name']." ".$user["User"]["last_name"]; ?></h1>
<?php
	 $wp = Configure::read("User.work_position");
 ?>
<div>
	<?php if($user["User"]['sex'] == "h"){ ?>
	Monsieur
	<?php }else{ ?>
	Madame
	<?php } ?>
	travaille <span style="text-transform:lowercase"><?php echo $wp[$user["User"]["work_position"]]; ?></span>
</div>