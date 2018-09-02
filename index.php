<?php 
include 'text.php';
/*$texto ="Take all I have in these hands
 And multiply, God, all that I am 
 And find my heart on the altar again
 Set me on fire, set me on fire  

 Here I am, God 
 Arms wide open 
 Pouring out my life 
 Gracefully broken 
 
My heart stands in awe of Your name 
Your mighty love stands strong to the end 
You will fulfill Your purpose for me 
You won’t forsake me, You will be with me 

All to Jesus now 
All to Jesus now 
Holding nothing back 
Holding nothing back 
 I surrender 
 I surrender 

Your power at work in me 
 I’m broken gracefully 
 I’m strong when I am weak 
 I will be free"; 
*/

//removendo carecteres indesejados
 
$texto = str_replace("'","", $texto);
$texto = str_replace(",","", $texto);
$texto = str_replace("’","", $texto);
$texto = str_replace("(","", $texto);
$texto = str_replace("-->","", $texto);
$texto = str_replace("->","", $texto);
$texto = str_replace(".'","", $texto); 
$texto = str_replace(".","", $texto);

for ($i=0; $i < 100; $i++) { 
	# code...
	$texto = str_replace("$i","", $texto);
}



$partes = explode(' ', $texto);
echo "Palavra : Ocorrencias";
echo "<br>";
$palavras = array();
foreach ($partes as $key => $value) {

	if (!in_array($value, $palavras)){
		
		$ocorrencias = substr_count($texto, $value);
		$palavras[$value]=$ocorrencias;
		
		echo "$key - $value - $ocorrencias"; 
		echo "<br>";
	}
}


// foreach ($palavras as $key => $value) {
// 	if ($value>2 and $value<15) {
// 		//echo "$key -  $value <br>";
// 		echo "$key <br>";
// 	}
	
// }


?>