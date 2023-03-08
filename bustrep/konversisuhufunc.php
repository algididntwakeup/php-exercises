<!DOCTYPE HTML>

<html>
<head> 
      <title>Temp Conversion</title>
      <meta charset="utf-8">
<body>
      <form name="tempConvert" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

<table>
<tr>
    <td>Enter value to convert</td>
    <td><input type="text" name="valueConvert" id="valueConvert" size="15"></td>
</tr>

<tr>
    <td>Convert to:</td>
    <td><select name="convertType" id="convertType" size="1">
               <option disabled> Select a measurement type</option>
               <option value="celsius">Celsius</option>
               <option value="fahrenheit">Fahrenheit</option>
        </select>
    </td>
</tr>

<tr>
    <td><input type="submit" name="btnConvert" id="btnConvert" value="Convert"></td>
    <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
</tr>



</form>

<?php

function tempConvert($valueConvert, $convertType)
{
   if($convertType == "fahrenheit"){
       $conversion = ((9/5) * $valueConvert) + (32);
   }
    else if ($convertType == "celsius"){
       $conversion = ($valueConvert - 32) * (5/9);
   }
   return $conversion;
}

$valueConvert = $_POST['valueConvert'];
$convertType = $_POST['convertType'];
$conversion = tempConvert($valueConvert, $convertType);
echo "Suhu yg di input adalah $valueConvert. suhu setelah dikonversikan adalah. $conversion.";

?>

    </body>
</html>