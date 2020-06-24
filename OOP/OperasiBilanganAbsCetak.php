<?php
include('OperasiBilanganAbs.php');
include('OperasiPenjumlahan.php');
include('OperasiPengurangan.php');
include('OperasiPerkalian.php');
include('OperasiPembagian.php');

Final class OperasiBilanganAbsCetak {
	
	private function cetakSemua(array $OB,float $a,float $b) {
		
		return "Hasil Operasi bilangan ".$a." dan ".$b." adalah :<br><hr>".$OB[0]->hasil()." <br> ".$OB[1]->hasil()." <br> ".$OB[2]->hasil()." <br> ".$OB[3]->hasil()." <br> " ;

		
	}
	public function jawaban(array $OB,float $a,float $b){
		return $this->cetakSemua($OB,$a,$b);
	}
}

$angka1 = 10.5;
// $angka2 = 2.5;
$angka2 = 0;


$hasil = new OperasiBilanganAbsCetak();
$OB = array(new OperasiPenjumlahan($angka1,$angka2),new OperasiPengurangan($angka1,$angka2),new OperasiPerkalian($angka1,$angka2),new OperasiPembagian($angka1,$angka2));
echo $hasil->jawaban($OB,$angka1,$angka2);


?>