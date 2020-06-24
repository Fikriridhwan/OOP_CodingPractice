<?php 
class OperasiPembagian extends OperasiBilanganAbs{

	public function __construct(float $a,float $b){

		$this->set_A($a);
		$this->set_B($b);
		$this->set_C();
	}

	 protected function set_A(float $a){
	 	$this->a = $a;
	 }
	 protected function set_B(float $b){
	 	$this->b = $b;
	 }
	 protected function set_C(){
	 	try{
	 	$this->c = $this->get_A() / $this->get_B();
	 	}catch (exception $e){echo "Error";}
	 }
	 protected function get_A(){
	 	return $this->a;
	 }
	 protected function get_B(){
	 	return $this->b;
	 }
	 protected function get_C(){
	 	return $this->c;
	 }
	 protected function tampil(){
	 	return "Hasil Operasi Pembagian ".$this->get_A()." : ".$this->get_B()." = ".$this->get_C();
	 }
	 public function hasil(){
	 	return $this->tampil();
	 }
	 
}
?>