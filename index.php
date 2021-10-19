<?php
 echo "<h1>Mostrando os maiores times do Brasil </h1>";
 
 $nome = "Corinthians"; 
 
 echo (" O top 1 é:  ".$nome."<br>");
 
 $times = array ("Palmeiras","Santos","Fluminense","São Paulo","Vasco","Gremio");
 
 
 for ($i=0; $i<sizeof($times) ; $i++){
	 
	 
	 echo ("<br> O nome do time é: ".$times[$i]);
 }
 
 echo ("<br><br>Visualizando o Vetor times:<br>");
 
 echo ('<pre>');
 print_r($times);
 echo ('</pre>');
 
 
 echo("Adicionando valores no array: ");
 
 $times[]="Ituano";
 $times[]="Portuguesa";
 $times[]="Coritiba";
 
 echo ('<pre>');
 print_r($times);
 echo ('</pre>');