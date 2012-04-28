<?php ?>

<div class="days">
	<?php
	if ($day && $day["Day"]["Date"] != "") { ?>
	<h2><?php echo date("F j", strtotime($day["Day"]["Date"])); ?>'s Memory</h2>
	<?php } ?>

	<?php
	if (!$day["Day"]["Date"] || ($day["Day"]["Date"] && $day["Day"]["Date"] < date("Y-m-d"))) {
	?>
		<div class="memory-btn">
	<?php
			echo $this->Html->link('Get a memory', array('controller' => 'days', 'action' => 'add'), array('class' => 'btn btn-primary'));
	?>
		</div>
	<?php
	}

	if ($memory) {
	?>
		<p class="memory well">
			<?php echo $memory["Memory"]['text']; ?>
		</p>
	<?php } ?>
</div>