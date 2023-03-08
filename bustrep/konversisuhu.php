<html>
    <head>
        <title>Konversi Suhu</title>
    </head>
    <body>
        <h1>Konversi Suhu</h1>
        <form method="post">
            <input type="radio" name="input_unit" value="reamur" checked> Reamur<br>
            <input type="radio" name="input_unit" value="fahrenheit"> Fahrenheit<br>
            <input type="radio" name="input_unit" value="kelvin"> Kelvin<br>
            <input type="radio" name="input_unit" value="celcius"> Celcius<br>
            <br>
            Masukkan suhu: <input type="text" name="input_temp"><br><br>
            <input type="submit" name="submit" value="Konversi">
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $input_unit = $_POST['input_unit'];
            $input_temp = $_POST['input_temp'];

            switch ($input_unit) {
                case 'reamur':
                    $reamur = $input_temp;
                    $fahrenheit = ($reamur * 9/4) + 32;
                    $kelvin = ($reamur * 5/4) + 273;
                    break;
                case 'fahrenheit':
                    $fahrenheit = $input_temp;
                    $celcius = (9/5 * $fahrenheit) +32;
                    $reamur = ($fahrenheit - 32) * 4/9;
                    $kelvin = ($fahrenheit + 459.67) * 5/9;
                    break;
                case 'kelvin':
                    $kelvin = $input_temp;
                    $celcius = $kelvin - 273;
                    $reamur = ($kelvin - 273) * 4/5;
                    $fahrenheit = ($kelvin * 9/5) - 459.67;
                    break;
                case 'celcius':
                    $celcius = $input_temp;
                    $reamur = $celcius  * 4/5;
                    $fahrenheit = ($celcius * 9/5) + 32;
                    $kelvin = $celcius + 273.15;
                    break;
            }

            echo "<br>Hasil konversi:<br>";
            echo "Reamur: " . $reamur . "<br>";
            echo "Fahrenheit: " . $fahrenheit . "<br>";
            echo "Kelvin: " . $kelvin . "<br>";
            echo "Celcius: " . $celcius . "<br>";
        }
        ?>

    </body>
</html>
