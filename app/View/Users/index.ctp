<h1>Users</h1>

<ul>
<?php
	foreach ($users as $user) {
?>
		<li><?php echo $user['User']['username']; ?></li>
<?php
	}
?>
</ul>