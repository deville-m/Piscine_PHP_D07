<?php

require_once("Lannister.class.php");

class Jaime extends Lannister {

	public function sleepWith($partner) {
		if ($partner instanceof Sansa)
			echo "Let's do this.\n";
		else if ($partner instanceof Cersei)
			echo "With pleasure, but only in a tower in Winterfell, then.\n";
		else
			echo "Not even if I'm drunk !\n";
	}

}

?>