<?php

class Day extends AppModel {
	public $name = 'Day';
	
	public $validate = array(
		'text' => array(
			'rule' => 'notEmpty'
		),
		'body' => array(
			'rule' => 'notEmpty'
		)
	);
	
	public function getNextDate() {
		$data = $this->find('first', array(
				'fields' => array('MAX(Day.Date) as maxDate', '*')
			)
		);
		$lastDate = $data[0]["maxDate"];
		var_dump($lastDate);
		$nextDate = date("Y-m-d", strtotime("+1 day", $lastDate));
		var_dump($nextDate);
		exit();
/*
		if ($nextDate != "0000-00-00") {
			$nextDate = date("Y-m-d");
		} else {
			$nextDate = date("Y-m-d");
		}

		return $nextDate;
*/
	}
}