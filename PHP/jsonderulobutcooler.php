<!DOCTYPE html>
<html>
<head>
	<title>Contoh Manipulasi File JSON</title>
</head>
<style>
		body{
			font-family: Arial, sans-serif;
		}
		h2{
			text-align: center;
		}
		form{
			width: 50%;
			margin: auto;
		}
		label{
			display: block;
			font-weight: bold;
			margin-top: 10px;
		}
		input[type="text"], textarea{
			width: 100%;
			padding: 10px;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			resize: none;
		}
		input[type="submit"]{
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover{
			background-color: #45a049;
		}
		#result{
			width: 50%;
			margin: 20px auto;
			padding: 20px;
			border: 2px solid #ccc;
			border-radius: 4px;
			white-space: pre-wrap;
		}
	</style>
<body>
	<h2>Contoh Manipulasi File JSON</h2>
    <!-- kalo mo keren jadiin submit.php -->
	<form method="POST" action="submit.php">
		<label for="nama">Nama:</label><br>
		<input type="text" id="nama" name="nama"><br><br>
		<label for="alamat">Alamat:</label><br>
		<textarea id="alamat" name="alamat"></textarea><br><br>
		<input type="submit" value="Simpan" name="Simpan">
	</form>
	<div id="result"></div>
</body>
</html>
