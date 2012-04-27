<?php

class User extends AppModel {
	public $name = 'User';
	public $actsAs = array('SignMeUp.SignMeUp');
	
	public $validate = array(
		'text' => array(
			'rule' => 'notEmpty'
		)
	);
}