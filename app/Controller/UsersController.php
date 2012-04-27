<?php

class UsersController extends AppController {
	public $name = 'Users';
	public $components = array('SignMeUp.SignMeUp' => array(
		'activation_field' => false,
		'useractive_field' => false
	));

	public $helpers = array('Html', 'Form');
	
	public function index() {
		$this->set('users', $this->User->find('all'));
	}
	
	public function register() {
		$this->SignMeUp->register();
	}
	public function activate() {
		$this->SignMeUp->activate();
	}
	public function forgotten_password() {
		$this->SignMeUp->forgottenPassword();
	}
}