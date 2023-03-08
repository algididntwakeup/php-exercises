<!DOCTYPE html>
<html>
<head>
	<title>Konversi Suhu</title>
</head>
<body>

<?php
function konversiSuhu($suhu, $pilihan){
	if($pilihan == "reamur"){
		return 4/5 * $suhu;
	} elseif($pilihan == "fahrenheit"){
		return 9/5 * $suhu + 32;
	} elseif($pilihan == "kelvin"){
		return $suhu + 273.15;
	} else {
		return $suhu;
	}
}

if(isset($_POST['submit'])){
	$suhu = $_POST['suhu'];
	$jenis_suhu = $_POST['jenis_suhu'];
	$konversi = $_POST['konversi'];

	if(!empty($suhu)){
		if($jenis_suhu == 'celsius'){
			$celsius = $suhu;
		} elseif($jenis_suhu == 'reamur'){
			$celsius = 5/4 * $suhu;
		} elseif($jenis_suhu == 'fahrenheit'){
			$celsius = 5/9 * ($suhu - 32);
		} elseif($jenis_suhu == 'kelvin'){
			$celsius = $suhu - 273.15;
		}
		$hasil = konversiSuhu($celsius, $konversi);
		echo "<h3>Hasil konversi:</h3>";
		echo "$suhu $jenis_suhu = $hasil $konversi";
	} else {
		echo "Silakan masukkan suhu";
	}
}
?>

<form method="POST">
	<label>Masukkan suhu:</label>
	<input type="number" name="suhu" required><br>

	<label>Pilih jenis suhu:</label><br>
	<input type="radio" name="jenis_suhu" value="celsius" checked>Celsius<br>
	<input type="radio" name="jenis_suhu" value="reamur">Reamur<br>
	<input type="radio" name="jenis_suhu" value="fahrenheit">Fahrenheit<br>
	<input type="radio" name="jenis_suhu" value="kelvin">Kelvin<br>

	<label>Konversi ke:</label><br>
	<input type="radio" name="konversi" value="reamur" checked>Reamur<br>
	<input type="radio" name="konversi" value="fahrenheit">Fahrenheit<br>
	<input type="radio" name="konversi" value="kelvin">Kelvin<br>

	<input type="submit" name="submit" value="Konversi">
</form>

</body>
</html>
