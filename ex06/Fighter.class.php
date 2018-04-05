<?php

class Fighter {
	public $name;

	protected function __construct($name) {
		$this->name = $name;
	}

	public function __toString() {
		return $this->name;
	}

}

?>