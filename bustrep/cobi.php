<?php
function tambahValue($parameter){
    $parameter = $parameter + 1;
}

$variabel = 5;
tambahValue($variabel);
echo 'hasil function by value tambah (5) = ' . $variabel;

//function by ref
function tambahReference(&$parameter){
    $parameter = $parameter + 1;
}

echo '<br><br><br>';

$variabel2 = 5;
tambahReference($variabel2);
echo 'hasil function by reference tambahReference(5) = ' . $variabel2;
?>