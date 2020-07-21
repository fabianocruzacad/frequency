
<?php 
include 'style.php';
include 'text.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Cole um texto para analisar frequencia</h1>
<form action="teste.php" method="post">
	 <input type="text" name="texto">
	<input type="submit" name="">
</form>

</body>
</html>

<?php
echo   "<pre>";
$partes = explode(' ',$texto);
if (isset($partes)){
   
	foreach ($partes as $key => $value) {
    echo $key."<br>";

	}


}

?>