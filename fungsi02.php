<?php
function cetak_ganjil ($awal, $akhir){
	for ($i=$awal; $i<$akhir; $i++){
		if ($i%2 == 1) {
			echo "$i";
		}
	}
}
//Pemanggilan Fungsi
$a = 10;
$b = 50;
echo "<b>Bilangan Ganjil Dari $a Sampai $b : </b><br>";
cetak_ganjil($a, $b);

?>