<?php

class Memory extends AppModel {
	public $name = 'Memory';
	
	public $validate = array(
		'text' => array(
			'rule' => 'notEmpty'
		),
		'body' => array(
			'rule' => 'notEmpty'
		)
	);

	public function getRandomMemoryID () {
		$data = $this->find('first', array(
			'conditions' => array(
				'Memory.Date' => null
			),
			'order' => 'rand()'
		));
		$memory = $data["Memory"];

		return $memory['id'];
	}
}