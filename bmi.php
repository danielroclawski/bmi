<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style type="text/css">
		#box{
			width: 900px;
			height: 600px;
			background-color: white;
			margin: auto;
		}
		#naglowek{
			width: 900px;
			height: 150px;
			background-color: white;
		}
		#menu{
			width: 200px;
			height: 450px;
			background-color: white;
			float: left;
		}
		#program{
			width: 700px;
			height: 450px;
			background-color: white;
			float: left;
		}
	</style>
</head>
<body>
	<div id="box">
		<div id="naglowek"><h1 align="center">PROGRAMY PHP</h1></div>
		<div id="menu"><h1 align="center">MENU</h1><br></div>
		<div id="program">
			<form method="post">
<table>
<tr>
<td>waga: </td><td><input type="text" name="wg"></td>
</tr>
<tr>
<td>wzrost: </td><td><input type="text" name="wr"></td>
</tr>
</table>
<br>
<input type="submit" name="Wyślij" value="Wyślij">
<input type="reset" name="reset" value="Wyczyść">

<?php

if (empty($_POST['wg']) && empty($_POST['wr'])) {
	
	echo "Pola nie mogą być puste";
}
else
{
	$x=$_POST['wg'];
	$y=$_POST['wr'];
    $z=$y*$y;
    $wynik=$x/$z;

	echo "Twoje BMI to ".number_format($wynik,2);
    echo '<br>';
    
    if($wynik<16)
        echo "Jesteś Wygłodzony !!!";

   if($wynik>16 && $wynik<16.99)
       echo "Jesteś wychudzony !";
       
  if($wynik>17 && $wynik<18.49)
      echo "Masz niedowage!";
    
      if($wynik>18.5 && $wynik<24.99)
      echo "Brawo !!! Twoja wartość jest prawidłowa";
    
    if($wynik>25 && $wynik<29.99)
      echo "Masz lekka nadwage  ";
    
    if($wynik>30 && $wynik<34.99)
      echo "I stopień otyłości";
    
    if($wynik>35 && $wynik<39.99)
      echo "II stopień otyłości";
    
    if($wynik>=40)
      echo "Skrajna otyłość";
    
    echo "<br><br>";
   
}
?>
</form>
</body>
</html>