<?php

require_once("Lannister.class.php");

class Tyrion extends Lannister {

	public function sleepWith($partner) {
		if ($partner instanceof Sansa)
			echo "Let's do this.\n";
		else
			echo "Not even if I'm drunk !\n";
	}

}

?>