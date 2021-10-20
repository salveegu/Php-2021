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
 
 // adicionando elemento na proxima posicao do array

 $times[]="Ituano";
 $times[]="Portuguesa";
 $times[]="Coritiba";
 
 echo ('<pre>');
 print_r($times);
 echo ('</pre>');

 //indice do "array associativos" com nome(String) antes usavamos números

 $time = array(
	 "nome" => "Atlético", "estado" => "MG" , "pontos" => 38 , "jogos" => 20
 );


 for ($i=0; $i<sizeof($times) ; $i++){
	 
	 
	echo ("<br> Array associativo: ".$time[$i]);
}
 