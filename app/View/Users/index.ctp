<?php foreach($users as $user){ ?>
<div>
	<?php echo $user["User"]["name"]." ".$user['User']['last_name']; ?>
	<a href="/users/profil/<?php echo $user["User"]["id"]; ?>" class="btn">voir le profil</a>
</div>
<?php } ?>