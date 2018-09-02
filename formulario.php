<?php 
include 'style.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<div class="jumbotron">
  
  <h1>WordFrequency<span class="glyphicon glyphicon-search" aria-hidden="true"></span></h1>
  	<p> O analisador de palavras	</p>
  

  <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Ler mais</a></p> -->
</div>

<!-- Image and text -->

<form class="form" action="funcao.php" method="post">
	 <!-- <input type="textarea" name="texto"> -->
	

	 <div class="form-group">
	    <label for="exampleFormControlTextarea1">Cole aqui o texto</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" name='texto' rows="10"></textarea>
	  </div>
	
	<button type="submit" class="btn btn-dark btn-lg">
		Enviar <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	</button>
	


</form>

</body>
</html>