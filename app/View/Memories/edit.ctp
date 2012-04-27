<h1>Edit Memory</h1>
<?php
    echo $this->Form->create('Memory', array('action' => 'edit'));
    echo $this->Form->input('text');
    echo $this->Form->end('Save Memory');