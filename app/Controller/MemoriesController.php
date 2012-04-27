<?php

class MemoriesController extends AppController {
	public $name = 'Memories';
	public $helpers = array('Html', 'Form');
	
	public function index() {
		$this->set('memories', $this->Memory->find('all'));
	}
	
	public function view($id = null) {
		$this->Memory->id = $id;
		$this->set('memory', $this->Memory->read());
	}
	
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Memory->save($this->request->data)) {
				$this->Session->setFlash('Woohoo!  Your memory was saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Womp womp.  Your memory was not saved... sorry!');
			}
		}
	}
	
	public function edit($id = null) {
		$this->Memory->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Memory->read();
		} else {
			if ($this->Memory->save($this->request->data)) {
				$this->Session->setFlash('Saved, dude!');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Whoopsies.  Your post wasn\'t saved!');
			}
		}
	}
	
	function delete($id) {
		if ($this->request->is('get')) {
			
		}
		if ($this->Memory->delete($id)) {
			$this->Session->setFlash('Deleted.  Whoaaaaah!');
			$this->redirect(array('action' => 'index'));
		}
	}
}