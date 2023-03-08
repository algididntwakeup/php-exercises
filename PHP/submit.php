<?php
if(isset($_POST['nama']) && isset($_POST['alamat'])){
    $data = array(
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat']
    );
    $file = 'data.json';
    $json_data = file_get_contents('data.json');
    $data_array = json_decode($json_data, true);
    array_push($data_array, $data);
    $json_data = json_encode($data_array, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $json_data);
    echo 'Data berhasil disimpan';
}
?>
