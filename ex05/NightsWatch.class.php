<?php

class NightsWatch {
	private $list = array();

	public function recruit($member) {
		array_push($this->list, $member);
	}

	public function fight() {
		foreach ($this->list as $member) {
			if ($member instanceof IFighter)
				$member->fight();
		}
	}
}

?>