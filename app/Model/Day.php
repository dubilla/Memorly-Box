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
		// Get the most recent date
		$data = $this->find('first', array(
				'fields' => array('MAX(Day.Date) as maxDate', '*')
			)
		);
		$lastDate = $data[0]["maxDate"];

		// Format the date
		$nextDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($lastDate)) . " +1 day"));

		if ($nextDate != "0000-00-00") {
			$nextDate = date("Y-m-d");
		} else {
			$nextDate = date("Y-m-d");
		}

		return $nextDate;
	}
}