<h1>Add Memory</h1>
<?php
echo $this->Form->create('Memory');
echo $this->Form->input('text', array('rows' => '3'));
echo $this->Form->end('Save Memory');
?>