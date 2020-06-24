<?php 
abstract class OperasiBilanganAbs{
	protected $a,$b,$c;

	abstract protected function set_A(float $a);
	abstract protected function set_B(float $b);
	abstract protected function set_C();
	abstract protected function get_A();
	abstract protected function get_B();
	abstract protected function get_C();
	abstract protected function tampil();
}
?>