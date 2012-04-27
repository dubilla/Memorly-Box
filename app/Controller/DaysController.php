<?php

class DaysController extends AppController {
	public $name = 'Days';
	public $helpers = array('Html', 'Form');
	var $uses = array('Day', 'Memory');
	
	public function index() {
		$day = $this->Day->find('first', array(
			'order' => 'day.date DESC'
		));
		$this->set('day', $day);
		$this->loadModel("Memory");
		$memory = $this->Memory->read(null, $day["Day"]["memoryID"]);
		$this->set('memory', $memory);
	}
	
	public function view($id = null) {
		$this->Day->id = $id;
		$this->set('day', $this->Day->read());
	}
	
	public function add() {
		$this->loadModel('Memory');
		$memoryID = $this->Memory->getRandomMemoryID();
		$date = $this->Day->getNextDate();
		$this->Day->set(array(
			'Date' => $date,
			'memoryID' => $memoryID
		));

		$this->Memory->read(null, $memoryID);
		$this->Memory->set('date', $date);
		if($this->Day->save() && $this->Memory->save()) {
			$this->Session->setFlash('Here\'s your new memory!');
		} else {
			$this->Session->setFlash('Oh no, an error!');
		}
		$this->redirect(array('action' => 'index'));
	}
}