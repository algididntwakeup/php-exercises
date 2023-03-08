<?php
    $file = "prot.txt";
    $bukafile = fopen($file, "r");
    if(!$bukafile){
        print ("File $file gagal dibuka :(");
        exit;
    }

    while(!feof($bukafile))
    {
        $file = fgets($bukafile, 255);

        print("$file <br>");
    }
    
    fclose($bukafile);
?>