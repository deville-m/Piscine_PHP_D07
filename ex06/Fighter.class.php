<?php

abstract class Fighter {
	public $name;

	abstract public function fight($target);

	protected function __construct($name) {
		$this->name = $name;
	}

	public function __toString() {
		return $this->name;
	}

}

?>
