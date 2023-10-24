<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="">
    
    <label>Insira o valor em dólar que será convertido: </label> 

<input type="text" name="Dolar" placeholder="Valor em dólar">

<label>Valor do real no dia de hoje: </label>


<input type="submit" value="Converter">



</form>



<?php

if (isset($_GET["Dolar"]))

{

$dolar = $_GET["Dolar"] * 5.01;




echo $dolar;

}


?>



</body>
</html>