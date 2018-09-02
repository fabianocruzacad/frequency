<?php 
//include 'text.php';
$texto  = $_POST['texto'];

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
		      <th scope='col'>Frequência</th>
		      <th scope='col'> Percentual de Frequencia </th>		      
		    </tr>
	    </thead>
";

$partes = explode(' ', $texto);
//limpar arrays nulos 
$partes = array_filter($partes);



foreach ($partes as $key => $value) {
	
	
	$ocorrencias = substr_count($texto, $value);
	$totalDePalavras = count($partes);
	$percentFrequencia = $ocorrencias / $totalDePalavras;
	
		


	echo "
		<tbody>
			<tr>
				<td>$key</td>
				<td>$value</td>
				<td>$ocorrencias</td>
				<td>% $percentFrequencia </td>
			</tr>
		</tbody>
	
	";
}
echo "</table>";


?>