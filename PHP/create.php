<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];


echo "Name " . $nama."<br>";
echo "alamat ". $alamat;

$data[] = array(
    "nama" => $nama,
    "alamat" => $alamat
);

//mengkodekan data jd format json
$jsonfile = json_encode($data);

// menyimpan data ke dalam sebuah file json

file_put_contents('dataAlamat.json',$jsonfile );

?>