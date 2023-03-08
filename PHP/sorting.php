<?php
//sorting pada array

    //inisialisasi array
    $cars = ["Kijang", "Kuda Merah", "Hamster","Marmut Balap","Capybara",
    "lambo","inopa mitik disel"];


    //menggunakan fungsi sort pada array 
    //sort($cars);//array yang akan diurutkan secara default dalam bentuk ascending
    rsort($cars); // kalo gini jadi descending dia
    foreach($cars as $haiwan)
    {
        echo $haiwan;
        echo"<br>";
    }

    //inisialisasi array asosiatip
    $rilhewan = 
    [
        "Capbara" => "27",
        "Meow" => "19",
        "Sapi" => "17"
    ];

    //beberapa fungsi sorting pada array asosiatif
        //asort > value, ksort > key, arsort >value, krsort > key
        
        arsort($rilhewan);
        foreach($rilhewan as $key =>$value)
        {
            echo "key = ".$key." & Value = ".$value;
            echo "<br>"; 

        }


        //JSON --> JavaScript Object Notation.

        echo"<br>";
        //yg ini buat encode 
        $hewan_json = json_encode($rilhewan);
        echo $hewan_json;

        //ini fungsi buat decode ato balikin lgi
        $obj = json_decode($hewan_json);
        echo "<br>";
        echo "<br>";
        echo $obj->Capbara."<br>";
        echo $obj->Meow."<br>";
        echo $obj->Sapi."<br>";
?>