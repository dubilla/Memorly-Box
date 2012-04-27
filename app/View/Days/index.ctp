<?php 

if ($day && $day["Day"]["Date"] != "") { ?>
<h1><?php echo date("F j", strtotime($day["Day"]["Date"])); ?>'s Memory</h1>
<?php } ?>

<?php
if (!$day["Day"]["Date"] || ($day["Day"]["Date"] && $day["Day"]["Date"] < date("Y-m-d"))) {
	echo $this->Html->link('Get a memory', array('controller' => 'days', 'action' => 'add'));
}

if ($memory) {
?>
	<p class="memory">
		<?php echo $memory["Memory"]['text']; ?>
	</p>
<?php } ?>