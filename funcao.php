<?php 
//include 'text.php';
$texto  = $_POST['texto'];
include 'style.php';

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
	$percentFrequencia = ($ocorrencias / $totalDePalavras)*100;
	

	echo "
		<tbody>
			<tr>
				<td>$key</td>
				<td>$value</td>
				<td>$ocorrencias x</td>
				<td>$percentFrequencia% </td>
			</tr>
		</tbody>
	
	";
}
echo "</table>";


?>