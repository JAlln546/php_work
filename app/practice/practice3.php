<?php
class Pumpkin {
	public $color;
	public function describe() {
		echo 'I am ' . $this->color . '-ish colored.';
		echo "<br>";
	}
}

$myPumpkin = new Pumpkin();
$myPumpkin->color = “orange”;
$myPumpkin->describe();

?>