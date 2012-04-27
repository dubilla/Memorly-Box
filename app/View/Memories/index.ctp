<h1>Memories</h1>

<?php echo $this->Html->link('Add Memory', array('controller' => 'memories', 'action' => 'add')); ?>

<table>
    <tr>
        <th>id</th>
        <th>Text</th>
        <th>Action</th>
    </tr>

    <?php foreach ($memories as $memory): ?>
    <tr>
        <td><?php echo $this->Html->link($memory['Memory']['id'],
array('controller' => 'memories', 'action' => 'view', $memory['Memory']['id'])); ?></td>
        <td>
            <?php echo $memory['Memory']['text']; ?>
        </td>
		<td>
			<?php echo $this->Form->postLink(
            	'Delete',
            	array('action' => 'delete', $memory['Memory']['id']),
            	array('confirm' => 'Are you sure?'));
        	?>
			<?php echo $this->Html->link('Edit',
array('action' => 'edit', $memory ['Memory']['id'])); ?>
		</td>s
    </tr>
    <?php endforeach; ?>

</table>