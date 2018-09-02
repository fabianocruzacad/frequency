<?php 
include 'text.php';
include 'style.php';
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
$texto = str_replace("\n", " ", $texto);
/*for ($i=0; $i < 100; $i++) { 
	# code...
	$texto = str_replace("$i","", $texto);
}
*/


echo "

<h1> Lista de Palavras x Frequencia </h1>
<table class='table'>
		<thead class='thead-dark'>
		   <tr>
		      <th scope='col'>ID</th>
		      <th scope='col'>Palavra</th>
		      <th scope='col'> % </th>		      
		    </tr>
	    </thead>
";

$partes = explode(' ', $texto);
foreach ($partes as $key => $value) {
	echo "
		<tbody>
			<tr>
				<td>$key</td>
				<td>$value</td>
				<td>?</td>
			</tr>
		</tbody>
	
	";
}
echo "</table>";


/*echo "Palavra : Ocorrencias";
echo "<br>";*/
/*$palavras = array();
foreach ($partes as $key => $value) {


	if (!in_array($value, $palavras)){
		
		$ocorrencias = substr_count($texto, $value);
		$palavras[$value]=$ocorrencias;
		
		echo "$key-$value-$ocorrencias"; 
		echo "<br>";
	}
}
*/


/*echo "=================";
echo "<pre>";
print_r($partes);
*/

// foreach ($palavras as $key => $value) {
// 	if ($value>2 and $value<15) {
// 		//echo "$key -  $value <br>";
// 		echo "$key <br>";
// 	}
	
// }


?>