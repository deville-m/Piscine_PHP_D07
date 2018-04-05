<?php

class UnholyFactory {
	private $list = array();

	public function absorb($fighter) {
		if (get_parent_class($fighter) != "Fighter")
			echo "(Factory can't absorb this, it's not a fighter)\n";
		else if (isset($this->list[$fighter->name]))
			echo "(Factory already absorbed a fighter of type " . $fighter . ")\n";
		else {
			$this->list[$fighter->name] = $fighter;
			echo "(Factory absorbed a fighter of type " . $fighter . ")\n";
		}
	}

	public function fabricate($ref_fighter) {
		foreach ($this->list as $key_fighter => $fighter) {
			if ($key_fighter == $ref_fighter) {
				echo "(Factory fabricates a fighter of type " . $fighter . ")\n";
				return clone $fighter;
			}
		}
		echo "(Factory hasn't absorbed any fighter of type " . $ref_fighter . ")\n";
	}
}

?>