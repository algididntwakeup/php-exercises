<?php

    $barang=["Buku Tulis", "Penghapus", "Spidol"];
    $barang[3]= "Roti";
    $barang[4]= "sapi";
    unset($barang[3]);
    // dengan unset deklarsi yang ada pda variabel array dianggap tidak terdeclare
    $barang[]="Nasi";
    $barang[6]="Keju";

    echo "looping menggunakan for"."<br>";
    for($i=0;$i<count($barang); $i++);{
        echo $barang[$i]."</br>";
    }

    echo "looping menggunakan foreach"."<br>";
        foreach($barang as $b){
            echo $b. "<br/>";
        }
    echo "Jumlah elemen array = " .count($barang). "<br>";

    echo "Barang [0] =" .$barang[0]."<br/>";
    echo "Barang [3] =" .$barang[3]."<br/>";
    echo "Barang [4] =" .$barang[4]. "<br/> <br> <br>";


    // array asosiatip
    $b4r4ng=[
        "kode" => "42069",
        "nama" => "lean",
        "harga" => 3000
    ];

    echo "print array asosiatip <br> <br>";
    echo "Kode Produk = ".$b4r4ng["kode"]."<br>";
    echo "Nama Produk = ".$b4r4ng["nama"]."<br>";
    echo "Harga Produk = ".$b4r4ng["harga"]."<br>";

?>