<!-- 
Buatlah fungsi terbilang dari sebuah angka dengan membuat fungsi recursive, misal 1.234.567
output: Satu juta dua ratus tiga puluh empat lima ratus enam puluh tujuh
-->


<?php
function sebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = sebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = sebut($nilai/10)." puluh". sebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . sebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = sebut($nilai/100) . " ratus" . sebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . sebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = sebut($nilai/1000) . " ribu" . sebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = sebut($nilai/1000000) . " juta" . sebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = sebut($nilai/1000000000) . " milyar" . sebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = sebut($nilai/1000000000000) . " trilyun" . sebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
 
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim(sebut($nilai));
		} else {
			$hasil = trim(sebut($nilai));
		}     		
		return $hasil;
	}
 
 
	$angka = 23090;
	echo terbilang($angka);
?>