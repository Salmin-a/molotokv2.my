<?php

class PeopleDate extends CWidget {
	public $date;

	public function init() {
		if (!empty($this->date)) {
			echo $this->russian_date($this->date);
		}
	}

	function russian_date() {
		$date = explode("-", $this->date);
		switch ($date[1]) {
		case 1:
			$m = 'января';
			break;
		case 2:
			$m = 'февраля';
			break;
		case 3:
			$m = 'марта';
			break;
		case 4:
			$m = 'апреля';
			break;
		case 5:
			$m = 'мая';
			break;
		case 6:
			$m = 'июня';
			break;
		case 7:
			$m = 'июля';
			break;
		case 8:
			$m = 'августа';
			break;
		case 9:
			$m = 'сентября';
			break;
		case 10:
			$m = 'октября';
			break;
		case 11:
			$m = 'ноября';
			break;
		case 12:
			$m = 'декабря';
			break;
		}
		return $date[2] . '&nbsp;' . $m . '&nbsp;' . $date[0] . '&nbsp;г.';
	}

}
?>
